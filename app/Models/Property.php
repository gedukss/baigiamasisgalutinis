<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'location',
        'description',
        'year',
        'size',
        'bedrooms',
        'bathrooms',
        'agent_id',
        'city_id',
        'type_id',
        'image',
    ];

    public $with = ['agent', 'city', 'type', 'amenities', 'images'];

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return BelongsTo
     */
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(PropertyImage::class);
    }

    public static function customCreate(Request $request): self
    {
        return DB::transaction(function () use ($request) {
            $image = $request->file('image');
            $inputs = $request->input();
            $inputs['image'] = $image?->getClientOriginalName() ?? '';

            $property = self::create($inputs);
            $property->syncAll($request);

            
            if ($images = $request->file('images')) {
                $images = $property->uploadImages($images);
                $property->insertImages($images);
            }

            
            if ($image = $request->file('image')) {
                $images = $property->uploadImages([$image]);
            }

            return $property;
        });
    }

    public function customUpdate(Request $request): self
    {
        DB::transaction(function () use ($request) {
            
            $oldImages = $request->input('old_images') ?? [];
            
            PropertyImage::where('property_id', $this->id)->whereNotIn('name', $oldImages)->forceDelete();

            

            if ($images = $request->file('images')) {
                $images = $this->uploadImages($images);
                $this->insertImages($images);
            }

            
            $inputs = $request->input();
//            dd($inputs);
            if ($image = $request->file('image')) {
                $images = $this->uploadImages([$image]);
            }

            $inputs['image'] =  $request->file('image')?->getClientOriginalName() ?? $request->get('old_main_image') ?? '';

            $this->syncAll($request)->fill($inputs)->save();
        });

//        dd($this);

        return $this;
    }

    public function insertImages($images): self
    {
        collect($images)->each(function (string $item, int $key) {
            PropertyImage::updateOrCreate([
                'name' => $item,
                'property_id' => $this->id
            ]);
        });

        return $this;
    }

    public function syncAll(Request $request): self
    {


        $this->amenities()->sync($request->get('amenities'));

        return $this;
    }

    public function uploadImages(array $images): array
    {
        $paths = [];
        foreach ($images as $image) {

            if (!$image instanceof UploadedFile) {
                throw new \Exception('Instance of Illuminate\Http\UploadedFile file expected');
            }

            $imageName = $image->getClientOriginalName();
            $paths[] = $imageName;

            if (Storage::exists("public/images/$imageName")) {
                continue;
            }

            $image->storeAs(
                'public/images',
                $image->getClientOriginalName()
            );
        }

        return $paths;
    }
}

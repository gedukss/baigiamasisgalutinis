<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Agent;
use App\Models\Amenity;
use App\Models\City;
use App\Models\PropertyImage;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class AdminPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::get();
        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::get();
        $amenities = Amenity::get();
        $cities = City::get();
        $agents = Agent::get();
        return view('admin.properties.create',  compact('types','cities','agents', 'amenities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request)
    {
        Property::customCreate($request);
        return to_route('admin.properties.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
         //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        $types = Type::get();
        $amenities = Amenity::get();
        $cities = City::get();
        $agents = Agent::get();

        return view('admin.properties.edit', compact('property', 'types','cities','agents', 'amenities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property->customUpdate($request);
        return to_route('admin.properties.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return response()->json(['success'=>true]);
    }
}

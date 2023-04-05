@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editing {{ $property->location ?? '' }} property (ID: {{ $property->id ?? '' }})</h3>
        </div>
        <form action="{{ route('admin.properties.update', $property) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $property->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" value="{{ $property->location ?? '' }}"
                           id="location" placeholder="Enter location">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description"
                              id="description" placeholder="Enter description">{{ $property->description ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" class="form-control" min="1800" max="2099" name="year" value="{{ $property->year ?? '' }}"
                           id="year" placeholder="Enter year of costruction">
                </div>

                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="number" class="form-control" step="0.01" name="size" value="{{ $property->size ?? '' }}"
                           id="size" placeholder="Enter size in square meters">
                </div>

                <div class="form-group">
                    <label for="bedrooms">Bedrooms</label>
                    <input type="number" class="form-control" min="0" max="10" name="bedrooms" value="{{ $property->bedrooms ?? '' }}"
                           id="bedrooms" placeholder="Enter number of bedrooms">
                </div>

                <div class="form-group">
                    <label for="bathrooms">Bathrooms</label>
                    <input type="number" class="form-control" min="0" max="10" name="bathrooms" value="{{ $property->bathrooms ?? '' }}"
                           id="bathrooms" placeholder="Enter number of bathrooms">
                </div>

                <x-forms.relation-select :tagName="'Agent'" :relationName="'agent_id'" :model="$property" :relationItems="$agents" :optionDisplay="'fullName'" single required />

                <x-forms.relation-select :tagName="'City'" :relationName="'city_id'" :model="$property" :relationItems="$cities" single required />

                <x-forms.relation-select :tagName="'Property type'" :relationName="'type_id'" :model="$property" :relationItems="$types" single required />

                <x-forms.multi-relation-select :tagName="'amenities'" :model="$property" :relationItems="$amenities" />

                <div class="form-group">
                    <x-forms.image-input :images="[$property->image]" :label="'main-image'" :inputName="'image'" :oldInputName="'old_main_image'"/>
                </div>

                <div class="form-group">
                    <x-forms.image-input :images="$property->images"  :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

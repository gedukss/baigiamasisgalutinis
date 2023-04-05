@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">New property</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" id="location" required placeholder="Enter location">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="" placeholder="Enter description">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" min="1800" max="2099" name="year" id="year" placeholder="Enter year of costruction">
            </div>

            <div class="form-group">
                <label for="size">Size</label>
                <input type="number" class="form-control" step="0.01" name="size" id="size" placeholder="Enter size in square meters">
            </div>

            <div class="form-group">
                <label for="bedrooms">Bedrooms</label>
                <input type="number" class="form-control" min="0" max="10" name="bedrooms" id="bedrooms" value="0" placeholder="Enter number of bedrooms">
            </div>

            <div class="form-group">
                <label for="bathrooms">Bathrooms</label>
                <input type="number" class="form-control" min="0" max="10" name="bathrooms" id="bathrooms" value="0" placeholder="Enter number of bathrooms">
            </div>


            <x-forms.relation-select :tagName="'Agent'" :relationName="'agent_id'" :relationItems="$agents" single :optionDisplay="'fullName'" required />

            <x-forms.relation-select :tagName="'City'" :relationName="'city_id'" :relationItems="$cities" single required />

            <x-forms.relation-select :tagName="'Property type'" :relationName="'type_id'" :relationItems="$types" single required />

            <x-forms.multi-relation-select :tagName="'Amenities'" :relationName="'amenities'" :relationItems="$amenities" />

            <div class="form-group">
                <x-forms.image-input :label="'main-image'" :inputName="'image'" :oldInputName="'old_main_image'"/>
            </div>

            <div class="form-group">
                <x-forms.image-input :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Properties</h3>
                <a href="{{ route('admin.properties.create') }} " class="btn btn-app">
                  <i class="fas fa-plus"></i> New
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{Str::ucfirst(trans('app.image'))}}</th>
                            <th>{{Str::ucfirst(trans('app.location'))}}</th>
                            <th>{{Str::ucfirst(trans('app.description'))}}</th>
                            <th>{{Str::ucfirst(trans('app.year'))}}</th>
                            <th>{{Str::ucfirst(trans('app.size'))}}</th>
                            <th>{{Str::ucfirst(trans('app.bedrooms'))}}</th>
                            <th>{{Str::ucfirst(trans('app.bathrooms'))}}</th>
                            <th>{{Str::ucfirst(trans('app.type'))}}</th>
                            <th>{{Str::ucfirst(trans('app.city'))}}</th>
                            <th>{{Str::ucfirst(trans('app.amenities'))}}</th>
                            <th>{{Str::ucfirst(trans('app.agent'))}}</th>
                            <th>{{Str::ucfirst(trans('app.created_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.updated_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.actions'))}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $property)
                            <tr>
                                <td>{{ ($property->id ?? '')}} </td>
                                <td>
                                    <img width="100" src="{{ asset($property->image ? 'storage/images/'. $property->image : "images/no-image.png")}} ">
                                </td>
                                <td> {{ ($property->location ?? '') }} </td>
                                <td> {{ ($property->description ?? '') }} </td>
                                <td> {{ ($property->year ?? '') }} </td>
                                <td> {{ ($property->size ?? '') }} </td>
                                <td> {{ ($property->bedrooms ?? '') }} </td>
                                <td> {{ ($property->bathrooms ?? '') }} </td>
                                <td> {{ ($property->type->name ?? '') }}
                                <td> {{ ($property->city->name ?? '') }} </td>
                                <td>
                                     @foreach($property->amenities as $amenity)
                                        <span class="badge badge-secondary">{{$amenity->name ?? ''}}</span>
                                     @endforeach
                                </td>
                                <td> {{ ($property->agent->fullName ?? '') }} </td>
                                <td> {{ ($property->created_at ?? '') }} </td>
                                <td> {{ ($property->updated_at ?? '') }} </td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.properties.edit', $property) }} ' type="button" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item delete" onclick="event.preventDefault();" href="{{ route('admin.properties.destroy', $property) }} ">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>{{Str::ucfirst(trans('app.image'))}}</th>
                            <th>{{Str::ucfirst(trans('app.location'))}}</th>
                            <th>{{Str::ucfirst(trans('app.description'))}}</th>
                            <th>{{Str::ucfirst(trans('app.year'))}}</th>
                            <th>{{Str::ucfirst(trans('app.size'))}}</th>
                            <th>{{Str::ucfirst(trans('app.bedrooms'))}}</th>
                            <th>{{Str::ucfirst(trans('app.bathrooms'))}}</th>
                            <th>{{Str::ucfirst(trans('app.type'))}}</th>
                            <th>{{Str::ucfirst(trans('app.city'))}}</th>
                            <th>{{Str::ucfirst(trans('app.amenities'))}}</th>
                            <th>{{Str::ucfirst(trans('app.agent'))}}</th>
                            <th>{{Str::ucfirst(trans('app.created_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.updated_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.actions'))}}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

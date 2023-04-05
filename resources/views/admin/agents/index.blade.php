@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Agents</h3>
                <a href="{{ route('admin.agents.create') }} " class="btn btn-app">
                  <i class="fas fa-plus"></i> New
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agents as $agent)
                            <tr>
                                <td>{{ ($agent->id ?? '')}} </td>
                                 <td>
                                     <img width="100" src="{{ asset($agent->image ? 'storage/images/'. $agent->image : "images/no-agent.png")}} ">
                                </td>
                                <td> {{ ($agent->first_name ?? '') }} </td>
                                <td> {{ ($agent->last_name ?? '') }} </td>
                                <td> {{ ($agent->email ?? '') }} </td>
                                <td> {{ ($agent->phone ?? '') }} </td>
                                <td> {{ ($agent->created_at ?? '') }} </td>
                                <td> {{ ($agent->updated_at ?? '') }} </td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.agents.edit', $agent) }} ' type="button" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item delete" href="{{ route('admin.agents.destroy', $agent) }} ">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
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

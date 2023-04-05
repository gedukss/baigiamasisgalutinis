@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editing {{ ($agent->fullName ?? '')  }} (ID: {{ $agent->id ?? '' }})</h3>
        </div>
        <form action="{{ route('admin.agents.update', $agent) }}" method="POST">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $agent->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <label for="first-name">First name</label>
                        <input type="text" class="form-control" name="first_name" id="first-name"
                            value="{{ $agent->first_name ?? '' }}" placeholder="Vardas">
                    </div>

                    <div class="form-group">
                        <label for="last-name">Last name</label>
                        <input type="text" class="form-control" name="last_name" id="last-name"
                            value="{{ $agent->last_name ?? '' }}" placeholder="Enter last name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"
                        value="{{ $agent->email ?? '' }}" id="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="text" class="form-control" name="phone"
                           value="{{ $agent->phone ?? '' }}" id="phone" placeholder="Enter phone number">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

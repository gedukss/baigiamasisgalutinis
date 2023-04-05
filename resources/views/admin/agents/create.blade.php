@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">New Agent</h3>
    </div>
    <form action="{{ route('admin.agents.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="first-name">First name</label>
                <input type="text" class="form-control" name="first_name" id="first-name" placeholder="Enter first name">
            </div>

            <div class="form-group">
                <label for="last-name">Last name</label>
                <input type="text" class="form-control" name="last_name" id="last-name" placeholder="Enter last name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

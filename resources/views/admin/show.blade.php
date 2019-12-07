@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>Admin Details</h3>
        </div>
    </div>
    <br>
    <center>
        <div class="col-md-6 col-lg-6">
            <div class="card bg-light">
                <div class="card-header">Admins</div>
                <div class="card-body">
                <ul class="list-group">
                        <li class="list-group-item text-left">Name: {{ $admin->name }}</li>
                        <li class="list-group-item text-left">Email: {{ $admin->email }}</li>
                        <li class="list-group-item text-left">Phone Number: {{ $admin->phone_no }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </center>
</div>

@endsection
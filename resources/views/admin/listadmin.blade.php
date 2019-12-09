@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>List of Admins</h3>
        </div>
    </div>
    <br>
    <center>
        <div class="col-md-6 col-lg-6">
            <div class="card bg-light">
                <div class="card-header">Admins</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($admin as $adminuser)
                            <li class="list-group-item text-left"><a href="/users/{{ $adminuser->id }}">{{ $adminuser->name }}</a>
                            @if (Auth::user()->is_admin == 'superadmin')
                            <form action="{{route('users.destroy',$adminuser->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                             </form>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </center>
</div>

@endsection
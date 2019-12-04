@extends('layouts.app')
@section('content')

<!-- List of All User -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List of User</h3>
		</div>
	</div>

	<table class="table table-striped">
		<tr>
			<td>No.</td>
			<td>Name</td>
			<td>Picture</td>
			<td>Email</td>
			<td>Phone</td>
			<td>Action</td>
			<th width="180px">Action</th>
		</tr>

		@foreach($users as $user)
		@if($user->is_admin == 'user')
		<tr>
			<td>No.</td>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td><img src="/uploads/avatars/{{$user->picture}}"></td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->phone }}</td>
			<td>
				<form class="" action="{{route('users.destroy',$user->id)}}" method="post">
					<a class="brn brn-sm btn-success"href="{{route('users.show',$user->id)}}"></a>
					<a class="brn brn-sm btn-warning"href="{{route('users.show',$user->id)}}"></a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-sm btn-danger">Delete</button>
				</form>
			</td>
			<th width="180px"></th>
		</tr>
		@endif
		@endforeach
	</table>
</div>
@endsection
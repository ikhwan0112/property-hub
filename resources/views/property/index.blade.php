@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List  of Properties</h3>
		</div>
		<div class="col-sm-2">
			<a class="btn btn-sm btn-success" href="{{ route('properties.create') }}"> Enter new property</a>
		</div>
	</div>

	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{$message}}</p>
	</div>
	@endif

	<table class="table table-hover table-sm">
		<tr>
			<th width="50px"><b>No.</b></th>
			<th width="200px">Picture</th>
			<th width="300px">Description</th>
			<th width="300px">Address</th>
			<th>Price</th>
			<th>Status</th>
			<th width="180px">Action</th>
		</tr>

		@foreach ($properties as $property)

		<tr>
			<td><b>{{$property->id}}</b></td>
			<td>{{$property->picture}}</td>
			<td>{{$property->description}}</td>
			<td>{{$property->address}}</td>
			<td>{{$property->price}}</td>
			<td>{{$property->status}}</td>
			<td>{{$property->picture}}</td>
			<td>
				<form class="" action="{{route('properties.destroy',$property->id)}}" method="post">
					<a class="brn brn-sm btn-success"href="{{route('properties.show',$property->id)}}"></a>
					<a class="brn brn-sm btn-warning"href="{{route('properties.show',$property->id)}}"></a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-sm btn-danger">Delete</button>
				</form>
			</td>
		</tr>

		@endforeach
	</table>
	{!!$properties->links()!!}
</div>

@endsection
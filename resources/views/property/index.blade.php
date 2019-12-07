@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List of Properties</h3>
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
			<th><b>No.</b></th>
			<th>Description</th>
			<th>Address</th>
			{{-- <th>Price</th> --}}
			<th>Status</th>
			<th>Action</th>
		</tr>

		@foreach ($properties as $no => $property)

		<tr>
			<td><b>{{$no + 1}}</b></td>
			<td>{{$property->description}}</td>
			<td>{{$property->address}}</td>
			{{-- <td>RM{{$property->price}}</td> --}}
			<td>{{$property->status}}</td>
			<td>
				<div>
					@if($check)
						<a href=" {{ url('/detail/create', ['id' => $property->id]) }}" class="btn btn-success disabled">Add Details</a>
					@else
						<a href=" {{ url('/detail/create', ['id' => $property->id]) }}" class="btn btn-success" >Add Details</a>
					@endif
					<a href="/details/{{ $property->detail_id }}/edit" class="btn btn-success">Edit Details</a>
				</div>
				<br>
				<div>
					<form class="" action="{{route('properties.destroy',$property->id)}}" method="post">
						<a class="btn btn-primary" href="{{route('properties.edit', $property->id)}}">Edit</a>
						<a class="btn btn-warning" href="{{route('properties.show', $property->id)}}">Show</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
			</td>
		</tr>

		@endforeach
	</table>
</div>

@endsection
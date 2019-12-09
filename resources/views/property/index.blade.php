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
			<th width="180px">Details</th>
			<th width="180px">Action</th>
		</tr>

		@foreach ($properties as $property)

		<tr>
			<td><b>{{$property->id}}</b></td>
			<td><img src="/uploads/properties/{{$property->picture}}"></td>
			<td>{{$property->description}}</td>
			<td>{{$property->address}}</td>
			<td>{{$property->price}}</td>
			<td>{{$property->status}}</td>
			<td>
				<div>
<<<<<<< Updated upstream
					<a href=" {{ route('details.create', $property->id) }}" class="btn btn-success">Add Details</a>
					<a href=" {{ route('details.index', $property->id) }}" class="btn btn-success">View Details</a>
=======
					@if($property->detail_id != null)
						<a href=" {{ url('/detail/create', ['id' => $property->id]) }}" class="btn btn-success disabled">Add Details</a>
					@else
						<a href=" {{ url('/detail/create', ['id' => $property->id]) }}" class="btn btn-success " >Add Details</a>
					@endif
					<a href="/details/{{ $property->detail_id }}/edit" class="btn btn-success">Edit Details</a>
				</div>
				<br>
				<div>
					<form class="" action="{{route('properties.destroy',$property->id)}}" method="post">
						<a class="btn btn-primary" href="{{route('properties.edit', $property->id)}}">Edit</a>

						@if($property->detail_id !=null)
						<a class="btn btn-warning" href="{{ url('/property/detail',['idD' => $property->detail_id]) }}">Show</a>
						@else
						<a class="btn btn-warning disabled" href="{{ url('/property/detail',['idD' => $property->detail_id]) }}">Show</a>
						@endif
						
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
>>>>>>> Stashed changes
				</div>
			</td>
			<td>
				<form class="" action="{{route('properties.destroy',$property->id)}}" method="post">
					<a class="brn brn-sm btn-success"href="{{route('properties.edit',$property->id)}}">edit</a><br>
					<a class="brn brn-sm btn-warning"href="{{route('properties.show',$property->id)}}">show</a><br>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-sm btn-danger">Delete</button>
				</form>
				<!-- <form class="" action="{{route('properties.destroy',$property->id)}}" method="post">
					<a class="brn brn-sm btn-success"href="{{route('properties.show',$property->id)}}"></a>
					<a class="brn brn-sm btn-warning"href="{{route('properties.show',$property->id)}}"></a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-sm btn-warning">Edit</button>
				</form> -->
			</td>
		</tr>

		@endforeach
	</table>
</div>

@endsection
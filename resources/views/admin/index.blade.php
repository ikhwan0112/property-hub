@extends('layouts.app')
@section('content')

<!-- List of All Properties -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List of Properties</h3>
		</div>
	</div>

	<table class="table table-striped">
		<tr>
			<td>No.</td>
			<td>Description</td>
			<td>Address</td>
			<td>Price</td>
			<td>Status</td>
			<td>Picture</td>
			<td>Owned By</td>
			<th width="180px">Action</th>
		</tr>
		@foreach($properties as $property)
		<tr>
			<td>No.</td>
			<td>{{ $property->description }}</td>
			<td>{{ $property->address }}</td>
			<td>{{ $property->price }}</td>
			<td>{{ $property->status }}</td>
			<td><img src="/uploads/properties/{{$property->picture}}"></td>
			<td>{{ $property->user_id }}</td>
			<th width="180px"></th>
		</tr>
		@endforeach
	</table>
</div>
@endsection
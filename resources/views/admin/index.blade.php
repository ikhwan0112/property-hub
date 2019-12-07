@extends('layouts.app')
@section('content')

<!-- List of All Properties -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">List of Properties</h3>
		</div>
	</div>
	
	<table class="table table-striped">
		<tr>
			<td>No.</td>
			<td>Owned By</td>
			<td>Description</td>
			<td>Address</td>
			<td>Price</td>
			<td>Status</td>
			<td>Picture</td>
			
		</tr>
		@foreach($properties as $element => $property)
		<tr>
			<td>{{$element + 1}}</td>
			<td>{{ $property->name }}</td>
			<td>{{ $property->description }}</td>
			<td>{{ $property->address }}</td>
			<td>RM{{ $property->price }}</td>
			<td>{{ $property->status }}</td>
			<td><img src="/uploads/properties/{{$property->picture}}"></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection
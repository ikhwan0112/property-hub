@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-sm-4">
		<div class="col-lg-12">
			<h3>New Property Detail</h3>
		</div>
	</div>
	<br>
	@if ($errors->any())
	<div class="alert alert-danger">
		<strong>There are some problems with your input<br></strong>
		<ul>
			@foreach ($errors as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>

	</div>
	@endif

	<form class="forms-sample" action="{{ route('details.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="container">
			<label for="area">House Type</label>
			<div id="address-map-container">
				<select id="type" name="type" class="form-control">
					<option value="Bungalow">Bungalow</option>
					<option value="Terrace">Terrace</option>
					<option value="Semi-D">Semi-D</option>
					<option value="Flat">Flat</option>
					<option value="Apartment">Apartment</option>
				</select>
			</div><br>
			<div class="form-group">
				<label for="area">Area</label>
				<input type="text" name="area" class="form-control" id="area" placeholder="Enter Area">
			</div>
			<div class="form-group">
				<label for="bedroom">Bedroom</label>
				<input type="text" name="bedroom" class="form-control" id="bedroom" placeholder="Enter Bedroom">
			</div>
			<div class="form-group">
				<label for="bathroom">Bathroom</label>
				<input type="text" name="bathroom" class="form-control" id="bathroom" placeholder="Enter Bathroom">
			</div>

			<div class="form-group">
				<label for="facility-input">Facilities Available</label><br>
				<textarea class="form-control" name="facility" id="facility" placeholder="Enter facilities"
					rows="3"></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" value="{{ $id }}" name="property_id" class="form-control" id="property_id">
			</div>
			<div class="form-group float-right">
				<button type="submit" class="btn btn-success mr-2">Submit</button>
				<a href="{{route('properties.index')}}" class="btn btn-danger">Back</a>
			</div>
		</div>
	</form>
</div>



@endsection
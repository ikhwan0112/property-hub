@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-sm-4">
		<div class="col-lg-12">
			<h3>New Properties</h3>
		</div>
	</div>

	@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Woi!</strong> there where some problems with your input<br>
		<ul>
			@foreach ($errors as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>

	</div>
	@endif

	<form class="forms-sample" action="{{ route('details.store', $property->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		<div id="address-map-container">
			<select id="type" name="type">
				<option value="bungalow">Bungalow</option>
				<option value="terrace">Terrace</option>
				<option value="semid">Semi-D</option>
				<option value="flat">Flat</option>
				<option value="apartment">Apartment</option>
			</select> 
		</div>
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
						<textarea name="facility" id="facility" placeholder="Enter facilities"></textarea> 
					</div>
					<div class="form-group">
						<input type="readonly" name="property_id" class="form-control" value="{{ $property->id }}">					
					</div>

		<br>
		<br>
		<div class="col-md-12">
			<button type="submit" class="btn btn-success mr-2">Submit</button>
			<a href="{{route('properties.index')}}" class="btn btn-danger">Back</a>
		</div>
	</form>
</div>



@endsection


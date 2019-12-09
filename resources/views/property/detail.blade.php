@extends('layouts.app')
@section('content')
<<<<<<< Updated upstream
@section('scripts')
<!-- @parent
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
@stop -->
<div id="app">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Properties Detail</h3>
				<strong>Description :</strong>{{$property->description}}
			</div>
			<div class="col-md-10">
				<hr>
				<strong>Picture :</strong><img src="/uploads/properties/{{$property->picture}}" width="100%">
			</div><div class="col-md-10">
				<br>
				<strong>Price :</strong>{{$property->price}}
			</div><div class="col-md-10">
				<br>
				<strong>Status :</strong>{{$property->status}}
			</div><div class="col-md-10">
				<br>
				<strong>Address :</strong>{{$property->address}}
			</div>
			<div id="map-canvas" class="map-canvas"></div>
		</div>

=======


<!-- @foreach($properties as $property) -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Properties Detail</h3>
			<strong>Description :</strong>{{$property->description}}
		</div>
		<!-- <table>
			<tr>
				<th rowspan="6">
					<div class="col-md-12">
						<hr>
						<strong>Picture :</strong><img src="/uploads/properties/{{$property->picture}}" width="100%">
					</div>
				</th>
				<th></th>
			</tr>
			<tr>
				<td>Hai</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td rowspan="5"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table> -->
		
		<div class="col-md-12">
			<hr>
			<strong>Picture :</strong><img src="/uploads/properties/{{$property->picture}}" width="100%">
		</div>
		<div class="col-md-12">
			<br>
			<strong>Price :</strong>{{$property->price}}
		</div>
		<div class="col-md-12">
			<br>
			<strong>Status :</strong>{{$property->status}}
		</div>
		<div class="col-md-12">
			<br>
			<strong>Address :</strong>{{$property->address}}
		</div>
		<div class="col-md-12 ">
			<input type="hidden" id="address-input" name="address_address" class="form-control map-input"
				value="{{$property->address}}">
			<input type="hidden" name="address_latitude" id="address-latitude" value="{{$property->lat}}" />
			<input type="hidden" name="address_longitude" id="address-longitude" value="{{$property->lng}}" />
		</div>
		<br>
		<div id="address-map-container" style="width:80%;height:400px; ">
			<div style="width: 100%; height: 100%" id="address-map"></div>
		</div>
		<div class="col-md-12">
			<br>
			<strong>Area(in ft. square) :</strong>{{$property->area}}
		</div>
		<div class="col-md-12">
			<br>
			<strong>Bedroom Quantity :</strong>{{$property->bedroom}}
		</div>
		<div class="col-md-12">
			<br>
			<strong>Bathroom Quantity :</strong>{{$property->bathroom}}
		</div>
		<div class="col-md-12">
			<br>
			<strong>Facility :</strong>{{$property->facility}}
		</div>
		<div class="col-md-12">
			<br>
			<strong> House Type :</strong>{{$property->type}}
		</div>
>>>>>>> Stashed changes
		@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
		@endif
		<div class="col-md-12">
		<br><br>
		<a class="btn btn-primary" href="{{route('properties.index')}}">Back</a>

		</div>
	</div>
</div>
<!-- @endforeach -->


@endsection

@section('scripts3')
	@parent
	<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
	<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
	<script type="text/javascript"  src="{{ asset('js/mapshow.js') }}" defer>

		var lat={{$property->lat}};
		var lng={{$property->lng}};

		var map= new google.maps.Map(document.getElementById('map-canvas'),
		{
			center:{
				lat:lat,
				lng:lng
			},
			zoom: 15
		});
		var marker= new google.maps.Marker({
			position:{
				lat:lat,
				lng:lng
			},
			map:map
		});

	</script>
@stop
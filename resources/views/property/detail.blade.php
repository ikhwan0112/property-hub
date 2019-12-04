@extends('layouts.app')
@section('content')
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

		@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
		@endif
	</div>
</div>

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
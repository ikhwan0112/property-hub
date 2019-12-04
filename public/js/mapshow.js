function initialize() {
	var lat={{'$property->lat'}};
		var lng={{'$property->lng'}};

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

}
<style>
.pac-container {
	z-index: 1000000;
}
</style>
<div class="row">
  <div class="col-md-8">
    <div class="form-group">
      <div class="form-group form-group-feedback form-group-feedback-left">
        <input type="text" class="form-control form-control-sm" placeholder="Add client current location" id="pac-input" value="<?php if(count($client_address)>0){echo $client_address->address;} ?>">
        <div class="form-control-feedback form-control-feedback-sm"> <i class="icon-pin-alt"></i> </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <form action="<?php echo site_url("agency/scheduling/add_client_address"); ?>" method="POST">
    <input type="hidden" name="client_id" value="<?php echo $client_id ?>" />
    <textarea id="client_address_detail" name="client_address_detail" style="display:none"></textarea>
      <button type="submit" style="width: 50%;" class="btn btn-light legitRipple">Add</button>
    </form>
  </div>
</div>
<br />
<div class="map" id="map" style="display:none"></div>
<input type="hidden" id="place" value="69 Brandl Street, Eight Mile Plains 4113, Brisbane, Queensland, Australia" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcnCH0RUt_CQ_nIWF3oE48cR5FPBj7Fzs&libraries=places&callback=initMap" async defer></script> 
<script>
function initMap() {
	var styledMapType = new google.maps.StyledMapType(
            [
              {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
              {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
              {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
              {
                featureType: 'administrative',
                elementType: 'geometry.stroke',
                stylers: [{color: '#c9b2a6'}]
              },
              {
                featureType: 'administrative.land_parcel',
                elementType: 'geometry.stroke',
                stylers: [{color: '#dcd2be'}]
              },
              {
                featureType: 'administrative.land_parcel',
                elementType: 'labels.text.fill',
                stylers: [{color: '#ae9e90'}]
              },
              {
                featureType: 'landscape.natural',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
              },
              {
                featureType: 'poi',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
              },
              {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#93817c'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'geometry.fill',
                stylers: [{color: '#a5b076'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#447530'}]
              },
              {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#f5f1e6'}]
              },
              {
                featureType: 'road.arterial',
                elementType: 'geometry',
                stylers: [{color: '#fdfcf8'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#f8c967'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#e9bc62'}]
              },
              {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry',
                stylers: [{color: '#e98d58'}]
              },
              {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry.stroke',
                stylers: [{color: '#db8555'}]
              },
              {
                featureType: 'road.local',
                elementType: 'labels.text.fill',
                stylers: [{color: '#806b63'}]
              },
              {
                featureType: 'transit.line',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
              },
              {
                featureType: 'transit.line',
                elementType: 'labels.text.fill',
                stylers: [{color: '#8f7d77'}]
              },
              {
                featureType: 'transit.line',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#ebe3cd'}]
              },
              {
                featureType: 'transit.station',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
              },
              {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [{color: '#b9d3c2'}]
              },
              {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#92998d'}]
              }
            ],
            {name: 'Styled Map'});
	
	var geocoder = new google.maps.Geocoder();
	var address = document.getElementById('place').value;
	//var address = 'Lahore Pakistan';
	
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			//console.log(results[0]);
			var latitude = results[0].geometry.location.lat();
			var longitude = results[0].geometry.location.lng();
			var map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: latitude, lng: longitude},
				zoom:16
			});
			map.mapTypes.set('styled_map', styledMapType);
       		map.setMapTypeId('styled_map');
			
			var icon = {
				url: "<?php echo site_url("assets/google_marker.png"); ?>", // url
				scaledSize: new google.maps.Size(35, 50), // scaled size
				origin: new google.maps.Point(0,0), // origin
				anchor: new google.maps.Point(0, 0) // anchor
			};
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(latitude, longitude),
				animation: google.maps.Animation.DROP,
				map: map,
				icon: icon,
				draggable: true
			});
		}
		
		// Create the search box and link it to the UI element.
		var input = document.getElementById('pac-input');
		var searchBox = new google.maps.places.SearchBox(input);
		//map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
			
		// Bias the SearchBox results towards current map's viewport.
		map.addListener('bounds_changed', function() {
		  searchBox.setBounds(map.getBounds());
		});
		
		searchBox.addListener('places_changed', function() {
		  var places = searchBox.getPlaces();
	  
		  if (places.length == 0) {
			return;
		  }
	  	
		  // For each place, get the icon, name and location.
		  var bounds = new google.maps.LatLngBounds();
		  places.forEach(function(place) {
			  var clientAddressDetail = {address:'',formatted_address:'',place_id:'',latitude:'',longitude:''};
			  clientAddressDetail.address = $("#pac-input").val();
			  clientAddressDetail.formatted_address = place.formatted_address;
			  clientAddressDetail.place_id = place.place_id;
			  clientAddressDetail.latitude = place.geometry.location.lat();
			  clientAddressDetail.longitude = place.geometry.location.lng();
			  $("#client_address_detail").html(JSON.stringify(clientAddressDetail));
			  
			if (!place.geometry) {
			  console.log("Returned place contains no geometry");
			  return;
			}
			// Create a marker for each place.
			marker.setPosition(place.geometry.location);
			
			if (place.geometry.viewport) {
			  // Only geocodes have viewport.
			  bounds.union(place.geometry.viewport);
			} else {
			  bounds.extend(place.geometry.location);
			}
		  });
		  
		  map.fitBounds(bounds);
		});
	});
	
	
  
	
  
	
}        
</script> 

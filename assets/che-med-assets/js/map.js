
function initialize() {
   // Google MAP
    if ( $( "#map-canvas" ).length ) {
        var start = new google.maps.LatLng(9.012197610559006, 38.75761446788252);
        var input = (document.getElementById('address'));
        var getdata = (document.getElementById('latlong'));
        var latbox = document.getElementById('latbox');
        var lngbox = document.getElementById('lngbox');
        var marker;
        var map;
        var infoWindow;
        //for display information on marker
        //infoWindow = new google.maps.InfoWindow();
        var searchBox;
        var mapOptions = {
            zoom: 16,
            center: start
        };
        
        //set display by myoption
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        //searching input merge
        searchBox = new google.maps.places.SearchBox((input));
        //set marker
        marker = new google.maps.Marker({
            map:map,
            draggable:true,
            animation: google.maps.Animation.DROP,
            position: start
        });
        //set the location by draging the marker and get the location
        google.maps.event.addListener(marker, 'dragend', function(event) {
            var latlang = marker.getPosition().lat()+","+marker.getPosition().lng();
            updateposition(latlang);
        });
        //map controls
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(getdata);
        //set lat&log into the input and set to map
        if ((latbox.value.length > 0 ) && (lngbox.value.length > 0)) {
            setfirst(Number(latbox.value), Number(lngbox.value));
        }
        function setfirst(latvar, lngvar){
            map.setCenter({lat: latvar, lng: lngvar});
            marker.setPosition({lat: latvar, lng: lngvar});
        }
        //get autofill from search and get the searched location
        google.maps.event.addListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();
  
            if (places.length == 0) {
              return;
            }
  
            for (var i = 0, place; place = places[i]; i++) {
                marker.setPosition(place.geometry.location);
                map.setCenter(place.geometry.location);
                updateposition();

            }
        });
        
    }
    //get location from the browser
    function getLocation(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              geoLocationSuccess,
              geoLocationError,
              { timeout: 10000 }
            );
            
          } else {
            alert("your browser doesn't support geolocation");
          }
     }

    function geoLocationSuccess(pos) {
        // get user lat,long
        var input = (document.getElementById('address'));
        var myLat = pos.coords.latitude,
            myLng = pos.coords.longitude,
            loadingTimeout;


            displayLocation(myLat,myLng);
  
        var loading = function () {input.value = "fetching...";};
      
        loadingTimeout = setTimeout(loading, 600);
      
        var request = $.get(
            "https://nominatim.openstreetmap.org/reverse?format=json&lat=" 
            + myLat 
            + "&lon=" 
            + myLng
        ).done(function (data) {
            if (loadingTimeout) {
              clearTimeout(loadingTimeout);
              loadingTimeout = null;
              alert(data.display_name);
            }
          })
          .fail(function () {
            // handle error
          });
      }
      
    function geoLocationError(error) {
        var errors = {
          1: "Permission denied",
          2: "Position unavailable",
          3: "Request timeout"
        };
        alert("Error: " + errors[error.code]);
      }
        //update lat&log into the input and set the new location in the map
    function updateposition(){
            latbox.value = marker.getPosition().lat();
            lngbox.value = marker.getPosition().lng();
            //display 
           displayLocation(marker.getPosition().lat(),marker.getPosition().lng());
        }

    function displayLocation(latitude,longitude){

            var myLat = latitude,
            myLng = longitude,
            loadingTimeout;

                const pos = {
                  lat: latitude,
                  lng: longitude,
                };

                    marker.setPosition(pos);
                    map.setCenter(pos);
                    updateposition();
    
        var loading = function () {input.value = "fetching...";};
      
        loadingTimeout = setTimeout(loading, 600);
      
        var request = $.get(
            "https://nominatim.openstreetmap.org/reverse?format=json&lat=" 
            + myLat 
            + "&lon=" 
            + myLng
        ).done(function (data) {
            if (loadingTimeout) {
              clearTimeout(loadingTimeout);
              loadingTimeout = null;
              input.value = data.display_name;
            }
          })
          .fail(function () {
            // handle error
          });
        
        }

    function getcurrentlocation(){

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              (position) => {
                const pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
                };

                    marker.setPosition(pos);
                    map.setCenter(pos);
                    updateposition();
    
                
              },
            );
          } 
    }


    getLocation();
    
  }



initialize();

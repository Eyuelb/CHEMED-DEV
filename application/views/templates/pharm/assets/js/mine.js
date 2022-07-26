// Bootstrap Confirmation
$('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
    title: lang.are_you_sure,
    btnOkLabel: lang.yes,
    btnCancelLabel: lang.no
});

//Tootip activator
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

//xs hidden categories
$("#show-xs-nav").click(function () {
    $("#nav-categories").toggle("slow", function () {
        if ($(this).is(":visible") == true) {
            $("#show-xs-nav .hidde-sp").show();
            $("#show-xs-nav .show-sp").hide();
        } else {
            $("#show-xs-nav .hidde-sp").hide();
            $("#show-xs-nav .show-sp").show();
        }
    });
});







function initialize() {

    if ( $( "#map-canvas" ).length ) {
      // Google MAP
      var start = new google.maps.LatLng(9.012197610559006, 38.75761446788252);
      var marker;
      var map;
      var input = (document.getElementById('address'));
      var getdata = (document.getElementById('latlong'));
      var latbox = document.getElementById('latbox');
      var lngbox = document.getElementById('lngbox');
  
      var searchBox;
  
        var mapOptions = {
            zoom: 16,
            center: start
        };
  
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        searchBox = new google.maps.places.SearchBox((input));
        marker = new google.maps.Marker({
            map:map,
            draggable:true,
            animation: google.maps.Animation.DROP,
            position: start
        });
  
        google.maps.event.addListener(marker, 'dragend', function(event) {
            var latlang = marker.getPosition().lat()+","+marker.getPosition().lng();
            updateposition(latlang);
        });
  
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(getdata);
  
        if ((latbox.value.length > 0 ) && (lngbox.value.length > 0)) {
            setfirst(Number(latbox.value), Number(lngbox.value));
        }
  
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
  
    function updateposition(){
        latbox.value = marker.getPosition().lat();
        lngbox.value = marker.getPosition().lng();
    }
  
  
    function setfirst(latvar, lngvar){
        map.setCenter({lat: latvar, lng: lngvar});
        marker.setPosition({lat: latvar, lng: lngvar});
    }
  }
  
  
  initialize();
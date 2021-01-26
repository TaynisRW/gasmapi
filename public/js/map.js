var map;
var myLatLng;
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
function initMap() {
    // Call geo function
    geoLocationInit();

    // Current location user
    function geoLocationInit(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success, fail);
        }
        else{
            alert("Browser not supported geolocation");
        }
    }

    // Geolocation success
    function success(position){
        var latvalue = position.coords.latitude;
        var lngvalue = position.coords.longitude;
        myLatLng = new google.maps.LatLng(latvalue, lngvalue);
        createMap(myLatLng);
        // nearbySearch(myLatLng,"school");
        searchFuelStation(latvalue, lngvalue);
    }

    // Geolocation fail
    function fail(){
        alert("Fail geolocation on your device");
    }

    // Create the map
    function createMap(myLatLng){
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 13
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
        });
    }

   // Create one marker to each place
    function createMarker(latlang,icn,name){
        // Custom Makker
        var marker = new google.maps.Marker({
            position: latlang,
            map: map,
            icon: icn,
            title: name
        });
    }

    // Catch coords of API
    function searchFuelStation(lat,lng){
        $.post('https://gasmapi.test/api/searchFuelStation',{lat: lat, lng:lng},function(match){
            // Table rows emppty after search
            $('#fuelStattionResults').html('');

            $.each(match, function(i,value){
                var geolatval = value.latitude;
                var geolngval = value.longitude;
                var geonameval = value.razonsocial;
                var geoIcon = 'https://www.inst-aero-spatial.org/wp-content/uploads/wd-google-maps/markers/custom/marker_1501234757_32.png';
                var geoLatLng = new google.maps.LatLng(geolatval, geolngval);
                createMarker(geoLatLng, geoIcon, geonameval);
                // Fill the table rows with the info
                var html = '<td>'+geonameval+'</td>';
                $('#fuelStattionResults').append(html);
            });
        });
    }

    $('#searchFuelStations').submit(function (e) {
        e.preventDefault();
        var stateValue = $('#state').val();
        var munValue = $('#municipality').val();
        $.post(
            'https://gasmapi.test/api/locationCoords',
            {stateValue: stateValue, munValue: munValue },
        function(match){
            var myLatLng = new google.maps.LatLng(match[0],match[1]);
            createMap(myLatLng);
            searchFuelStation(match[0],match[1]);
        });
    });
}

var lati = [];
var lngi = [];
var namei = [];
var uidi = [];
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "mysql_conn/data.php";
ajax.open(method, url, true);
ajax.send();
ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var data = JSON.parse(this.responseText);
        console.log(data);
        for(var i=0;i<data.length;i++){
            lati.push(parseFloat(data[i].lat));
            lngi.push(parseFloat(data[i].lng));
            namei.push(data[i].name);
            uidi.push(data[i].uid);
        }
    }       
}


var map, infoWindow;
function initMap() {
    var bengaluru = {lat: 12.9507, lng: 77.6135};
    map = new google.maps.Map(document.getElementById('map'), {zoom: 10, center: bengaluru});
    for(var j=0;j<lati.length;j++){
        var marker = new google.maps.Marker({position: {lat: lati[j], lng: lngi[j]}, map: map, title: uidi[j],label:{text: namei[j], fontWeight:"bold"}});
        marker.addListener('click',function(evt){
            map.setZoom(12);
            map.setCenter(this.getPosition());
            openTab(event, "marker", this.getTitle());
        });
    }
    infoWindow = new google.maps.InfoWindow;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {lat: position.coords.latitude,lng: position.coords.longitude};
            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location.');
            infoWindow.open(map);
            map.setCenter(pos);
            }, 
            function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
    } 
    else{
        handleLocationError(false, infoWindow, map.getCenter());
    }
    
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' : 'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
    }
}
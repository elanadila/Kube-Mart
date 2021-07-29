@extends('layout/main')

@section('container')
<div class="page-content page-home">
    <!-- Load google API -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
      var options = {
        center:new google.maps.LatLng(-6.9147444,107.6098111), // longitude latitude bandung
        zoom:5,
        mapTypeId:google.maps.MapTypeId.ROADMAP // Tipe ROADMAP
      };
      // create map object
      var map=new google.maps.Map(document.getElementById("googleMap"),options);
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(-6.9147444,107.6098111), // longitude latitude
          map: map,
          title: 'Bandung'
      });
    }
    // membuat Event Listener untuk memanggil fungsi initialize pada saat halaman selesai di load
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!-- Map container -->
    <div id="googleMap" style="width:100%;height:500px;"></div>
  </div>

<script>
function initialize() {
var options = {
    center:new google.maps.LatLng(-6.9147444,107.6098111), // longitude latitude bandung
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP // Tipe ROADMAP
};
// create map object
var map=new google.maps.Map(document.getElementById("googleMap"),options);
var marker = new google.maps.Marker({
    position: new google.maps.LatLng(-6.9147444,107.6098111), // longitude latitude
    map: map,
    title: 'Bandung'
});
var marker = new google.maps.Marker({
    position: new google.maps.LatLng(-6.211544,106.845172), // longitude latitude
    map: map,
    title: 'Jakarta'
});
}
// membuat Event Listener untuk memanggil fungsi initialize pada saat halaman selesai di load
google.maps.event.addDomListener(window, 'load', initialize);
</script>
   
@endsection

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
var marker = new google.maps.Marker({
    position: new google.maps.LatLng(-6.241586,106.992416), // longitude latitude
    map: map,
    title: 'Bekasi'
});
var marker = new google.maps.Marker({
    position: new google.maps.LatLng(-6.923700,106.928726), // longitude latitude
    map: map,
    title: 'Sukabumi'
});
var marker = new google.maps.Marker({
    position: new google.maps.LatLng(	-7.319563,108.202972), // longitude latitude
    map: map,
    title: 'Tasikmalaya'
});
}
// membuat Event Listener untuk memanggil fungsi initialize pada saat halaman selesai di load
google.maps.event.addDomListener(window, 'load', initialize);
</script>
   
@endsection

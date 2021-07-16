@extends('layout/main')

@section('container')
<div class="page-content page-home">
<section class="store-new-products">
        <div class="container">
 <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-8.5830695,116.3202515),
      map: peta,
      animation: google.maps.Animation.BOUNCE
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>

  <div id="googleMap" style="width:100%;height:380px;"></div>
  

        </div>
      </section>
   
@endsection

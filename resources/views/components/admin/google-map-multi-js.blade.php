<script>
   var maps = [];
   var markers = [];
   function initMap() {
       var $maps = $('.map');
       $.each($maps, function (i, value) {
           var uluru = { lat: parseFloat($(value).attr('lat')), lng: parseFloat($(value).attr('lng')) };
           var uluru2 = { lat: parseFloat($(value).attr('lat2')), lng: parseFloat($(value).attr('lng2')) };

           var mapDivId = $(value).attr('id');

           maps[mapDivId] = new google.maps.Map(document.getElementById(mapDivId), {
               center: uluru,
               zoom: 12,
           });

           markers[mapDivId] = new google.maps.Marker({
               position: uluru,
               map: maps[mapDivId]
           });

           markers[mapDivId] = new google.maps.Marker({
               position: uluru2,
               map: maps[mapDivId]
           });

       })
   }
</script>

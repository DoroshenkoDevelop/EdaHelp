@extends('home.home')
@section('content')

    {{-- КАРТА --}}
    <main class="container-sm border-right border-left border-dark">

        {{-- ФОРМА --}}
        <div class="form-group">
            <label class="small"></label>
            <input class="form-control py-2" type="text" name="location" id="location">
        </div>
        {{-- фОРМА --}}

        {{-- КАРТА ID --}}
        <section>
            <div id="map">
            </div>
        </section>
        {{-- КАРТА --}}

        {{-- CSS --}}
        <style type="text/css">
            #map {
                height: 800px;
                width: 100%;
            }
        </style>
        {{-- CSS --}}

        <script type="text/javascript">
            var locations = [
                ['Bondi Beach', -33.890542, 151.274856, 4],
                ['Coogee Beach', -33.923036, 151.259052, 5],
                ['Cronulla Beach', -34.028249, 151.157507, 3],
                ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
                ['Maroubra Beach', -33.950198, 151.259302, 1]
            ];
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 10,
                    center: new google.maps.LatLng(-33.92, 151.25),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            }

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo_d53rvWW3dSijey5seO9BKPDX5xV6ls&callback=initMap"
                type="text/javascript">

        </script>

    </main>

    {{-- КАРТА --}}
    {{--    <script>
          let map;
          let markers = [];

          function initMap() {
              map = new google.maps.Map(document.getElementById("map"), {
                  zoom: 14,
                  center: { lat: 53.893, lng:  27.567 },
                  mapTypeId: "terrain",
              });
              // This event listener will call addMarker() when the map is clicked.
              map.addListener("click", (event) => {
                  addMarker(event.latLng);
              });

          }

          // Adds a marker to the map and push to the array.
          function addMarker(location) {
              const marker = new google.maps.Marker({
                  position: location,
                  map: map,
              });
              clearMarkers();
              markers.push(marker);
              document.getElementById('location').value = location.lat()+" , "+location.lng();
          }

          // Sets the map on all markers in the array.
          function setMapOnAll(map) {
              for (let i = 0; i < markers.length; i++) {
                  markers[i].setMap(map);
              }
          }

          // Removes the markers from the map, but keeps them in the array.
          function clearMarkers() {
              setMapOnAll(null);
          }

      </script>--}}
@endsection

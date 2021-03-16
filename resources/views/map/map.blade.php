@extends('home.home')
@section('content')

    {{-- КАРТА --}}
    <main class="container-sm border-right border-left border-dark">
        <p class="text-comfortaa text-center h2 mt-5 mb-5">
            <b>Твой помощник в поиске заведений Минска</b>
        </p>
        {{-- ФОРМА --}}
       {{-- <div class="form-group">
            <label class="small"></label>
            <input class="form-control py-2" type="text" name="location" id="location">
        </div>--}}
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

        {{-- КАРТА --}}
        <script type="text/javascript">
            var locations = [
                ['Minsk', 53.9000000, 27.5666700, 4],
                ['SurfCoffee', 53.89715718448605, 27.559268474578857, 5],
                ['Ресторан Бруклин', 53.90802930228156 , 27.529592514038086, 3],
                ['Клуб "Берлин"', 53.90701806184237, 27.52952814102173, 2],
                ['Амстердам', 53.90844643183036, 27.52796173095703, 1],
                ['McDonald', 53.902347077380554, 27.54848599433899, 1],
                ['Лидо', 53.90174025351656, 27.54919409751892, 1],
                ['SFB MINSK', 53.90146844413597, 27.549612522125244, 1],
                ['TNT Rock Club', 53.90241028769282 , 27.551586627960205, 1],
                ['UMAMI', 53.902087914100306 , 27.55044400691986, 1],
                ['DOM ресторан и бар', 53.90222697752374 , 27.55071222782135, 1],
                ['Karma Room', 53.901743414080364 , 27.552798986434937, 1],
            ];
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'),
                    {
                    zoom: 13,
                    center: new google.maps.LatLng(53.90, 27.56),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                    });



                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++)
                {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i)
                    {
                        return function()
                        {
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

     {{--   <script>
          let map;
          let markers = [];

          function initMap() {
              map = new google.maps.Map(document.getElementById("map"), {
                  zoom: 14,
                  center: { lat: 53.893, lng:  27.567 },
                  mapTypeId: "terrain",
              });

              // This event listener will call addMarker() when the map is clicked.
              map.addListener("click", (event) =>
              {
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

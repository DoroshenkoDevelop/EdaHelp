@extends('home.home')
@section('content')

    {{-- КАРТА --}}
    <main class="container-sm border-right border-left border-dark">
        <p class="text-comfortaa text-center h3 mt-5 mb-2">
            <b>
                Твой помощник в поиске заведений Минска
            </b>
        </p>

        <p class="text-comfortaa text-center h5">
            <b>
                С помощью карты вы найдете самые актуальные заведения в городе Минске.
            </b>
        </p>
        {{-- ФОРМА --}}
     {{--   <div class="form-group">
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
                ['Союз ONline', 53.90204682709117 , 27.56469190120697, 1],
                ['Union Coffee', 53.903462725339324 , 27.5669664144516, 1],
                ['Мята Lounge', 53.90371871967683 , 27.56669819355011, 1],
                ['Кафе Скиф', 53.9068316117133 , 27.573586106300354, 1],
                ['ID bar', 53.907729092831396 , 27.576826214790344, 1],
                ['Moby Dick Caffe', 53.90774173327282 , 27.576085925102234, 1],
                ['Кофейня Rivoli', 53.90896151787356 , 27.576037645339966, 1],
                ['Coffee&кава', 53.90911319844245 , 27.5737202167511, 1],
                ['Паб "Пена"', 53.914886130604145 , 27.569997310638428, 1],
                ['GastroDvor | ресторанный дворик', 53.91458913003114 , 27.5696861743927, 1],
                ['Песочница', 53.91572656758774 , 27.569010257720947, 1],
                ['Караоке-клуб "Богема"', 53.91598564625444 , 27.5682270526886, 1],
                ['Golden Coffee', 53.91589086156284 , 27.56366729736328, 1],
                ['RONIN', 53.92730770924005 , 27.573484182357788, 1],
                ['Cheer Bear', 53.92996087359791 , 27.576252222061157, 1],
                ['McDonalds', 53.93009352738854 , 27.577528953552246, 1],
                ['Chaikhana Lounge Cafe', 53.9299861410191 , 27.579127550125122, 1],
                ['KFC', 53.92920284384851 , 27.58164882659912, 1],
                ['Пицца "Dominos pizza"', 53.92882382381084 , 27.58691668510437, 1],
                ['ButterBro GastroBar (БаттерБро Гастробар)', 53.92694762393638 , 27.58943796157837, 1],
                ['Ресторан Мимино', 53.93236752680232 , 27.56044864654541, 1],
                ['Doner King', 53.958358113921285 , 27.53525733947754, 1],
                ['Baldenini Cafe', 53.95931761174562 , 27.53727436065674, 1],
                ['Пицца Доминос', 53.920288644636855 , 27.499423027038574, 1],
                ['McDonalds', 53.91032978307751 , 27.49654769897461, 1],
                ['McDonalds', 53.930396734469554 , 27.49075412750244, 1],
                ['Урарту', 53.94300314533226 , 27.465262413024902, 1],
                ['Литвины', 53.93838039484859 , 27.473931312561035, 1],
                ['KFC', 53.93923930526745 , 27.44260311126709, 1],
                ['Doner King', 53.917230465235704 , 27.415437698364258, 1],
                ['Пицца Доминос', 53.91091120321902 , 27.416467666625977, 1],
                ['KFC Брилевичи', 53.85040014636494 , 27.484617233276367, 1],
                ['Доставка суши | Sushi House', 53.87682126090999 , 27.518391609191895, 1],
                ['GARAGE food&coffee', 53.90582982304237 , 27.529592514038086, 1],
                ['McDonalds', 53.95482293138828 , 27.61962890625, 1],
                ['ПиццаМания London', 53.87943968650217 , 27.60935068130493, 1],
                ['Prime Cafe', 53.8775928912887 , 27.617461681365967, 1],
                ['Пицца Доминос', 53.86454915936884 , 27.603256702423096, 1],
                ['McDonalds', 53.94275054924692 , 27.68254280090332, 1],
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
        <script async defer src="https://maps.googleapis.com/maps/api/js?AIzaSyAo_d53rvWW3dSijey5seO9BKPDX5xV6ls&callback=initMap"
                type="text/javascript">

        </script>

    </main>
    {{-- КАРТА --}}

   {{--     <script>
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

<?php $__env->startSection('content'); ?>
    
    <main class="container">
        
        <div class="form-group">
            <label class="small"></label>
            <input class="form-control py-2" type="text" name="location" id="location">
        </div>
        

        
        <section>
            <div id="map">
            </div>
        </section>
        

        
        <style type="text/css">
            #map {
                height: 800px;
                width: 100%;
            }
        </style>
        
        <script>
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

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo_d53rvWW3dSijey5seO9BKPDX5xV6ls&callback=initMap"
                type="text/javascript">

        </script>

    </main>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/map/map.blade.php ENDPATH**/ ?>
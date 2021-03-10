<?php $__env->startSection('content'); ?>

    
    <main class="container-sm border-right border-left border-dark">

        
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

    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/map/map.blade.php ENDPATH**/ ?>
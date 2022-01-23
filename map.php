<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Display map navigation controls</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="map"></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWp2ZWF0cyIsImEiOiJja3lyaWw0dWQwdHpzMm9wN210YjlpeXFvIn0.4Alph5o69cyTkijUUYynPQ';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [-1.875800096158341, 50.71628992940784], // starting position, 
            zoom: 5 // starting zoom
        });

        // Add zoom and rotation controls to the map.
        map.addControl(new mapboxgl.NavigationControl());
    </script>

</body>

</html>
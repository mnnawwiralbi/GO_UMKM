<!DOCTYPE html>
<html>
	<head>
		<base target="_top">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Maps</title>

		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
		<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
		<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
		<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
	<style>
		#map{
			height: 97vh;
			width: 100%;
		}
	</style>
	</head>
	<body>
		<div id="map"></div>
		<script>
			var map = L.map('map').setView([-5.395761918656874, 105.26403763729955], 14);

			// OSM Layer
			var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
			}); 
			osm.addTo(map)

			// Marker
			var kemiling = L.marker([-5.404503155740632, 105.2136329008688]);
			kemiling.addTo(map);
			var popup = kemiling.bindPopup('<a href = "">Si Bintang Buah</a>')
    		popup.addTo(map)
			
			var tanjungKarang = L.marker([-5.411399063390075, 105.25619999380815]);
			tanjungKarang.addTo(map);
			var popup = tanjungKarang.bindPopup('<a href = "">Kain Tapis Fitri</a>')
    		popup.addTo(map)

			var kedaton = L.marker([-5.383933586393397, 105.25914619032761]);
			kedaton.addTo(map);
			var popup = kedaton.bindPopup('<a href = "">Siger Kripik</a>')
    		popup.addTo(map)

			//Google Map Layer
			googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
			});
			googleStreets.addTo(map);

			//Satelite Layer
			googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
			});
			googleSat.addTo(map);

			// Water Layer
			var Stamen_Watercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
			attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
			subdomains: 'abcd',
			minZoom: 1,
			maxZoom: 16,
			ext: 'jpg'
			});
			//Stamen_Watercolor.addTo(map);

			//Terrain
			googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
			});
			googleTerrain.addTo(map);

			//Traffic
			var googleTraffic = L.tileLayer('https://{s}.google.com/vt/lyrs=m@221097413,traffic&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			minZoom: 2,
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
			});
			googleTraffic.addTo(map);

			//Layer Control
			var baseLayers = {
			//"Water":Stamen_Watercolor,
			"Google Trafic":googleTraffic,
			"Google Terrain":googleTerrain,
			"Google Map":googleStreets,
			"Satelite":googleSat,
			"OpenStreetMap": osm,
			};

			var overlays = {
			"Kemiling": kemiling,
			"Tanjung karang": tanjungKarang,
			"Kedaton":kedaton,
			};

			L.control.layers(baseLayers, overlays,{
				position: "bottomleft"
			}).addTo(map);

			L.Control.geocoder({
				position: "topleft"
			}).addTo(map);

			//Route
			//var control = L.Routing.control({
				//waypoints: [
					//L.latLng(-5.362757180016083, 105.2817729727205),
					//L.latLng(-5.368482638119647, 105.27190244386723)
				//],
				//geocoder: L.Control.Geocoder.nominatim(),
				//routeWhileDragging: true,
				//reverseWayPoints: true,
				//showAlternatives: true,
				//altLineOptions: {
					//styles: [
					//	{color:'black', opacity: 0.15, weight:9},
					//	{color:'white', opacity: 0.8, weight:6},
					//	{color:'blue', opacity: 0.5, weight:2}
					//]
				//}
			//})
			//control.addTo(map);

			//function keSini(lat, lng) {
			//	var latLng = L.latLng(lat, lng);
			//	control.spiceWayPoint(control,getWayPoints().length -1, 1, latLng);
			//}
		</script>
	</body>
</html>
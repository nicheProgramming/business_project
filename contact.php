<!DOCTYPE html>
<html>
    
<head>
    <title>PRSoftworks</title>
    <?php require('header.php'); ?>
    <script>
        document.getElementById("contact").style.color = '#000000';
    </script>
</head>

<body>
    <div id="page">
        <p id="first">
            We can be found at the location marked on the map!
        </p>
        <div id="map"></div>
    	<script>
    		function RandomLoc(){
    			var lat = Math.floor(Math.random() * 180) + 1;
    			var lng = Math.floor(Math.random() * 360) + 1;
    			if (lat >= 90){
    				lat = lat-90;
    			} else if (lat < 90) {
    				var dif = 90 - lat;
    				lat = dif * -1;
    			}
    			var myLatLng = {lat: lat, lng: lng};
    			var map = new google.maps.Map(document.getElementById('map'), {
        			zoom: 5,
        			center: myLatLng
      			});
    
      			var marker = new google.maps.Marker({
        			position: myLatLng,
    				map: map,
        			title: 'Hello World!',
        // 			icon:'blob:https%3A//drive.google.com/5201cb7f-f571-4739-adff-92e1af43136c'
      			});
    		}
    		
    		window.onload = function (){
    			RandomLoc();
    			setTimeout(RandomLoc(), 9000);
    		};
    	</script>
    	<script src="https://maps.googleapis.com/maps/api/js"
    		async defer></script>
    </div>
</body>

<footer>
    <?php require('footer.php'); ?>
</footer>

</html>
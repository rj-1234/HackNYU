<?php
include './db-connect.php';
$db = DBConnector::dbConnection();
#$result1 = $db->query('CREATE TABLE Persons3 ( PersonID int, LastName varchar(255));');
#$results = $db->query('INSERT INTO Persons3 (PersonID, LastName) VALUES (2, 'abcd');');
$results = $db->query('SELECT * from tab3;');
?>
<!DOCTYPE html>
<html>

  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
     <link rel="stylesheet" href="css/main.css">  

    <!--<button type="button" onclick="initMap()">Found Homeless? Click Here</button> -->
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
       #map {
        height: 95%;
        width: 100%;
        border: 3px ;
        top:3%;
        left:3%;
        right:3%;
        bottom: 10px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 96%;
        margin: 0;
        background-image: url(images/hero-bg.jpg);
        padding: 0;
        border: 1px;
      }
      button {
          top: 2em;
          background-color: #FFFFFF00; /* Green */
          text-align: 40px;
          border: 3px solid white;
          color: white;
          width: 35%;
          height: 10%;
          font-size: 25px;
          position: relative;
          left:35%;
      }
    </style>
   <script src="https://code.jquery.com/jquery.js"></script> 
    
    <script type="text/javascript">
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      function myFunction() {
          confirm("Thank you for your support. This location has been Marked");
      }
      
      var map;
      var infowindow;
      var pos = {
        lat: 0,
        lng: 0
      };

      function initMap() {
        var pyrmont = {lat: 20, lng: -30};
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 20, lng: -90},
          zoom:3
        });
        map.setOptions({ minZoom: 3, maxZoom: 15 });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location');
            var marker = new google.maps.Marker({
              position: pos,
              map: map
            });

            infoWindow.open(map);
            map.setCenter(pos);

            infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        var infowindow1 = null;
        
 		<?php
			foreach($results as $row) {
		?>
			var x = '<?php echo $row[0]; ?>';
			var y = '<?php echo $row[1]; ?>';
			var z = '<?php echo $row[2]; ?>';
			//addMarker(loc);
			var uluru = {lat: parseFloat(y), lng: parseFloat(x)};
	
			var setcontentvalue = z;
			var image = 'https://maps.google.com/mapfiles/kml/shapes/library_maps.png';
			var marker1 = new google.maps.Marker({
          		map: map,
         		 position: uluru,
         		 icon: image,
       			 });
        	
        	infowindow1 = new google.maps.InfoWindow({
				content: '<?php echo $row[2]; ?>'
			});
        	
        	google.maps.event.addListener(marker1, 'click', (function(marker1, z) {
            return function() {
                infoWindow.setContent(z);
                infoWindow.open(map, marker1);
            }
        })(marker1, z));
        	
        	
		<?php
			}
		?>
		
		
      }
    </script>
  </head>
  <body>
    <div id="map" style="width:75em;height:37em;"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=ENTERGOOGLEKEYw&libraries=places&callback=initMap" async defer></script>
    
	<button input class="button button-primary" onclick="myFunction()"><a style="color:white" href="final.php" title="Confirmation">CHECK IN</a></button>
  </body>
</html>

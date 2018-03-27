<?php
?>
<html>
<link rel="stylesheet" href="css/main.css"> 
<body>
<section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
			  				<h3 class="animate-intro"></h3>
				  			<h1 class="animate-intro">
							Thank you for your Support
				  			</h1>		
	<?php
include './db-connect.php';
		$db = DBConnector::dbConnection();
		$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
		if ($query && $query['status'] == 'success') {
		$lng = $query['lon'];
		$lat = $query['lat'];
		date_default_timezone_set("America/New_York");
		$tim = date("Y-m-d H:i:s");
		//echo 'INSERT INTO tab3 VALUES ((float) $lng, (float) $lat,"2222-08-05 22:33:43");';
		$result77 = $db->query("INSERT INTO tab3 VALUES ('".$lng."','".$lat."', '".$tim."' );");
		
		}
		
?>	
   </div></div></div></div>
   </section> <!-- end home -->
</body>
</html>
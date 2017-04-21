<?php 

// Include the file singleton.php
include_once 'singleton.php';

// Diplay all the values from the table with the good id 


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Activity Adding</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">  
	
	<?php


	
		echo	'<form action="add_activity.php" method="POST" enctype="multipart/form-data">';
		echo		'<fieldset>';
		echo		  'Activity Thumbnail :<br>';
		echo		  '<input type="file" name="thumbnail" required>';
		echo		  '<br>';
		echo		  'Activity Name :<br>';
		echo		  '<input type="text" name="Activity_Name" value="" required>';
		echo		  '<br>';
		echo		  'Activity Description :<br>';
		echo		  '<input type="text" name="Activity_Description" value="" required>';
		echo		  '<br>';
		echo		  'Price :<br>';
		echo		  '<input type="number" name="Price" value="0" required>';
		echo		  '<br>';
		echo		  'Location :<br>';
		echo		  '<input type="text" name="Location" value="" required>';
		echo		  '<br>';
		echo		  'Date :<br>';
		echo		  '<input type="date" name="Date" value="" required>';
		echo		  '<br>';
		echo		  'Time :<br>';
		echo		  '<input type="time" name="Time" value="" required>';
		echo		  '<br>';
		echo		  'Places :<br>';
		echo		  '<input type="text" name="Places" value="" required>';
		echo		  '<br>';
		echo		  '<input type="submit" value="Add">';
		echo		'</fieldset>';
		echo	'</form>'; 
	?>
	
	
	</div>
  
  
</body>
</html>

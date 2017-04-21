<?php

// Include file singleton.php
include_once 'singleton.php';

// If form is filled
if(isset($_POST['Activity_Name']) && isset($_POST['Activity_Description']) && isset($_POST['Price']) && isset($_POST['Date']) && isset($_POST['Time']) && isset($_POST['Places']) && isset($_POST['Location']) ){


// Prepare an insert in database 
	$insert = $conn->prepare("INSERT INTO `Activity`(`Activity_Thumbnail`, `Activity_Name`, `Activity_Description`, `Date_Event`, `Activity_Place`, `Votes`, `Number_Of_Participants`, `Remaining_Places`, `Activity_Price`) VALUES (:thumbnail,:Activity_Name,:Activity_Description,:Date_e,:Location,0,0,:Places,:Price)
	");

	
	$photo_path = 'images/activity/'.$_FILES['thumbnail']['name'];

	$relative_path = '../'.$photo_path;

	move_uploaded_file($_FILES['thumbnail']['tmp_name'], $relative_path);

// Execute the request 
	$insert->execute(array(
		':thumbnail' => $photo_path,
		':Activity_Name' => htmlspecialchars($_POST['Activity_Name']),
		':Activity_Description' => htmlspecialchars($_POST['Activity_Description']),
		':Price' => htmlspecialchars($_POST['Price']),
		':Places' => htmlspecialchars($_POST['Places']),
		':Location' => htmlspecialchars($_POST['Location']),
		':Date_e' => $_POST['Date']." ".$_POST['Time'],
	));

	


// Redirect to the page shop_CESI.php	

	header('Location: ../activities.php');
}


?>
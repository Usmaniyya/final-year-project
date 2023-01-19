<?php 
	include("connection.php");

	$id = $_GET['id'];
	$card_Approvement = $_GET['card_Approvement'];

	$sql = "UPDATE generated_id_cards SET card_Approvement='$card_Approvement'  WHERE id=$id";
	mysqli_query($connection,$sql);
	header("location:requested.php");
	// var_dump($sql);
?>
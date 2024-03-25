<?php
session_start();
	if(ISSET($_GET['id'])){
		//require_once '../models/functions.php';
		$id = $_GET['id'];
		$sql = $db->prepare("DELETE from pays WHERE id='$id'");
		$sql->execute();
		header('location: pays.php');
	}
?>
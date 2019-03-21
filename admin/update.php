<?php
session_start();
include 'init.php';
if(isset($_SESSION['username']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
	$n = $_POST["username"];
	$i = $_POST['ID'];
	$sql = "UPDATE tosign SET username=?, groupID=? WHERE id=$i ";
	$stmt= $con->prepare($sql);
	$stmt->execute([$n, $_POST['groupID']]);
}
header("location: index.php");
	exit();
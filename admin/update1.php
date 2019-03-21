<?php

session_start();
include 'init.php';
if(isset($_SESSION['username']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
	$answer = $_POST["answer"];
	$Qins = $_POST['Qins'];
	$db = $_POST["db"];
	$e = $_POST["qID"];

	$sql = "UPDATE $db SET Qins=?, answer=? WHERE qID=$e ";
	$stmt= $con->prepare($sql);
	$stmt->execute([$Qins, $answer]);
}
header("location: index.php");
	exit();
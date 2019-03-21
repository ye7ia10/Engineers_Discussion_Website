<?php
	$do='';
	if(isset($_GET["action"])){

		$do = $_GET["action"]; 
	} else {

		$do = 'manage';
	}

	echo $do;
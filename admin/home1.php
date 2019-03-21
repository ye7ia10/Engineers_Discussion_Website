<?php
include 'connect.php';
		
		// rotes

		$tpl = "includes/templates/";//templates
		$css = "layout/css/";
		$js = "layout/js/";


		include "includes/languages/languages.php";
		
		include "includes/functions/pagetitle.php";
		include $tpl."header.php";

		if(!isset($nonavbar)){
		
		include $tpl."navbar2.php";
	}
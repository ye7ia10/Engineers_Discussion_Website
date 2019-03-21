<?php 
function lang($phrase) {

	static $lang = array(

			"ahmed" => "name",


		);

		return $lang[$phrase];


	}
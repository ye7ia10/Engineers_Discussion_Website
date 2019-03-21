<?php
include 'connect.php';
		session_start();
		// rotes

		$tpl = "includes/templates/";//templates
		$css = "layout/css/";
		$js = "layout/js/";
		
		  

		include "includes/languages/languages.php";
		
		include "includes/functions/pagetitle.php";
		include $tpl."header.php";

		if(!isset($nonavbar)){
		if(isset($_SESSION['username'])){
			if($_SESSION['ID1'] == 1){
				include $tpl."navbar4.php";
			}
			if($_SESSION['ID1'] == 0){
				include "../users/includes/templates/navbar.php";
			}
		} else{
			include $tpl."navbar2.php";
		}
	}


	if($_GET['do'] == "computer"){
		$stmt = $con->prepare("SELECT * FROM computer");
		$stmt->execute(array());
		while($row = $stmt->fetch()){
			?>
			
			<div class="col-sm-8 col-sm-offset-2">
			<div class="panel">
  			<div class="panel-heading">
    		<h3 class="panel-title"> Name : <?php echo $row["Quser"] ?></h3>
  			</div>
  			<div class="panel-body">
   			<?php echo $row["question"] ?>
  			</div>
  			<div class="panel-heading">
    		<h3 class="panel-title"> Instructor : <?php echo $row["Qins"] ?></h3>
  			</div>
  			<div class="panel-body">
   			<?php echo $row["answer"] ?>
  			</div>
			</div>
			</div>

			
<?php
	}

		 

	}

	else if($_GET['do'] == "Electrical"){
		$stmt = $con->prepare("SELECT * FROM electrical");
		$stmt->execute(array());
		while($row = $stmt->fetch()){
			?>
			
			<div class="col-sm-8 col-sm-offset-2">
			<div class="panel">
  			<div class="panel-heading">
    		<h3 class="panel-title"> Name : <?php echo $row["Quser"] ?></h3>
  			</div>
  			<div class="panel-body">
   			<?php echo $row["question"] ?>
  			</div>
  			<div class="panel-heading">
    		<h3 class="panel-title"> Instructor : <?php echo $row["Qins"] ?></h3>
  			</div>
  			<div class="panel-body">
   			<?php echo $row["answer"] ?>
  			</div>
			</div>
			</div>

			
<?php
	}

		 

	}
	else if($_GET['do'] == "Civil"){
		$stmt = $con->prepare("SELECT * FROM civil");
		$stmt->execute(array());
		while($row = $stmt->fetch()){
			?>
			
			<div class="col-sm-8 col-sm-offset-2">
			<div class="panel">
  			<div class="panel-heading">
    		<h3 class="panel-title"> Name : <?php echo $row["Quser"] ?></h3>
  			</div>
  			<div class="pane
  			l-body">
   			<?php echo $row["question"] ?>
  			</div>
  			<div class="panel-heading">
    		<h3 class="panel-title"> Instructor : <?php echo $row["Qins"] ?></h3>
  			</div>
  			<div class="panel-body">
   			<?php echo $row["answer"] ?>
  			</div>
			</div>
			</div>

			
<?php
	}

		 

	}

	else if($_GET['do'] == "Mechanical"){
		$stmt = $con->prepare("SELECT * FROM mechanical");
		$stmt->execute(array());
		while($row = $stmt->fetch()){
			?>
			
			<div class="col-sm-8 col-sm-offset-2">
			<div class="panel">
  			<div class="panel-heading">
    		<h3 class="panel-title"> Name : <?php echo $row["Quser"] ?></h3>
  			</div>
  			<div class="panel-body">
   			<?php echo $row["question"] ?>
  			</div>
  			<div class="panel-heading">
    		<h3 class="panel-title"> Instructor : <?php echo $row["Qins"] ?></h3>
  			</div>
  			<div class="panel-body">
   			<?php echo $row["answer"] ?>
  			</div>
			</div>
			</div>

			
<?php
	}

		 

	}
	?>
	<?php

	include $tpl."footer.php";	

	$profpic = "back.jpg";
?>
<html>
<head>
<style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
  /*background-repeat:repeat;*/

   background-size: 1600px 1420px;
}
</style>

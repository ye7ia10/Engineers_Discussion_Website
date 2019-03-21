<?php

session_start();
$nonavbar = "";
$tpl = "includes/templates/";//templates
		$css = "layout/css/";
		$js = "layout/js/";
$pagetitle = 'answer questions';
if(!isset($_SESSION['ID1'])){
		
		include $tpl."navbar2.php";
	}
  else if($_SESSION['ID1'] == 1){
    include $tpl."navbar4.php";
  } else{
    header("location: ../users/user.php");
    exit();
  }
include 'init.php';
if(isset($_SESSION['username'])){
	$db =$_GET["db"];
$stmt = $con->prepare("SELECT * FROM $db WHERE qID=? LIMIT 1");
$stmt->execute(array($_GET["ID"]));
$row = $stmt->fetch();
$profpic = "back.jpg";
?>
<html>
<head>
<style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
  /*background-repeat:repeat;*/

   background-size: 1600px 1220px;
}
</style>

<center>
	<form class="form-group" action="update1.php" method="POST">
	<font size="6" color="white"><h1><label >Question</label></h1></font><br>

	<div class="panel-body">
   <div class="alert alert-success " role="alert" style="width: 800px; height: 60px; margin: -52px;"><span style='font-weight: bold; width: 200px'><?php echo $row['question'] ?> </span></div>
  </div>
</div>
	<font size="6" color="red"><h1><label >Answer</label></h1></font><br>	
	<input class="form-control " type="text" name="answer" style="width: 800px; height: 120px">
	<input type="hidden" name="Qins" value= <?php echo $_SESSION['username'] ?>>
	<input type="hidden" name="db" value=<?php echo $_GET['db'] ?>>
	<input type="hidden" name="qID" value=<?php echo $_GET['ID'] ?>>
	<input class="btn btn-success " type="submit" value="Answer" style="padding: 20px; margin: 15px"> 
	


</form>

</center>
<?php
}
else {
	header("location: ../admin/index.php");
	exit();
}
	include $tpl."footer.php";
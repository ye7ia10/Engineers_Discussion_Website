<?php
session_start();

if(isset($_SESSION['username'])){
include "initu.php";
$stmt = $con->prepare("SELECT * FROM posts");
		$stmt->execute(array());
	while($row = $stmt->fetch()){

	
	?>
	
	<div class="col-sm-8 col-sm-offset-2">
	<div class="panel panel-primary">
  <div class="panel-heading">
    <center><h3 class="panel-title"><?php echo $row["username"] ?></h3></center>
  </div>
  <div class="panel-body">
    <?php echo $row["post"] ?>
  </div>
</div>
</div>
<?php
}
} else {
	header("location: ../admin/index.php");
	exit();
}
 
include $tpl."footer.php";?>

<?php
$profpic = "back2.jpg";?>
<html>
<head>
<style type="text/css">
.form-control{
  display: block;
    width: 50%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    align-self: center;
}


body {
background-image: url('<?php echo $profpic;?>');
  /*background-repeat:repeat;*/

   background-size: 1600px 1050px;
}

<?php

session_start();
$pagetitle = 'members';
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
$stmt = $con->prepare("SELECT * FROM tosign WHERE ID=? LIMIT 1");
$stmt->execute(array($_GET["ID"]));
$row = $stmt->fetch();
?>
<form class="form-group" action="update.php" method="POST">
	<center><label> <font size = "6" color="green">Username</font></label></center>
	<center><input class="form-control" type="text" width="50px" align= "middle" name="username" value="<?php echo $row['username'] ?>"></center>
	<center><input class="form-control" type="hidden" name="ID" value="<?php echo $row['ID'] ?>"></center>
	<center><label><font size = "6" color="green">GroupID</font></label></center>
	<center><input class="form-control" type="text" name="groupID" value="<?php echo $row['groupID'] ?>"></center>
	<center><input class="btn btn-success" type="submit" value="Edit"></center>


</form>
<?php  
include $tpl."footer.php";

$profpic = "back.jpg";
?>
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

   background-size: 1600px 1250px;
}

<?php
}
else {
	header("location: ../admin/index.php");
	exit();
}
<?php

$tpl = "includes/templates/";//templates
include $tpl."navbar2.php";
session_start();
$pagetitle = 'login';
$nonavbar='';
  if(!isset($_SESSION['ID1'])){

}
  else if($_SESSION['ID1'] == 1){
   header('location: index.php');
   exit();
  } else if ($_SESSION['ID1'] == 0){
    header("location: ../users/user.php");
    exit();
  }

include "init.php";


if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['user'] != ''){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedpass = sha1($password);
    // check if it exist in table 
    $stmt = $con -> prepare ("SELECT userName , password FROM tosign WHERE username = ? AND password = ? AND groupID = 1");
    $stmt -> execute (array($username,$hashedpass));
    $count = $stmt-> rowCount();
   // if count > 0 so he is admin
    if($count == 1){
        $_SESSION['username'] = $username;
      	$_SESSION['ID1'] = 1;
      header("Location: dashboard.php");
        exit();
    }
    else {
        $stmt = $con -> prepare ("SELECT userName , password FROM tosign WHERE username = ? AND password = ? AND groupID = 0");
		$stmt -> execute (array($username,$hashedpass));
		$count = $stmt-> rowCount();
	   // if count > 0 so he is admin
		if($count == 1){
			$_SESSION['username'] = $username;
			$_SESSION['ID1'] = 0;
		  
		  header("Location: ../users/user.php");
			exit();
		}
    }
}
?>
<form class="login" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  <center><h4><font size="6" color="red">Log in</font></h4></center>
  <input class= "form-control input-lg" type="text" name="user" placeholder="UserName" autocomplete="off">
  <input class= "form-control input-lg" type="Password" name="pass" placeholder="Password" autocomplete="off">
  <input class="btn btn-danger btn-block" type="submit" value="login" style="padding: 11px;">
    <center><font size="4" color="white"><h4>If you don't have an account press </h4></font></center>
  <center><a href="sign.php" class="btn btn-danger btn-block" style="padding: 11px;">Sign UP</a></center>

</form>


<?php  
include $tpl."footer.php";?>
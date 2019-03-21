<?php
session_start();
$nonavbar = "";
if(isset($_SESSION['username']) && $_SESSION['ID1'] == 1){
	include "init.php";
	$name = $_SESSION['username'];
    include $tpl."navbar4.php";
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	error_reporting( error_reporting() & ~E_NOTICE );
try{
    $pdo = new PDO("mysql:host=localhost;dbname=signup", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $fulln = $_POST['attr'];
    $sql = "INSERT INTO posts (post,username)
    VALUES ('$fulln','$name')";   
    $pdo->exec($sql);
    echo "Records inserted successfully.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
}

$profpic = "faculty.jpg";
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


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
	<input class="form-control text-center ahmed" name="attr" type="text" style="margin-bottom:15px; width: 1000px; padding: 120px; ">
	<input class="btn btn-primary text-center center-block btn-lg" type="submit" value="post" style="width: 150px; height: 70px">
</form>
<?php

} else {
	header("location: index.php");
	exit();
}
 
include $tpl."footer.php";
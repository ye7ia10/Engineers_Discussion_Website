<?php
session_start();
$pagetitle = 'login';
$nonavbar='';
if(isset($_SESSION['username'])){
    header('location: dashboard.php');
    exit();

}
$tpl = "includes/templates/";//templates
    include $tpl."navbar2.php";
include "init.php";
include 'base.php';

/*
 if($_SERVER['REMOTE_ADDR'] == 'POST'){
    $fulln = $_POST['full'];
    $usern = $_POST['user'];
    $passw = $_POST['pass'];
    $hashpass = sha1($passw);
    $email = $_POST['email'];
    $depar = $_POST['depart'];
    $gr = $_POST['gid'];
 echo "Records inserted successfully.";

try{
      $sql = "INSERT INTO tosign (fullname, username, password , email ,depart , groupID)
VALUES ('$fulln', '$usern', '$hashpass' , '$email' , '$depar' , '$gr')";   
    $pdo->exec($sql);
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection


unset($con);
    }

*/
?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h4 class="text-center">Sign UP</h4>
    <input class= "form-control input-lg" type="text" name="full" placeholder="Fullname" autocomplete="off" />
    <input class= "form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off" />
    <input class= "form-control input-lg" type="password" name="pass" placeholder="Password" autocomplete="new-password" />
    <input class= "form-control input-lg" type="text" name="email" placeholder="Email" autocomplete="off" />
    <input class= "form-control input-lg" type="text" name="depart" placeholder="Your Department" autocomplete="off" />
    <input  class="btn btn-lg btn-primary btn-block " type="submit" value="Sign UP" />
</form>





<?php  
include $tpl."footer.php";?>
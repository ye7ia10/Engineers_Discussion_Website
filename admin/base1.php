<?php
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
   $fulln = $_POST['full'];
    $usern = $_POST['user'];
    $passw = $_POST['pass'];
    $hashpass = sha1($passw);
    $email = $_POST['email'];
    $depar = $_POST['depart'];
  
    $sql = "INSERT INTO tosign (fullname, username, password , email ,depart )
    VALUES ('$fulln', '$usern', '$hashpass' , '$email' , '$depar' )";   
    $pdo->exec($sql);
    echo "Records inserted successfully.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>
<?php

session_start();

if(isset($_SESSION['username'])){
include "initu.php";
include "base.php";
	
	?>


<center><form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" >
<select name="sel" style=" margin: 10px;  padding: 10px;">
  <option value="Computer">Computer</option>
  <option value="Mechanics">Mechanics</option>
  <option value="Civil">Civil</option>
  <option value="Electrical">Electrical</option>
</select>


<div >
	<textarea rows="8" cols="100" name = "te" style=" margin: 10px; padding: 10px;">
</textarea>
</div>


<div>
	<input class = "btn btn-primary" type="submit" value="Ask" style="padding: 20px; width: 80px">
</div>
</form></center>
<?php
}else{
	header("location: ../admin");
}
?>

<?php
include $tpl."footer.php";
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















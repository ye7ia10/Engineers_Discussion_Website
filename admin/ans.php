<?php
	session_start();
	$pagetitle = 'members';
	$nonavbar = "";
	$tpl = "includes/templates/";//templates
		$css = "layout/css/";
		$js = "layout/js/";
	include $tpl."navbar4.php";
	$do = $_GET['do'];
	if(isset($_SESSION['username'])){
		include 'init.php';
		$stmt = $con->prepare("SELECT * FROM  $do");
		$flag = 0;
		$i=1;
		?>
			<table class="table  panel panel-danger">
  <thead>
    <tr>
      
      
    </tr>
  </thead>
  <tbody><?php
  $stmt->execute(array($i));
  	while($row = $stmt->fetch()){
			
		?>	
    <tr>
     <?php if(sizeof($row['answer']) != 0){ ?>
      <td><?php echo $row['Quser'] ?></td>
      <td><?php echo $row['question'] ?></td>
      

    <td><a href="toans.php?ID=<?php echo $row['qID'] ?>& db=<?php echo $do ?>"><btn class = "btn btn-danger btn-block center-block col-sm-4">>></btn></a></td>
	<?php } ?>
    </tr>
    
  
			
			<?php

			
	}
	} else{
		header("location: ../admin/index.php");
	exit();
	}
	?>
	</tbody>
</table>
<?php
include $tpl."footer.php";

<?php
	session_start();
	$nonavbar = "";
	$pagetitle = 'members';
	$tpl = "includes/templates/";//templates
		$css = "layout/css/";
		$js = "layout/js/";
	if(!isset($_SESSION['ID1'])){
		
		include $tpl."navbar2.php";
	}
  else if($_SESSION['ID1'] == 1){
    include $tpl."navbar4.php";
  } else{
    header("location: ../users/user.php");
    exit();
  }
	if(isset($_SESSION['username'])){
		include 'init.php';
		$stmt = $con->prepare("SELECT * FROM tosign WHERE ID=? LIMIT 1");
		$flag = 0;
		$i=1;
		?>
			<table class="table  panel panel-danger">
  <thead>
    <tr>
      <th scope="col">username</th>
      <th scope="col">groupID</th>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">depart</th>
      <th scope="col">fullname</th>
      
    </tr>
  </thead>
  <tbody><?php
  	while(true){
			$stmt->execute(array($i));
			$i++;
			$row = $stmt->fetch();
			//$_SESSION['userid'] == $row['userid'];
			$count = $stmt->rowCount();
			if($count > 0){
				?>
    <tr>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['groupID'] ?></td>
      <td><?php echo $row['ID'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['depart'] ?></td>
      <td><?php echo $row['fullname'] ?></td>

    <td><a href="edit.php?ID=<?php echo $row['ID'] ?>"><btn class = "btn btn-danger btn-block center-block col-sm-4">>></btn></a></td>

    </tr>
    
  
			
			<?php
			} else{
				break;
			}

			
	}
	}else {
	header("location: ../admin/index.php");
	exit();
}
	?>
	</tbody>
</table>
<?php
include $tpl."footer.php";
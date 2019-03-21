<?php

	// you can add | edit | delete members here
	session_start();
	$pagetitle = 'members';
	if(isset($_SESSION['username'])){
		include 'init.php';

		$do = isset($_GET['do']) ? $_GET['do'] : 'manage';
		
		if($do == 'manage'){

			//manage page
			echo 'you are in manage';
		}
		else if($do == 'edit') {//edit page

			if(isset($_GET['userid'])&& is_numeric($_GET['userid'])){
				$userid = $_GET['userid'];
			}else{
				$userid = 0;
			}
			$stmt = $con->prepare("SELECT * FROM users WHERE userid=? LIMIT 1");
			$stmt->execute(array($userid));
			$row = $stmt->fetch();
			//$_SESSION['userid'] == $row['userid'];
			$count = $stmt->rowCount();
			if($count > 0){
				
			?>
			
			
			<h1 class="text-center">Edit Members</h1>
			<div class="container">
				<form class="form-horizontal" action="?do=update" method="POST">
					<div class="form-group">
						<input type="hidden" name="userid" value="<?php echo $userid ?>">
						<label class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10 col-lg-7">
							<input type="text" name="username" class="form-control" value="<?php echo $row['username']?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10 col-lg-7">
							<input type="Password" name="password" class="form-control" >
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10 col-lg-7">
							<input type="Email" name="email" class="form-control" value="<?php echo $row['email']?>">

						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label">FullName</label>
						<div class="col-sm-10 col-lg-7">
							<input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname'] ?>" >
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10 col-lg-7">
							<input type="submit" value="save" class="btn btn-primary btn-block">
						</div>
					</div>
				</form>

			</div>
		<?php

		}}else if ($do =='update') {
			
			echo '<h1 class=text-center> update members</h1>';
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$id     =$_POST['userid'];
				$user     =$_POST['username'];
				$email     =$_POST['email'];
				$name     =$_POST['fullname'];
				$pass     =$_POST['password'];
				if(empty($pass)){
					$stmt =$con->prepare("UPDATE users SET username =?,email=?,fullname=? WHERE userid=?");
					$stmt->execute(array($user,$email,$name,$id));
				}else{
					$pass1 = sha1($pass);
					$stmt =$con->prepare("UPDATE users SET username =?,email=?,fullname=?,password=?  WHERE userid=?");
					$stmt->execute(array($user,$email,$name,$pass1,$id));
				}

				?>
			 '<h1 class="text-center"><?php echo $stmt->rowCount() ?> Record Updated</h1>';
			<?php
			}

			else{
				echo '<h1 class="text-center">you cant browse this page directly</h1>';
			}
		} elseif ($do == 'members') {
			# code...
		} 
		else{
			echo "no such ID ";
		}
		}
		
	 else{
		header('location: index.php');
	}
	include $tpl . 'footer.php';

<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Questions <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../admin/qs.php?do=computer">Computer Science And System Engineering</a></li>
            <li><a href="../admin/qs.php?do=Electrical">Electrical Engineering</a></li>
            <li><a href="../admin/qs.php?do=Civil">Civil Engineering</a></li>
            <li><a href="../admin/qs.php?do=Mechanical">Mechanical Engineering</a></li>
          </ul>
        <li ><a href="ask.php">Ask question <span class="sr-only">(current)</span></a></li>
        <?php
        if($_SESSION['ID1'] == 1){?>
        <li ><a href="../admin/members.php">Members <span class="sr-only">(current)</span></a></li>
      <?php } ?>
      
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["username"]; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="members.php?do=edit&userid=<?php echo $_SESSION['userid']?>">Edit Profile</a></li>
            <li><a href="#">Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
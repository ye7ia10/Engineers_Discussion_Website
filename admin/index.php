<div class="baa">
<?php
$pagetitle = "Home";
include 'connect.php';
		session_start();
		// rotes

		$tpl = "includes/templates/";//templates
		$css = "layout/css/";
		$js = "layout/js/";


		include "includes/languages/languages.php";
		
		include "includes/functions/pagetitle.php";
		include $tpl."header.php";

		if(!isset($_SESSION['ID1'])){
		
		include $tpl."navbar2.php";
	}
  else if($_SESSION['ID1'] == 1){
    include $tpl."navbar4.php";
  } else{
    header("location: ../users/user.php");
    exit();
  }
	?>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
     <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
       <li data-target="#carousel-example-generic" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image (3).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="image (4).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="image (1).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="image (2).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="image (5).png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="image (7).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="image (6).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    
    <div class="item">
      <img src="image (8).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>



  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" >
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" >
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
  <div class="container" style="margin-top: 40px;">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="panel  panel-transparent">
  <div class="panel-heading" >
    <h3 class="panel-title text-center" >About US</h3>
  </div>
  <div class="panel-body alert alert-success" style="font-weight: bolder;">
    Our website aims to help students making their choice of choosing the department which suits their skills.
    We provide proffessors and graduates to answer their questions as well as information about each department .
  </div>
</div>
      </div> 
      
    </div>
  </div>
	<?php

	include $tpl."footer.php";

<?php
// Start the session
session_start();
if(isset($_SESSION["login"]) and $_SESSION["login"]!="ok"){

header('Location:index.php');	
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">FarmerEyes Admin</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                 <!-- <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>-->
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.php">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="home.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="current"><a href="upload.php"><i class="glyphicon glyphicon-upload"></i> Upload Lab Data</a></li>
                    <li><a href="view_data.php"><i class="glyphicon glyphicon-stats"></i> Soil Data Table</a></li>
                    <li><a href="solution.php"><i class="glyphicon glyphicon-ok"></i> Solution</a></li>
                    <li><a href="crops.php"><i class="glyphicon glyphicon-leaf"></i> Best Crops</a></li>
                </ul>
             </div>
		  </div>


      <div class="col-md-10">
         <div class="row">
          <!--  <div class="col-md-6">-->
              <div class="content-box-large">
                            <!--<div class="col-md-6 col-md-offset-2 main"> -->
                 
                      <h3 style="text-align:center;">Insert M,N,K,P manually </h3>
                        <form class="form-horizontal" role="form"  data-fv-framework="bootstrap"
                      data-fv-icon-valid="glyphicon glyphicon-ok"
                      data-fv-icon-invalid="glyphicon glyphicon-remove"
                      data-fv-icon-validating="glyphicon glyphicon-refresh" action="upload_form.php" method ="get">
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Division:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="division" name="division" required  type="text" value ="Division">
                          </div>
                        </div>
                     <div class="form-group">
                          <label class="col-lg-3 control-label">Zone:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="zone" name="zone" required  type="text" value ="zone">
                          </div>
                        </div>
                     <div class="form-group">
                          <label class="col-lg-3 control-label">Date:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="date" name="date" required  type="text" value ="yyyy-mm-dd">
                          </div>
                        </div>
                     <div class="form-group">
                          <label class="col-lg-3 control-label">Magnesium:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="m" name="m" required  type="text" >
                          </div>
                        </div>
                     <div class="form-group">
                          <label class="col-lg-3 control-label">Nitrogen:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="n" name="n" required  type="text" >
                          </div>
                        </div>
                     <div class="form-group">
                          <label class="col-lg-3 control-label">Potassium:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="k" name="k" required  type="text" >
                          </div>
                        </div>
                     <div class="form-group">
                          <label class="col-lg-3 control-label">Phosphorus:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="p" name="p" required  type="text" >
                          </div>
                        </div>
                    <div class="form-group">
                          <label class="col-md-3 control-label"></label>
                          <div class="col-md-6">
                      <button class="btn btn-primary" type="submit">Insert</button>
                          </div>
                        </div>
                      </form>
                    <p style="text-align:center;">or</p>
                   <h3 style="text-align:center;">Select Excel file to upload to Database</h3>


                  
                    <form action="excel_input.php" method="POST" enctype="multipart/form-data" style="text-align:center;">
                       <input style="margin-left: auto; margin-right:auto; padding-top:10px;" type="file" name="excel" />
                       <input style="margin-top:15px;" class="btn btn-primary" type="submit"/>
                    </form>
                  
                  <!--</div>-->
              </div>
            <!--</div>-->
          </div>
        </div>
		  
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2016 <a href='http://www.farmereyes.com'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
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
    <title>FarmerEyes Admin</title>
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
                    <li><a href="upload.php"><i class="glyphicon glyphicon-upload"></i> Upload Lab Data</a></li>
                    <li class="current"><a href="view_data.php"><i class="glyphicon glyphicon-stats"></i> Soil Data Table</a></li>
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
                 <?php 
                  //include('config/mysql.php');
                  $con=mysqli_connect("localhost", "root", "", "soil");
                  $sql = mysqli_query($con, "SELECT * FROM table_excel");
                  //echo mysql_error();
                 // $sql = "SELECT * FROM table_excel" ;

                  ?>
                <h3 >Excel Sheet Data</h3>
                <link rel="stylesheet" href="views/extra.css" />
                <div class="responsive">
                <table class="table" > 
                            <thead > 
                                <tr> 
                                    <th >Division</th> 
                                    <th >Zone</th>
                                    <th >Date</th>
                                    <th >M</th>
                                    <th >N</th>
                                    <th >K</th>
                                    <th >P</th>
                                </tr> 
                            </thead> 

                            <tbody>
                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                                 <tr>           
                                    <td ><?php echo $row["division"] ?></td>
                                    <td ><?php echo $row["zone"] ?></td>
                                    <td ><?php echo $row["date"] ?></td>
                                    <td ><?php echo $row["M"] ?></td>
                                    <td ><?php echo $row["N"] ?></td>
                                    <td ><?php echo $row["K"] ?></td>
                                    <td ><?php echo $row["P"] ?></td>
                                        </tr>  

                <?php } ?>    
                            </tbody> 
                            </table>
                  </div>
                  
                  <!--</div>-->
                </div>
              
              <div class="content-box-large">
                  <h3 >Ph Values</h3>
                  <?php 
                  //include('config/mysql.php');
                  $con=mysqli_connect("localhost", "root", "", "soil");
                  $sql = mysqli_query($con, "SELECT * FROM ph");
                  //echo mysql_error();
                 // $sql = "SELECT * FROM table_excel" ;

                  ?>
                <link rel="stylesheet" href="views/extra.css" />
                <div class="responsive">
                <table class="table" > 
                            <thead > 
                                <tr> 
                                    <th >Division</th> 
                                    <th >Zone</th>
                                    <th >PH Value</th>
                                    <th >Time</th>
                                </tr> 
                            </thead> 

                            <tbody>
                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                                 <tr>           
                                    <td ><?php echo $row["division"] ?></td>
                                    <td ><?php echo $row["zone"] ?></td>
                                    <td ><?php echo $row["phvalue"] ?></td>
                                    <td ><?php echo $row["time"] ?></td>
                                        </tr>  

                <?php } ?>    
                            </tbody> 
                            </table>
                  </div>
              </div>
            <!--</div>-->
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
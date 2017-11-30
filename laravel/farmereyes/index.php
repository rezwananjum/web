
<!DOCTYPE html>
<html lang="en">
  <head>
	<script src="jquery.js"></script>
	<script src="Chart.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Soil Tester</title>
	<!--JavaScript-->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5kXsZFLbyKiRb-1xfC9E4cTpVUD4JAqM&callback=initMap"
  type="text/javascript"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
	
  </head>
  <body>
 
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php" style="color:#800000;font-size: 30px;">Farmer Eyes</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>
	      <li><a href="">Our Policy</a></li>
	      <li><a href="">About Us</a></li>
		  <li><a href="">Contact Us</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    <li><h4 class="aler alert-danger">This site is in under construction</h4></li>
	    </ul>
	  </div>
	</nav>
	  
	
	
	
	
	
	
	
    <div class="container-fluid">
      <div class="row">
	  
	  
		<div class = "leftbar">
		 <div class="col-md-2 sidebar" style="position:fixed">
		 <?php
		 include 'leftbar.php'; ?>
		 </div>
		</div>
	  
		<div class="col-md-6 col-md-offset-3 ">
		
		<h4 style="margin-left:260px;color:#7575a3;margin-top:30px">Overall Soil Situation Of Country</h4>
		<hr style="margin-left:120px">
		
		<script type="text/javascript">
			google.charts.load('current', {'packages': ['geochart']});
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
     var data = google.visualization.arrayToDataTable([
        ['Country',   'Ph', 'Temperature'],
        ['Dhaka',  6.4, 33],
        ['Rajshahi', 5.6, 36],
        ['Sylhet',  3.4, 23],
		['Barishal', 4.5,29],
		['Chittagong', 3.4, 30],
		['Rangpur',  4.4, 31],
		['Khulna', 5.5, 33],
		['Rajshahi', 6.5, 34]


      ]);

      var options = {
        sizeAxis: { minValue: 0, maxValue: 100 },
        //region: 'BD',
        displayMode: 'markers',
       // colorAxis: {colors: ['#e7711c', '#4374e0']}, // orange to blue
		colorAxis: {colors: ['#e31b23', 'black', '#00853f']},
		backgroundColor: null,
		 //backgroundColor: '#81d4fa',
          //datalessRegionColor: '#f8bbd0',
		//defaultColor: '#f5f5f5'
		//resolution: 'divisions'
      };
	  options['region']= 'BD';

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    };
		</script>
		
		
		  <div>
		       <div id="chart_div" style="width: 750px; height: 500px">
		  	
		       </div>
		  </div>
		
		</div>

<!--Avg soil data of country-->
      <div class="col-md-8 col-md-offset-2 main">
		
		<div class="container-fluid">
		
		<h4 style="margin-left:260px;color:#7575a3;margin-top:60px">Average Division Soil Data Of Bangladesh</h4>
		<hr style="margin-left:120px">
		
		 

 <table class="table table-bordered table-striped" style="margin-left:60px;margin-top:70px">
     <thead>
      <tr>
        <th>Division</th>
        <th>Temperature</th>
        <th>Ph</th>
        <th>humidity</th>
        <th>Moisture</th>
        <th>Na</th>
        <th>P</th>
        <th>Ca</th>
        <th>N</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dhaka</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
       
      </tr>
      <tr>
        <td>Barishal</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
      </tr>
      <tr>
       <td>Khulna</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
		</div>	  
	  </div>
<!--best Crops-->

	     <div class="col-md-8 col-md-offset-2 main">
		
		<div class="container-fluid">
		
		<h4 style="margin-left:260px;color:#7575a3;margin-top:60px">Best Crops For Divisions For This Season</h4>
		<hr style="margin-left:120px">
		
		 

 <table class="table table-bordered table-striped" style="margin-left:50px;margin-top:70px">
     <thead>
      <tr>
        <th>Dhaka</th>
        <th>Chittagong</th>
        <th>Sylhet</th>
        <th>Rajshahi </th>
        <th>Khulna</th>
        <th>Barisal</th>
        <th>Rangpur</th>
        <th>Mymenshingh</th>

        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>efvf</td>
        <td>amon</td>
        <td>boro</td>
        <td>hbhe</td>
        <td>frf</td>
        <td>frf</td>
        <td>erer</td>
        <td>evrv</td>
       
       
      </tr>
      <tr>
        <td>vrv</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
     
      </tr>
      <tr>
       <td>ercec</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
     
      </tr>
    </tbody>
  </table>
			  
	  </div>
	 </div>


<!--Avg sensor values for country-->

<div class="col-md-8 col-md-offset-2 main">
		
		<div class="container-fluid">
		
		<h4 style="margin-left:260px;color:#7575a3;margin-top:80px">Average Sensors Data For This Session</h4>
		<hr style="margin-left:120px">
		<!--</div><img src="images/<?php echo $_GET['q']?>.png" alt="something" style="width:400px;height:304px;></div>-->
		 <?php 
			 if(empty($_GET['q']))
				{
					//$q=$_GET['dhk'];
					$q='dhk';
					$con=mysqli_connect("localhost", "root", "", "soil");
					if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
					} 
					$sql="SELECT * FROM zones WHERE division!='$q' ";
					$result = $con->query($sql);
					$zonearray=array();
					$zoneavg=array();
					if (mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							
							$zn=$row["zone"];
							$zonearray[]=$zn;
							$sql2="SELECT * FROM ph WHERE division='$q' AND zone='$zn' ";
							$result2 = $con->query($sql2);
							if (mysqli_num_rows($result2) > 0)
							{
								$zonevalue=array();
								while($row2 = mysqli_fetch_assoc($result2))
								{
									//echo $row2["zone"];
									$zonevalue[]=$row2["phvalue"];
								}
								$zoneavg[] = array_sum($zonevalue) / count($zonevalue);
							}
						}
					}
						//mysqli_close($con);
					$sql="SELECT DISTINCT time FROM ph WHERE division='$q' ";
					$result = $con->query($sql);
					$timearray=array();
					$zoneavg2=array();
					if (mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							
							$tm=$row["time"];
							$timearray[]=$tm;
							$sql2="SELECT * FROM ph WHERE division='$q' AND time='$tm' ";
							$result2 = $con->query($sql2);
							if (mysqli_num_rows($result2) > 0)
							{
								$zonevalue1=array();
								while($row2 = mysqli_fetch_assoc($result2))
								{
									//echo $row2["zone"];
									$zonevalue1[]=$row2["phvalue"];
								}
								$zoneavg2[] = array_sum($zonevalue1) / count($zonevalue1);
							}
						}
					}
						//mysqli_close($con);
				}
			?>
			
			<canvas id="mycanvas2" width="360" height="350"></canvas>
			<script>
			var chrt = document.getElementById("mycanvas2").getContext("2d");
			var data = {
			labels: <?php echo json_encode($zonearray) ?>, //x-axis
			datasets: [
				{
					label: "My First dataset", //optional
					fillColor: "rgba(0,255,0,.8)",
					strokeColor: "rgba(0,255,0,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: <?php echo json_encode($zoneavg) ?> // y-axis
				}
				
			]
			};

		var myFirstChart = new Chart(chrt).Bar(data);
		</script>

		<canvas id="mycanvas3" width="360" height="350"></canvas>
		
			<script>
			var chrt1 = document.getElementById("mycanvas3").getContext("2d");
			var data = {
			labels: <?php echo json_encode($timearray) ?>, //x-axis
			datasets: [
				{
					label: "My First dataset", //optional
					fillColor: "rgba(220,120,220,0.8)",
					strokeColor: "rgba(220,120,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: <?php echo json_encode($zoneavg2) ?> // y-axis
				}
				
			]
			};

			var myFirstChart = new Chart(chrt1).Bar(data);
			</script>



		
		
		</div>
		
		</div>


	  
		

        
         </div>
    </div>

	
	
	
	
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src ="js/home.js"></script>
  </body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
	<link rel="stylesheet" href="../css/header.css">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!------------------------Call Nav------------------------>
    <link rel="stylesheet" href="../css/adminnavi.css">
    <link rel="stylesheet" href="../css/usernavi.css">
    <script src="../js/adminnavi.js"></script>
    <script src="../js/usernavi.js"></script>
    <!------------------------Call Nav------------------------>
    
    <!------------------------Call Aunthentication------------------------>
    <script src="../js/userauthentication/login.js"></script>
    <script src="../js/userauthentication/signUp.js"></script>
    <script src="../js/userauthentication/forget.js"></script>
    <script src="../js/userauthentication/logout.js"></script>
    <link rel="stylesheet" href="../css/userauthentication/login.css">
    <link rel="stylesheet" href="../css/userauthentication/signUp.css">
    <link rel="stylesheet" href="../css/userauthentication/forget.css">
    <!------------------------Call Aunthentication------------------------>
    
    <!------------------------Chart------------------------>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!------------------------Chart------------------------>
    
    <style>
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    
    .feature {
        /* Add shadows to create the "card" effect */
        //box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        }
        
    .feature:hover{
            transform:scale(1.1);
    }
    </style>
    
</head>

<body style="background-color: white;margin: 0;padding: 0;width:500%;max-width:1920px;min-width:480px;margin-left:auto;margin-right:auto;height:100%; overflow-y: auto; overflow-x: hidden;">
    <div class="header"><img src="../images/logo.jpg" alt="Asia Top U Logo">
		<h1>&nbsp Asia University Rankings
        
		</h1>
	</div>	
	<div style="height:50px">
		
    	 <!------------------------Check Position------------------------>
		<?php
		    session_start();
            error_reporting(0);
            include("dbconnect.php");
            $email = $_SESSION['email'];
            $password = $_SESSION['password'];
            $position = $_SESSION['position'];
            if (isset($_SESSION["email"])){
             $sqlloaduser = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password' ";
                $result = $conn->query($sqlloaduser);
                if ($result->num_rows > 0 && $position == "User") {
                ?>
                <div id="usernavbar"></div>
                <?php
                }
                else if($position == "Admin" && $email=="asiatopu@gmail.com" && $password=="7af2d10b73ab7cd8f603937f7697cb5fe432c7ff"){
                ?>
                <div id="adminnavbar"></div>
                <?php    
                }
                else{
                  ?>
                 <div id="usernavbar"></div>
            <?php  
                }
                ?>
		  
            <?php
            }else{
            ?>
             <div id="usernavbar"></div>
            <?php
            }
		?>
	<!------------------------Call Position------------------------>
	    <div style="padding-left: 70px">
		    <span class="asia">Asia</span>
		    <span class="topu" >TOP U</span>
		</div>
	</div>
	<div style="width:80%">
        <span class=" discover">Discover it FOR YOU</span>
        <a href="uniRanking.php">
            <div class="feature" style="float:right;height:80px;width:350px;margin-right:45px;text-align:left;background-color:yellow; border-radius:20px;cursor:pointer">
                <span class="discover" style="margin-top:15px;font-size:40px; margin-left:10px">Explore NOW</span>
                <i class="material-icons" style="margin-left:10px;margin-top:5px;font-size:60px">school</i>
            </div> 
        </a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="float:left">
        <div class="card" style="background-color:MidnightBlue; width:25%; height:250px;float:left;margin-left:25px">
            <img src="../images/wordu.png" style="height:90%;width:40%;float:left" alt="Asia Top U Logo">
                <div class="feature" style="margin-top:30px">
                    <span style="font-size:30px;font-weight:bold;color:white">WORLD University</span>
                    <br>
                    <span style="font-size:60px;font-weight:bold;color:white">Over 25,000</span>
                </div>
        </div>
        <div class="card" style="background-color:OrangeRed; width:25%; height:250px;float:left;margin-left:25px">
            <img src="../images/asiau.png" style="height:65%;width:40%; margin-top:50px;float:left" alt="Asia Top U Logo">
                <div class="feature" style="margin-top:30px">
                    <span style="font-size:30px;font-weight:bold">ASIA University</span>
                    <br>
                    <span style="font-size:60px;font-weight:bold">5,003</span>
                </div>
        </div> 
        <div class="card" style="background-color:Orchid; width:25%; height:250px;float:left;margin-left:25px">
            <img src="../images/malaysiau.png" style="margin-left:5px;height:65%;width:40%; margin-top:50px;float:left" alt="Asia Top U Logo"> 
                <div class="feature" style="margin-top:30px">
                    <span style="font-size:25px;font-weight:bold">MALAYSIA University</span> 
                    <br>
                    <span style="font-size:60px;font-weight:bold">67</span>
                </div>
        </div> 
    </div>
    
    <br>
    <div class="feature" id="chartContainer" style="margin-top:80px;margin-left:80px;width:50%;height:280px;float:left">
    <script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
    theme: "light2",
    title:{
        text: "Overall Score of Malaysia Top 1 University in Asia from 2019 to 2021"
    },
	data: [{        
		type: "line",
      	indexLabelFontSize: 16,
		dataPoints: [
			{ y: 90.6 , indexLabel: "\u2193 lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
			{ y: 94},
			{ y: 94.6, indexLabel: "\u2191 highest",markerColor: "red", markerType: "triangle" },
			
		]
	}]
    });
    chart.render();

    }
    </script>
    
    </div>
    <div style="margin-left:20px;width:380px;height:380px;float:left;text-align:justify">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
         <span>
        	        University Malaya(UM) is the TOP 1 university in Malaysia. It have been ranked within 100 at the ranking of the world. </span> 
        	<br>
        	        <span >Within these three years, UM rank have rise from 2019 to 2021 with an overall score of 90.6 to 94 and finally 94.6 at 2021</span>
        
    </div>
    <div class="card" style="background-color:white; width:80%; height:450px;float:left; margin-top:30px">
        <div class="feature" id="containerbar" style="margin-left:20px;width:380px;height:380px;float:left">
        	    <script language="JavaScript">
                function drawChart() {
                    /* Define the chart to be drawn.*/
                    var data = google.visualization.arrayToDataTable([
                        ['Ranking', 'Asia University Ranking'],
                        ['National University of Singapore (NUS)', 100],
                        ['TsingHua University', 98.5],
                        ['Nanyang Technological University, Singapore (NTU)', 98.2],
                        ['The University of Hong Kong', 98],
                        ['Zhe Jiang University', 97.2]
                    ]);
                    var options = {
                        title: 'Ranking 2021',
                        isStacked: true
                    };
                    /* Instantiate and draw the chart.*/
                    var chart = new google.visualization.BarChart(document.getElementById('containerbar'));
                    chart.draw(data, options);
                }
                google.charts.setOnLoadCallback(drawChart);
                </script>
	    </div>
	    <div style="margin-left:20px;width:280px;height:380px;float:left;text-align:justify">
	        <br>
	        <br>
	        <br>
        	    <span>
        	        According to the ranking of Asia University in 2021, the university at the TOP 1 in Asia is National University of Singapore (NUS), with the overall score of 100. Follow by it, Tsing Hua University from China Mainland located at the ranking No.2 in Asia. </span> 
        	<br>
        	        <span >The third ranking of university in Asia belong to Nanyang Technological University, which is also from Singapore. The fourth and fifth in the ranking of Asia University are The University of Hong Kong and Zhe Jiang University (China) respectively.</span>
	    </div>
	    <div class="feature" id="containerpie" style="margin-left:100px;width:380px;height:340px;float:left">
            	<script language="javascript">
            	    anychart.onDocumentReady(function() {
            
                // set the data
                var data = [
                  {x: "National University of Singapore (NUS)", value: 1501201},
                  {x: "TsingHua University", value: 2541203},
                  {x: "Nanyang Technological University, Singa", value: 1522142},
                  {x: "The University of Hong Kong", value: 1352140},
                  {x: "Zhe Jiang University", value: 2110003}
                ];
            
                // create the chart
                var chart = anychart.pie();
            
                // set the chart title
                chart.title("Most Favorite Asia University");
            
                // add the data
                chart.data(data);
            
                // display the chart in the container
                chart.container('containerpie');
                chart.draw();
            
                });
            	</script>
	    </div>
	    <div style="margin-left:20px;width:280px;height:380px;float:left;text-align:justify">
	        <br>
	        <br>
	        <br>
        	    <span>
        	        Based on this chart, the most favourite university rated in Asia is Tsing Hua University with vote of 2541203 indicates to 28.2%. Follow by this is Zhe Jiang University with 2110003 vote (23.4%). The rating for favourite university for both Nanyang Technology University and National University Singapore are 16.9% and 16.6% respectively. The University of Hong Kong get 1352140 vote which indicates 15%  </span> 
        	<br>
        	      
	    </div>
    </div>
    <br>
    <br>
    <br>
    
    
    <!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>
</body>
</html>

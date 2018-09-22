<!doctype html>
<html>


    <head>
    <meta charset="utf-8">
    <title>Update Live Score</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">
	<link href="@Url.Content("mytemplate/")css/bootstrap.min.css" rel="stylesheet">
    <link href="@Url.Content("mytemplate/")css/font-awesome.min.css" rel="stylesheet">
    <link href="@Url.Content("mytemplate/")css/prettyPhoto.css" rel="stylesheet">
    <link href="@Url.Content("mytemplate/")css/price-range.css" rel="stylesheet">
    <link href="@Url.Content("mytemplate/")css/animate.css" rel="stylesheet">
    <link href="@Url.Content("mytemplate/")css/main.css" rel="stylesheet">
    <link href="@Url.Content("mytemplate/")css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admintemplate/bootstrap/css/bootstrap.min.css" />

    <link href="admintemplate/css/main.css" rel="stylesheet">
    <link href="admintemplate/css/font-style.css" rel="stylesheet">
    <link href="admintemplate/css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="admintemplate/js/jquery.js"></script>    
    <script type="text/javascript" src="admintemplate/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="admintemplate/js/lineandbars.js"></script>
    
	<script type="text/javascript" src="admintemplate/js/dash-charts.js"></script>
	<script type="text/javascript" src="admintemplate/js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="admintemplate/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="admintemplate/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="admintemplate/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="admintemplate/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="admintemplate/js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="admintemplate/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="admintemplate/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="admintemplate/js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
	  
	table {
		border-collapse: collapse;
		width: 100%;
	}

	th, td {
		text-align: left;
		padding: 15px;
	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
		background-color: #4CAF50;
		color: white;
	}

    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>    
  </head>
  
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BPL Dashboard</a>
        </div> 
          <div class="navbar-collapse collapse">
            
          </div><!--/.nav-collapse -->
        </div>
    </div>
	<div class="container">
  
  
  
       <table style="width:100%">

	   
  <tr style="width:75%">
    <th style="font-size:130%">Team-1 Bat</th>		
    <th style="font-size:130%">Team-1 Bowl</th>
	<th style="font-size:130%">Team-2 Bat</th>
	<th style="font-size:130%">Team-2 Bowl</th>
  </tr>
  
<?php
	require 'connect.php';
	$sql1="SELECT * FROM live_score";
	$myData1=mysql_query($sql1,$con);
	while($data1 = mysql_fetch_array($myData1)){
		echo "<form action=all.php method=post>";
		
		echo "<tr>";
		echo "<td>" . "<input type=text name=t1run value='" . $data1['team1bat'] . "' </td>";
		echo "<td>" . "<input type=text name=t1bowl value='" . $data1['team1bowl'] . "' </td>";
	    echo "<td>" . "<input type=text name=t2run value='" . $data1['team2bat'] . "' </td>";		
		echo "<td>" . "<input type=text name=t2bowl value='" . $data1['team2bowl'] . "' </td>";	
		echo "<td>" . "<input type=hidden name=hidden value='" . $data1['match_id'] . "' </td>";
		echo "<td>" . "<input type=submit name=livescore value=update" . " </td>";
		echo "</tr>";
		
		echo "</form>";
	};
	
	mysql_close($con);
?>
</table>
</br><br>
<div id="ne"> <a style="color:#00BF57" href="admin.html">Home</a></div>
	   
	   
	   
	   
	   
	   
</div>
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       <br><br><br><br><br><br><br><br>
   
    <div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			
      			<p>Bangladesh Premier League</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
          
</html>
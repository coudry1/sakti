<?php
session_start();

$user1 = $_SESSION['username'];
$varlog = $_SESSION['login'];

if ($varlog != katro) {
    echo "<script>alert ('Anda tidak berhak mengakses halaman ini, silahkan login terlebih dahulu.')</script>";
    echo '<script type="text/javascript">window.location="?p="</script>';
}
?>
<!doctype html>
<meta http-equiv="Refresh" content="300; URL=?p=d">
<?php
include "count_sakti.php";
include "count_portalspan.php";
include "count_converter.php";
?>
	
<html><head>
    <meta charset="utf-8">
    <title>Aplikasi Monitoring SAKTI</title><link href='images/logo_sakti.png' rel='Shortcut Icon'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/lineandbars.js"></script>
    
	<script type="text/javascript" src="js/dash-charts.js"></script>
	<script type="text/javascript" src="js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="bootstrap/js/highcharts.js"></script>
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/admin.js"></script>
          <!-- Ubah lebar body key 1170px dari default-->
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
	
<link rel="stylesheet" type="text/css" href="css/shadowbox.css">
<script type="text/javascript" src="js/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    language: 'en',
    players:  ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv']
});
                        </script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="app_ajax.js"></script>
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
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <table>
		  <tr><td width="68">
          &nbsp;&nbsp;<img src="images/logo_sakti.png" alt=""> </td> <td width='1200px'><a class="navbar-brand" href="index.html"> n'Dashboard Aplikasi SAKTI</a></td>
          <td width='18%' style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color: #ffffff;text-align:right;">          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="font-size:16px">
              <li class="active"><a href="?p=d"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li ><a href="?p=r"><i class="icon-th icon-white"></i> Report</a></li>
              <li><a href="?p=lg"><i class="icon-lock icon-white"></i> Logout</a></li>
            </ul>
          </div></td>
		  </tr>
		  </table>
        </div> 

        </div>
    </div>

    <div class="container">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
	  <!-- TOTAL SUBSCRIBERS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Today</dtitle>
	      		<hr>
	      		<div class="cont">
<table align='center' border='1'>				
<td style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color: #ffffff;text-align:center;"><?php $today = gmdate("d/m/y", time()+60*60*8); echo $today;?></td><td  style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color: #ffffff;text-align:center;"><digiclock>
<script type="text/javascript">
<!--
function startTime() {
    var today=new Date(),
        curr_hour=today.getHours(),
        curr_min=today.getMinutes(),
        curr_sec=today.getSeconds();
 curr_hour=checkTime(curr_hour);
    curr_min=checkTime(curr_min);
    curr_sec=checkTime(curr_sec);
    document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
}
function checkTime(i) {
    if (i<10) {
        i="0" + i;
    }
    return i;
}
setInterval(startTime, 500);
//-->
</script></digiclock><div id="clock"></div>
		  </tr>
		  </table>
	      		</div>
      		</div>	     
	   
      		<div class="half-unit">
	      		<dtitle>SPP Lebih Dari 5 Hari</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><a><div onClick=ubahbadandib() style="cursor:pointer;"> <bold><?php echo $spp_lewat;?></bold> | SPP Tertunda </div> </a></p>
				</div>
		             <div class="progress">
				        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $spp_lewat;?>%"><span class="sr-only"></span>
					        
				        </div>
				     </div>
      		</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">

<script type="text/javascript">
/*** First Chart in Dashboard page ***/

	$(document).ready(function() {
		info = new Highcharts.Chart({
			chart: {
				renderTo: 'load',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'Income',
				innerSize: '65%',
				data: [
					{ name: 'load percentage', y: <?php
if ($user_login==0) { echo "0";}
else if ($user_login>0 and $user_login<=22) { echo "1";}
else if ($user_login>22 and $user_login<=40) { echo "2";}
else if ($user_login>40 and $user_login<=60) { echo "3";}
else if ($user_login>60 and $user_login<=80) { echo "4";}
else if ($user_login>80 and $user_login<=100) { echo "5";}
else if ($user_login>100 and $user_login<=120) { echo "6";}
else if ($user_login>120 and $user_login<=140) { echo "7";}
else if ($user_login>140 and $user_login<=160) { echo "8";}
else if ($user_login>160 and $user_login<=180) { echo "9";}
else if ($user_login>180 and $user_login<=200) { echo "10";}
else if ($user_login>200 and $user_login<=220) { echo "11";}
else if ($user_login>220 and $user_login<=250) { echo "12";}
?>.0, color: '#b2c831' },
					{ name: 'rest', y: <?php
if ($user_login==0) { echo "0";}
else if ($user_login>0 and $user_login<=22) { echo "99";}
else if ($user_login>22 and $user_login<=40) { echo "98";}
else if ($user_login>40 and $user_login<=60) { echo "97";}
else if ($user_login>60 and $user_login<=80) { echo "96";}
else if ($user_login>80 and $user_login<=100) { echo "95";}
else if ($user_login>100 and $user_login<=120) { echo "94";}
else if ($user_login>120 and $user_login<=140) { echo "93";}
else if ($user_login>140 and $user_login<=160) { echo "92";}
else if ($user_login>160 and $user_login<=180) { echo "91";}
else if ($user_login>180 and $user_login<=200) { echo "90";}
else if ($user_login>200 and $user_login<=220) { echo "89";}
else if ($user_login>220 and $user_login<=250) { echo "88";}
?>.0, color: '#3d3d3d' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
		
	});

/*** second Chart in Dashboard page ***/

	$(document).ready(function() {
		info = new Highcharts.Chart({
			chart: {
				renderTo: 'space',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'SiteInfo',
				innerSize: '65%',
				data: [
					{ name: 'Used', y: <?php
if ($satker_login==0) { echo "0";}
else if ($satker_login>0 and $satker_login<=2) { echo "1";}
else if ($satker_login>2 and $satker_login<=4) { echo "2";}
else if ($satker_login>4 and $satker_login<=6) { echo "3";}
else if ($satker_login>6 and $satker_login<=8) { echo "4";}
else if ($satker_login>8 and $satker_login<=10) { echo "5";}
else if ($satker_login>10 and $satker_login<=12) { echo "6";}
else if ($satker_login>12 and $satker_login<=14) { echo "7";}
else if ($satker_login>14 and $satker_login<=16) { echo "8";}
else if ($satker_login>16 and $satker_login<=18) { echo "9";}
else if ($satker_login>18 and $satker_login<=20) { echo "10";}
else if ($satker_login>20 and $satker_login<=22) { echo "11";}
else if ($satker_login>22 and $satker_login<=24) { echo "12";}
else if ($satker_login>24 and $satker_login<=26) { echo "13";}
else if ($satker_login>26 and $satker_login<=28) { echo "14";}
else if ($satker_login>28 and $satker_login<=30) { echo "15";}
else if ($satker_login>30 and $satker_login<=32) { echo "16";}
else if ($satker_login>32 and $satker_login<=34) { echo "17";}
else if ($satker_login>34 and $satker_login<=36) { echo "18";}
else if ($satker_login>36 and $satker_login<=38) { echo "19";}
else if ($satker_login>38 and $satker_login<=40) { echo "21";}
else if ($satker_login>40 and $satker_login<=42) { echo "22";}
else if ($satker_login>42 and $satker_login<=44) { echo "23";}
else if ($satker_login>44 and $satker_login<=46) { echo "24";}
else if ($satker_login>46 and $satker_login<=48) { echo "25";}
else if ($satker_login>48 and $satker_login<=100) { echo "30";}
?>.0, color: '#FF5800' },
					{ name: 'Rest', y: <?php
if ($satker_login==0) { echo "0";}
else if ($satker_login>0 and $satker_login<=2) { echo "99";}
else if ($satker_login>2 and $satker_login<=4) { echo "98";}
else if ($satker_login>4 and $satker_login<=6) { echo "97";}
else if ($satker_login>6 and $satker_login<=8) { echo "96";}
else if ($satker_login>8 and $satker_login<=10) { echo "95";}
else if ($satker_login>10 and $satker_login<=12) { echo "94";}
else if ($satker_login>12 and $satker_login<=14) { echo "93";}
else if ($satker_login>14 and $satker_login<=16) { echo "92";}
else if ($satker_login>16 and $satker_login<=18) { echo "91";}
else if ($satker_login>18 and $satker_login<=20) { echo "90";}
else if ($satker_login>20 and $satker_login<=22) { echo "89";}
else if ($satker_login>22 and $satker_login<=24) { echo "88";}
else if ($satker_login>24 and $satker_login<=26) { echo "87";}
else if ($satker_login>26 and $satker_login<=28) { echo "86";}
else if ($satker_login>28 and $satker_login<=30) { echo "85";}
else if ($satker_login>30 and $satker_login<=32) { echo "84";}
else if ($satker_login>32 and $satker_login<=34) { echo "83";}
else if ($satker_login>34 and $satker_login<=36) { echo "82";}
else if ($satker_login>36 and $satker_login<=38) { echo "81";}
else if ($satker_login>38 and $satker_login<=40) { echo "80";}
else if ($satker_login>40 and $satker_login<=42) { echo "79";}
else if ($satker_login>42 and $satker_login<=44) { echo "78";}
else if ($satker_login>44 and $satker_login<=46) { echo "77";}
else if ($satker_login>46 and $satker_login<=48) { echo "76";}
else if ($satker_login>48 and $satker_login<=100) { echo "75";}
?>.0, color: '#3d3d3d' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
		
	});
</script>
      		<div class="dash-unit">
		  		<dtitle>User Login &nbsp; / &nbsp; 2211 User </dtitle>
		  		<hr><table><tr><td width='200px'><a><div onClick=ubahbadandia() style="margin-left:25px; cursor:pointer;"><?php echo $user_login; ?> User</div></a></td><td><a><div onClick=ubahbadandia6jam() style="margin-left:25px; cursor:pointer;"></div></a></td></tr></table> 
	        	<div id="load"></div>
	        	<h2><?php
if ($user_login==0) { echo "0";}
else if ($user_login>0 and $user_login<=22) { echo "1";}
else if ($user_login>22 and $user_login<=40) { echo "2";}
else if ($user_login>40 and $user_login<=60) { echo "3";}
else if ($user_login>60 and $user_login<=80) { echo "4";}
else if ($user_login>80 and $user_login<=100) { echo "5";}
else if ($user_login>100 and $user_login<=120) { echo "6";}
else if ($user_login>120 and $user_login<=140) { echo "7";}
else if ($user_login>140 and $user_login<=160) { echo "8";}
else if ($user_login>160 and $user_login<=180) { echo "9";}
else if ($user_login>180 and $user_login<=200) { echo "10";}
else if ($user_login>200 and $user_login<=220) { echo "11";}
else if ($user_login>220 and $user_login<=250) { echo "12";}
?>%</h2>
			</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>Satker Login &nbsp; / &nbsp; 220 Satker</dtitle>
		  		<hr><a><div onClick=ubahbadandia1() style="margin-left:25px; cursor:pointer;"><?php echo $satker_login; ?> Satker</div></a>
	        	<div id="space"></div>
	        	<h2><?php
if ($satker_login==0) { echo "0";}
else if ($satker_login>0 and $satker_login<=2) { echo "1";}
else if ($satker_login>2 and $satker_login<=4) { echo "2";}
else if ($satker_login>4 and $satker_login<=6) { echo "3";}
else if ($satker_login>6 and $satker_login<=8) { echo "4";}
else if ($satker_login>8 and $satker_login<=10) { echo "5";}
else if ($satker_login>10 and $satker_login<=12) { echo "6";}
else if ($satker_login>12 and $satker_login<=14) { echo "7";}
else if ($satker_login>14 and $satker_login<=16) { echo "8";}
else if ($satker_login>16 and $satker_login<=18) { echo "9";}
else if ($satker_login>18 and $satker_login<=20) { echo "10";}
else if ($satker_login>20 and $satker_login<=22) { echo "11";}
else if ($satker_login>22 and $satker_login<=24) { echo "12";}
else if ($satker_login>24 and $satker_login<=26) { echo "13";}
else if ($satker_login>26 and $satker_login<=28) { echo "14";}
else if ($satker_login>28 and $satker_login<=30) { echo "15";}
else if ($satker_login>30 and $satker_login<=32) { echo "16";}
else if ($satker_login>32 and $satker_login<=34) { echo "17";}
else if ($satker_login>34 and $satker_login<=36) { echo "18";}
else if ($satker_login>36 and $satker_login<=38) { echo "19";}
else if ($satker_login>38 and $satker_login<=40) { echo "21";}
else if ($satker_login>40 and $satker_login<=42) { echo "22";}
else if ($satker_login>42 and $satker_login<=44) { echo "23";}
else if ($satker_login>44 and $satker_login<=46) { echo "24";}
else if ($satker_login>46 and $satker_login<=48) { echo "25";}
else if ($satker_login>48 and $satker_login<=100) { echo "30";}
?>%</h2>
			</div>
        </div>
        
        <div class="col-sm-3 col-lg-3">

      		<div class="dash-unit">
      		<dtitle>Login Peran Pengguna</dtitle>
      		<hr>  
<div class="graph_fancy">
	<span class="bar"></span>
	<span class="bar" style="height: <?php
if ($operator==0) { echo "0";}
else if ($operator>0 and $operator<=10) { echo "5";}
else if ($operator>10 and $operator<=20) { echo "10";}
else if ($operator>20 and $operator<=30) { echo "15";}
else if ($operator>30 and $operator<=40) { echo "25";}
else if ($operator>40 and $operator<=50) { echo "30";}
else if ($operator>50 and $operator<=60) { echo "35";}
else if ($operator>60 and $operator<=70) { echo "40";}
else if ($operator>70 and $operator<=80) { echo "45";}
else if ($operator>80 and $operator<=90) { echo "50";}
else if ($operator>90 and $operator<=100) { echo "55";}
else if ($operator>100 and $operator<=110) { echo "60";}
else if ($operator>110 and $operator<=120) { echo "65";}
else if ($operator>120 and $operator<=130) { echo "70";}
else if ($operator>130 and $operator<=140) { echo "75";}
else if ($operator>140 and $operator<=200) { echo "80";}
else if ($operator>200 and $operator<=240) { echo "85";}
else if ($operator>240 and $operator<=260) { echo "90";}
else if ($operator>260 and $operator<=280) { echo "95";}
else if ($operator>280 and $operator<=300) { echo "100";}
?>%;" data-bar-label="Operator" data-bar-value="<?php echo $operator; ?>"></span>

	<span class="bar" style="height: <?php
if ($approver==0) { echo "0";}
else if ($approver>0 and $approver<=10) { echo "5";}
else if ($approver>10 and $approver<=20) { echo "10";}
else if ($approver>20 and $approver<=30) { echo "15";}
else if ($approver>30 and $approver<=40) { echo "25";}
else if ($approver>40 and $approver<=50) { echo "30";}
else if ($approver>50 and $approver<=60) { echo "35";}
else if ($approver>60 and $approver<=70) { echo "40";}
else if ($approver>70 and $approver<=80) { echo "45";}
else if ($approver>80 and $approver<=90) { echo "50";}
else if ($approver>90 and $approver<=100) { echo "55";}
else if ($approver>100 and $approver<=110) { echo "60";}
else if ($approver>110 and $approver<=120) { echo "65";}
else if ($approver>120 and $approver<=130) { echo "70";}
else if ($approver>130 and $approver<=140) { echo "75";}
else if ($approver>140 and $approver<=150) { echo "80";}
else if ($approver>150 and $approver<=160) { echo "85";}
else if ($approver>160 and $approver<=170) { echo "90";}
else if ($approver>170 and $approver<=180) { echo "95";}
else if ($approver>180 and $approver<=200) { echo "100";}
?>%;" data-bar-label="Approver" data-bar-value="<?php echo $approver; ?>"></span>

	<span class="bar" style="height: <?php
if ($validator==0) { echo "0";}
else if ($validator>0 and $validator<=10) { echo "5";}
else if ($validator>10 and $validator<=20) { echo "10";}
else if ($validator>20 and $validator<=30) { echo "15";}
else if ($validator>30 and $validator<=40) { echo "25";}
else if ($validator>40 and $validator<=50) { echo "30";}
else if ($validator>60 and $validator<=70) { echo "35";}
else if ($validator>70 and $validator<=80) { echo "40";}
else if ($validator>80 and $validator<=90) { echo "45";}
else if ($validator>90 and $validator<=100) { echo "50";}
else if ($validator>100 and $validator<=120) { echo "55";}
else if ($validator>120 and $validator<=140) { echo "60";}
else if ($validator>140 and $validator<=160) { echo "65";}
else if ($validator>160 and $validator<=180) { echo "70";}
else if ($validator>180 and $validator<=200) { echo "75";}
else if ($validator>200 and $validator<=220) { echo "80";}
else if ($validator>220 and $validator<=240) { echo "85";}
else if ($validator>240 and $validator<=260) { echo "90";}
else if ($validator>260 and $validator<=280) { echo "95";}
else if ($validator>280 and $validator<=300) { echo "100";}
?>%;" data-bar-label="Validator" data-bar-value="<?php echo $validator; ?>"></span>

	<span class="bar" style="height:<?php
if ($admin==0) { echo "0";}
else if ($admin>0 and $admin<=10) { echo "5";}
else if ($admin>10 and $admin<=20) { echo "10";}
else if ($admin>20 and $admin<=30) { echo "15";}
else if ($admin>30 and $admin<=40) { echo "25";}
else if ($admin>40 and $admin<=50) { echo "30";}
else if ($admin>60 and $admin<=70) { echo "35";}
else if ($admin>70 and $admin<=80) { echo "40";}
else if ($admin>80 and $admin<=90) { echo "45";}
else if ($admin>90 and $admin<=100) { echo "50";}
else if ($admin>100 and $admin<=120) { echo "55";}
else if ($admin>120 and $admin<=140) { echo "60";}
else if ($admin>140 and $admin<=160) { echo "65";}
else if ($admin>160 and $admin<=180) { echo "70";}
else if ($admin>180 and $admin<=200) { echo "75";}
else if ($admin>200 and $admin<=220) { echo "80";}
else if ($admin>220 and $admin<=240) { echo "85";}
else if ($admin>240 and $admin<=260) { echo "90";}
else if ($admin>260 and $admin<=280) { echo "95";}
else if ($admin>280 and $admin<=300) { echo "100";}
?>%;" data-bar-label="Admin" data-bar-value="<?php echo $admin; ?>"></span>

</div>
			</div>
        </div>
      </div><!-- /row -->
      
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit">
	      		<dtitle>Proses SPP</dtitle>
	      		<hr>
	      		<div class="cont">
<br>
<table width="200" align='center' border="0">
  <tr>
    <td width="44" >&nbsp;<bold><?php echo "$spp_baru";?></bold>&nbsp;</td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic1()>  
    | SPP Baru</div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo "$setuju_spp";?></bold>&nbsp;</td>
    <td height='30px' align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    | Setuju SPP</div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo "$adk_spp";?></bold>&nbsp;</td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic3()>  
    | ADK SPP</div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo "$upload_spp";?></bold>&nbsp;</td>
    <td height='30px' width="170" align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic4()>  
    | <oke>Upload Invoice</oke> </div></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandic9() style="cursor:pointer;"><img src="images/up-small.png" alt=""> <oke>Transaksi SPP Hari Ini</oke></div></a></p>
				</div>

			</div>
			
    </div><!-- /span3 -->

	<!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Proses SPM</dtitle>
	      		<hr>
	      		<div class="cont">
<br>
<table width="200" align='center' border="0">
  <tr>
    <td width="44" >&nbsp;<bold><?php echo "$cetak_spm";?></bold>&nbsp;</td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic5()>  
    | Cetak SPM</div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo "$setuju_spm";?></bold>&nbsp;</td>
    <td height='30px' align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic6()>  
    | Setuju SPM</div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo "$adk_spm";?></bold>&nbsp;</td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic7()>  
    | ADK SPM</div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo "$upload_sp2d";?></bold>&nbsp;</td>
    <td height='30px' align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic8()>  
    | <oke>Upload SP2D</oke></div></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandic10() style="cursor:pointer;"><img src="images/up-small.png" alt=""> <oke>Transaksi SPM Hari Ini</oke></div></a></p>
				</div>

			</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Portal SPAN</dtitle>
	      		<hr>
	      		<div class="cont">
<br>
<table width="180" align='center' border="0">
  <tr>
    <td width="44"></td>
    <td width="250" align='left'><a><div onClick=ubahbadandic5()>  
</div></a></td>
  </tr>
  <tr height="15px">
    <td></td>
    <td align='left'><a><div onClick=ubahbadandic6()>  
</div></a></td>
  </tr>
    <td width="44">&nbsp;<bold><?php echo $upload;?></bold>&nbsp;</td>
    <td width="250" align='left' style="cursor:pointer;"><a><div onClick=ubahbadandie1()>  
    | Upload ADK </div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo $kirim_span;?></bold>&nbsp;</td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandie2()>  
    | <oke>Kirim SPAN</oke></div></a></td>
  </tr>
</table>

<br><br><br><br>
					<p><a><div onClick=ubahbadandie5() style="cursor:pointer;"><img src="images/up-small.png" alt=""> <oke>Portal SPAN Hari Ini</oke></div></a></p>
				</div>

			</div>
        </div>
    
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Portal Konverter</dtitle>
	      		<hr>
	      		<div class="cont">
<br>
<table width="180" align='center' border="0">
  <tr>
    <td width="44"></td>
    <td width="250" align='left'><a><div onClick=ubahbadandic5()>  
</div></a></td>
  </tr>
  <tr height="15px">
    <td></td>
    <td align='left'><a><div onClick=ubahbadandic6()>  
</div></a></td>
  </tr>
  <tr>
    <td>&nbsp;<bold><?php echo $not_downloaded_yet;?></bold>&nbsp;</td>
    <td align='left'><a><div onClick=ubahbadandif2()>  
    | Menunggu</div></a></td>
  </tr>
  <tr height="15px">
    <td>&nbsp;<bold><?php echo $downloaded;?></bold>&nbsp;</td>
    <td align='left'><a><div onClick=ubahbadandif1() style="cursor:pointer;">  
    | <oke>Download</oke></div></a></td>
  </tr>
</table>

<br><br><br><br>
					<p><a><div onClick=ubahbadandif3() style="cursor:pointer;"><img src="images/up-small.png" alt=""> <oke>Transaksi Download ADK</oke></div></a></p>
				</div>

			</div>
        </div>
      </div>

		  
<link href="css/table.css" rel="stylesheet">	  
      <div class="row">
      	<div class="col-sm-3 col-lg-3">
<div id="badandivnya"></div>  
      	</div>

      	<div class="col-sm-3 col-lg-3">

      	</div>

      	<div class="col-sm-3 col-lg-3">

      	</div>

      </div><!-- /row -->
      
     
      
      
	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png" alt=""></p>
      			<p>PSIE - SITP - Copyright 2016</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
          
</body></html>
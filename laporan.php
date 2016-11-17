<!doctype html>
<meta http-equiv="Refresh" content="300; URL=?p=d">
<?php
include "count_login.php";
include "count_peran.php";
include "count_sppspm.php";
include "count_portalspan.php";
include "count_converter.php";
include "count_spptunda.php";
include "counter.php";
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
<script language="javascript">
 function update_ajax(objID,urlis,paramsis,methodis,whereis){  
            var ajaxObj = new XMLHttp();
            var url = urlis;
            var method = methodis;
            var params = paramsis;
            makeRequest(ajaxObj, method, url, params, objID,whereis);
            ajaxObj = null;
};
function ubahbadandia(){
	update_ajax("badandivnya","monuser.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandia1(){
	update_ajax("badandivnya","monsatker.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandib(){
	update_ajax("badandivnya","monspptunda.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic(){
	update_ajax("badandivnya","mon.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic1(){
	update_ajax("badandivnya","monsppbaru.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic2(){
	update_ajax("badandivnya","monsetujuspp.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic3(){
	update_ajax("badandivnya","monadkspp.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic4(){
	update_ajax("badandivnya","monuploadinvoice.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic5(){
	update_ajax("badandivnya","moncetakspm.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic6(){
	update_ajax("badandivnya","monsetujuspm.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic7(){
	update_ajax("badandivnya","monadkspm.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic8(){
	update_ajax("badandivnya","monuploadsp2d.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic9(){
	update_ajax("badandivnya","montransaksispp.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandic10(){
	update_ajax("badandivnya","montransaksispm.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandid(){
	update_ajax("badandivnya","bendahara.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandie1(){
	update_ajax("badandivnya","monuploadadk.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandie2(){
	update_ajax("badandivnya","monkirimspan.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandie3(){
	update_ajax("badandivnya","monselesai.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandie4(){
	update_ajax("badandivnya","monditolak.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandie5(){
	update_ajax("badandivnya","monportalhariini.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandif1(){
	update_ajax("badandivnya","mondownload.php","tes=<?php echo "$dfoto"?>","post","");
};
function ubahbadandif2(){
	update_ajax("badandivnya","monmenunggu.php","tes=<?php echo "$dfoto"?>","post","");
};
</script>
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
		<table>
		  <tr><td width="68">
          &nbsp;&nbsp;<img src="images/logo_sakti.png" alt=""> </td> <td>Dasboard Aplikasi SAKTI</td>
		  </table>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
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
				        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>
					        
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
					{ name: 'rest', y: 55.0, color: '#3d3d3d' }
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
?>.0, color: '#F2635F' },
					{ name: 'Rest', y: 35.0, color: '#3d3d3d' }
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
		  		<hr><a><div onClick=ubahbadandia() style="margin-left:25px; cursor:pointer;"><?php echo $user_login; ?> User</div></a>
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
else if ($operator>60 and $operator<=70) { echo "35";}
else if ($operator>70 and $operator<=80) { echo "40";}
else if ($operator>80 and $operator<=90) { echo "45";}
else if ($operator>90 and $operator<=100) { echo "50";}
else if ($operator>100 and $operator<=120) { echo "55";}
else if ($operator>120 and $operator<=140) { echo "60";}
else if ($operator>140 and $operator<=160) { echo "65";}
else if ($operator>160 and $operator<=180) { echo "70";}
else if ($operator>180 and $operator<=200) { echo "75";}
else if ($operator>200 and $operator<=220) { echo "80";}
else if ($operator>220 and $operator<=240) { echo "85";}
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
else if ($approver>60 and $approver<=70) { echo "35";}
else if ($approver>70 and $approver<=80) { echo "40";}
else if ($approver>80 and $approver<=90) { echo "45";}
else if ($approver>90 and $approver<=100) { echo "50";}
else if ($approver>100 and $approver<=120) { echo "55";}
else if ($approver>120 and $approver<=140) { echo "60";}
else if ($approver>140 and $approver<=160) { echo "65";}
else if ($approver>160 and $approver<=180) { echo "70";}
else if ($approver>180 and $approver<=200) { echo "75";}
else if ($approver>200 and $approver<=220) { echo "80";}
else if ($approver>220 and $approver<=240) { echo "85";}
else if ($approver>240 and $approver<=260) { echo "90";}
else if ($approver>260 and $approver<=280) { echo "95";}
else if ($approver>280 and $approver<=300) { echo "100";}
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
<table width="156" align='center' border="0">
  <tr>
    <td width="44" ><bold><?php echo "$spp_baru";?></bold></td>
    <td width="250" align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic1()>  
    | SPP Baru</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo "$setuju_spp";?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    | Setuju SPP</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo "$adk_spp";?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic3()>  
    | ADK SPP</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo "$upload_spp";?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic4()>  
    | <oke>Upload Invoice</oke> </div></a></td>
  </tr>
</table>
<br><br>
					<p><a><div onClick=ubahbadandic9() style="cursor:pointer;"><img src="images/up-small.png" alt=""> Transaksi SPP Hari Ini</div></a></p>
				</div>

			</div>
			
    </div><!-- /span3 -->

	<!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Proses SPM</dtitle>
	      		<hr>
	      		<div class="cont">

<table width="156" align='center' border="0">
  <tr>
    <td width="44"><bold><?php echo "$cetak_spm";?></bold></td>
    <td width="250" align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic5()>  
    | Cetak SPM</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo "$setuju_spm";?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic6()>  
    | Setuju SPM</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo "$adk_spm";?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic7()>  
    | ADK SPM</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo "$upload_sp2d";?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic8()>  
    | <oke>Upload SP2D</oke></div></a></td>
  </tr>
</table>
<br><br>
					<p><a><div onClick=ubahbadandic10() style="cursor:pointer;"><img src="images/up-small.png" alt=""> Transaksi SPM Hari Ini</div></a></p>
				</div>

			</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Portal SPAN</dtitle>
	      		<hr>
	      		<div class="cont">

<table width="156" align='center' border="0">
  <tr>
    <td width="44"><bold><?php echo $upload;?></bold></td>
    <td width="250" align='left' style="cursor:pointer;"><a><div onClick=ubahbadandie1()>  
    | Upload ADK </div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo $kirim_span;?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandie2()>  
    | Kirim SPAN</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo $selesai;?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandie3()>  
    | Selesai</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo $ditolak;?></bold></td>
    <td align='left' style="cursor:pointer;"><a><div onClick=ubahbadandie4()>  
    | <yet>Ditolak</yet></div></a></td>
  </tr>
</table>
<br><br>
					<p><a><div onClick=ubahbadandie5() style="cursor:pointer;"><img src="images/up-small.png" alt=""> Portal SPAN Hari Ini</div></a></p>
				</div>

			</div>
        </div>
    
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Portal Konverter</dtitle>
	      		<hr>
	      		<div class="cont">
 <p>&nbsp;</p>
<table width="156" align='center' border="0">
  <tr>
    <td width="44"></td>
    <td width="250" align='left'><a><div onClick=ubahbadandic5()>  
</div></a></td>
  </tr>
  <tr height="12px">
    <td></td>
    <td align='left'><a><div onClick=ubahbadandic6()>  
</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo $downloaded;?></bold></td>
    <td align='left'><a><div onClick=ubahbadandif1() style="cursor:pointer;">  
    | Download</div></a></td>
  </tr>
  <tr>
    <td><bold><?php echo $not_downloaded_yet;?></bold></td>
    <td align='left'><a><div onClick=ubahbadandif2()>  
    | <lum>Menunggu</lum></div></a></td>
  </tr>
</table>
 <p>&nbsp;</p>
<br>
					<p><a><div onClick=ubahbadandic10() style="cursor:pointer;"><img src="images/up-small.png" alt=""> Transaksi Download ADK</div></a></p>
				</div>

			</div>
        </div>
      </div>
 
	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit">
	      		<dtitle>Modul Bendahara</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:60px; margin-top:45px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=bendahara.php?ids=5 title=detail>Kas Tunai dan Bank</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Kas Uang Persediaan</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Kas LS Bendahara</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic3()>  
    Kas Lainnya</div></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandic9() style="cursor:pointer;"><img src="images/up-small.png" alt=""> Transaksi Modul Bendahara</div></a></p>
				</div>

			</div>
			
    </div><!-- /span3 -->

	<!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul Persediaan</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:60px; margin-top:45px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic1()>  
    Pendetilan Kuitansi</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Pendetilan Kontraktual</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Pendetilan Non Kontraktual</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic3()>  
    Tutup Periode</div></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandic10() style="cursor:pointer;"><img src="images/up-small.png" alt=""> Transaksi Modul Persediaan</div></a></p>
				</div>

			</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul Asset</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:60px; margin-top:45px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic1()>  
    Pendetilan Kuitansi</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Pendetilan Kontraktual</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Pendetilan Non Kontraktual</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic3()>  
    Tutup Periode</div></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandie5() style="cursor:pointer; margin-left:-40px;"><img src="images/up-small.png" alt=""> Transaksi Modul Asset</div></a></p>
				</div>

			</div>
        </div>
    
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul GLP</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:60px; margin-top:45px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=fa title=detail>Laporan Fund Available</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Penjurnalan</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic2()>  
    Tutup Periode</div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div onClick=ubahbadandic3()>  
    Posting</div></a></td>
  </tr>
</table>
<br>
<p><a><div onClick=ubahbadandic10() style="cursor:pointer; margin-left:-40px;"><img src="images/up-small.png" alt=""> Transaksi Modul GLP</div></a></p>
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
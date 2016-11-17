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

	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="js/noty/themes/default.js"></script>
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
          &nbsp;&nbsp;<img src="images/logo_sakti.png" alt=""> </td> <td width='1200'><a class="navbar-brand" href="index.html"> Monitoring Aplikasi SAKTI</a></td>
          <td width='18%' style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color: #ffffff;text-align:right;">          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="font-size:16px">
              <li><a href="?p=d"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li class="active"><a href="?p=r"><i class="icon-th icon-white"></i> Report</a></li>
              <li><a href="?p=lg"><i class="icon-lock icon-white"></i> Logout</a></li>
            </ul>
          </div></td>
		  </tr>
		  </table>
        </div> 

        </div>
    </div>

    <div class="container">
 	
	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit">
	      		<dtitle>Modul Anggaran</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:42px; margin-top:35px" border="0">
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lpjb title=detail>Pagu Per Jenis Belanja</a></td>
  </tr>
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=lap_pagu_minus.php title=detail>Sisa Pagu Minus</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=lap_revdipa.php title=detail></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a ></a></td>
  </tr>  
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a ></a></td>
  </tr>
</table>
<br>
					<p><a><div style="cursor:pointer; margin-left:-40px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Modul Anggaran</oke></div></a></p>
				</div>
				</div>
			
    </div><!-- /span3 -->

	<!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul Komitmen</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:42px; margin-top:35px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lkon title=detail>Pelaksanaan Kontrak (timeline)</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div>  
   </div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div >  
    </div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a ></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandie5() style="cursor:pointer; margin-left:-40px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Modul Komitmen</oke></div></a></p>
				</div>
				</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul Pembayaran</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:42px; margin-top:35px" border="0">
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lsss title=detail>Monitoring SPP/SPM/SP2D</a></td>
  </tr>
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=lap_jatuh_tempo.php title=detail>Jatuh Tempo Tidak Wajar</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div >  
    </div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>
    <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandie5() style="cursor:pointer; margin-left:-20px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Modul Pembayaran</oke></div></a></p>
				</div>
			</div>
        </div>
    
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
		      		<div class="dash-unit">
	      		<dtitle>Modul Bendahara</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="300" align='center' style="margin-left:42px; margin-top:35px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=lap_bend.php title=detail>Kas Tunai dan Bank</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=lap_bku.php title=detail>Buku Kas Umum</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div>  
    </div></a></td>
  </tr>
    <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div >  
    </div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div>  
   </div></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandic9() style="cursor:pointer; margin-left:-40px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Modul Bendahara</oke></div></a></p>
				</div>

			</div>

        </div>
      </div>

	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
	<!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul Persediaan</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="300" align='center' style="margin-left:42px; margin-top:-10px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lpbd title=detail>Belum Pendetilan - Kwitansi</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lpbdk title=detail>Belum Pendetilan - Kontraktual </a></td>
  </tr>
  <tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lpb title=detail>Tutup Periode</a></td>
  </tr>
</table>
					<p><a><div onClick=ubahbadandic10() style="cursor:pointer; margin-left:-40px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Modul Persediaan</oke></div></a></p>
				</div>

			</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul Aset</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="300" align='center' style="margin-left:42px; margin-top:-10px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=labdaset title=detail>Belum Pendetilan - Kwitansi</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=lap_tidak_wajar.php title=detail>Transaksi Tidak Wajar</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lab title=detail></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lab title=detail>Tutup Periode</a></td>
  </tr>
</table>

					<p><a><div onClick=ubahbadandie5() style="cursor:pointer; margin-left:-70px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Modul Asset</oke></div></a></p>
				</div>

			</div>
        </div>
    
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Modul GLP</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="300" align='center' style="margin-left:42px; margin-top:-10px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href=?p=lf title=detail>Laporan FA </a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href="lap_kons_tutup_periode.php" title=detail>Monitoring Penggunaan Sakti</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href="lap_periode_akhir_glp.php" title=detail></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href="lap_glp_bt.php" title=detail>Tutup Periode</a></td>
  </tr>
</table>
<p><a><div onClick=ubahbadandic10() style="cursor:pointer; margin-left:-80px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Modul GLP</oke></div></a></p>
				</div>

			</div>
        </div>
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit">
	      		<dtitle>Portal SPAN & SMS</dtitle>
	      		<hr>
	      		<div class="cont">
<table width="250" align='center' style="margin-left:42px; margin-top:35px" border="0">
  <tr>
    <td width="250" height="30px" align='left' style="cursor:pointer;"><a rel="shadowbox" href="lap_kirimspan.php" title=detail>Kirim ADK ke Portal SPAN</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a rel="shadowbox" href="lap_belum_kirimspan.php" title=detail>Belum Kirim Ke Portal SPAN</a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a><div >  
    </div></a></td>
  </tr>
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>  
  <tr>
    <td height="30px"  align='left' style="cursor:pointer;"><a></a></td>
  </tr>
</table>
<br>
					<p><a><div onClick=ubahbadandie5() style="cursor:pointer; margin-left:-10px;"><img src="images/up-small.png" alt=""> <oke>Transaksi Portal SPAN dan SMS</oke></div></a></p>
				</div>
				</div>		
    </div><!-- /span3 -->			
		
      </div>
	  
<link href="css/table.css" rel="stylesheet">	  
     
      
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
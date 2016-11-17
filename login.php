<?php
session_start();
ob_start('ob_gzhandler');

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "sakti";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

include 'antiinject.php';
        if (isset($_POST['submit'])) {
            $user1 = antiinjection($_POST['username']);
			$username = strtolower($user1);
            $password = antiinjection($_POST['password']);
            //query untuk mendapatkan record username
            $quser = mysql_query("select * from admin where username='$username'");
            $duser = mysql_fetch_array($quser);
            $a = mysql_num_rows($quser);
            if ($a > 0) {
                $pengacak = "*&^%^(gbHoiuy987HKjhhKJbh684567JH";
                $acak = md5($pengacak . md5($password) . $pengacak);
                if ($acak == $duser['password']) {
                    $_SESSION['username'] = $duser['username'];
                    $_SESSION['login'] = 'katro';
                    header('Location: ?p=d');
                    exit();
                } else {
                    echo '<script type="text/javascript">window.location="?p="</script>';
                }
            }
        }
        ?>  
		
		
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Monitoring SAKTI</title><link href='images/logo_sakti.png' rel='Shortcut Icon'/>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
</head>

<body class="loginbody">

<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">
	<h1 class="logintitle"><span class="iconfa-lock"><div style="margin-top: -30px; width:40px"><img src="images/logo_sakti.png" alt="LOGO"></div></span> Sign In <span class="subtitle">Dashboard Monitoring SAKTI</span></h1>
        <div class="loginwrapperinner">
            <form id="loginform" action="?p=" method="post">
                <p class="animate4 bounceIn"><input type="text" id="username" name="username" placeholder="Username" /></p>
                <p class="animate5 bounceIn"><input type="password" id="password" name="password" placeholder="Password" /></p>
                <p><input class="btn btn-default" type="submit" name="submit" value="SUBMIT"/></p>
                <p class="animate7 fadeIn"><a href=""><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
            </form>
        </div><!--loginwrapperinner-->
    </div>
</div><!--loginwrapper-->

<script type="text/javascript">
jQuery.noConflict();

jQuery(document).ready(function(){
	
	var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
	jQuery('.loginwrap').bind(anievent,function(){
		jQuery(this).removeClass('animate2 bounceInDown');
	});
	
	jQuery('#username,#password').focus(function(){
		if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
	});
	
	jQuery('#loginform button').click(function(){
		if(!jQuery.browser.msie) {
			if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
				if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
				if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
				jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
					jQuery(this).removeClass('animate0 wobble');
				});
			} else {
				jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
					jQuery('#loginform').submit();
				});
			}
			return false;
		}
	});
});
</script>
</body>
</html>

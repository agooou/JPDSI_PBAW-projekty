<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Inna strona - wróć do nas! 📱</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/noscript.css" /></noscript>
                <style>
                  body{
                      //background-color: #000;
                      background-image: url("<?php print(_APP_ROOT); ?>/images/male_kotki1.jpg");// repeating-linear-gradient(red, yellow 10%, green 20%);//url("../../images/male_kotki.jpg");
                      background-size: cover;
                      background-position: top;
                     //background-color: red;
                  }
                      input[type=text]{margin-top: -10px;
                    width: 15em}
                </style>
</head>
<body>
       
 <?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
    <br/><br/><br/><br/>
    
<section>
                                
                                
<div style="width:100%; margin: 2em em; text-align: center;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
    
<div style="width:100%; margin: 2em 0em; text-align: center;">
	<a href="<?php print(_APP_ROOT); ?>/app/krat_.php" style="background-color: #008080; color: #ffffff!important" class="button big wide smooth-scroll-middle">Powrót do kalkulatora</a><br/>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" style="background-color: #008080; color: #ffffff!important" class="button big wide smooth-scroll-middle">Wyloguj</a>
</div>

                                
    			<script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/browser.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/util.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/main.js"></script>
</section>
    
    	

    <br/><br/><br/><br/>
    <!--<br/><br/><br/><br/>
    <br/><br/><br/><br/>
    <br/><br/><br/><br/> -->
    
        <?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
    
</body>
</html>
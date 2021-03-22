<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Strona główna - logowanie 📱</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/noscript.css" /></noscript>
</head>
    
<body class="is-preload">
    
    <?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
    
<section id="one" class="wrapper style2 special">
    <div style="width:100%; margin: -5em 0em;">

        <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Witaj na stronie głównej kalkulatora.</h1>
							<p class="major">
                                                            <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
        <br/>
	<fieldset>
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
                <br/>
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
        <br/>
	<input type="submit" value="Zaloguj" style="background-color: #008080; color: #ffffff!important" class="pure-button pure-button-primary"/>
        
        
</form>	
                                                        
          <?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 70px; border-radius: 2em; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
							<!--<ul class="actions stacked">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Get Started</a></li>
							</ul> -->
						</div>
						<div class="image" style="width: 50%; float: right;">
							<img src="<?php print(_APP_ROOT); ?>/images/male_kotki.jpg" alt="małe kotki.jpg" />
						</div>
					</section>
        

    


</div>

    			<script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/browser.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/util.js"></script>
			<script src="<?php print(_APP_ROOT); ?>/assets/js/main.js"></script>
</section>
    
    <?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
</body>
</html>
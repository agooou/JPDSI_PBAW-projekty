<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator rat</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
    
    <div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" style="background-color: #00a0a0; color: #ffffff" class="pure-button">Kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" style="background-color: #00a0a0; color: #ffffff" class="pure-button pure-button-active">Wyloguj</a>
    </div>
    <div style="width:90%; margin: 2em auto;">

        
<form action="<?php print(_APP_ROOT); ?>/app/krat_.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator rat</legend>
        <fieldset> 
	<label for="id_x">Kwota zaciągniętego kredytu: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset ($x)) print($x); ?>" /><br />
	<label for="id_y">Liczba lat: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset ($x)) print($y); ?>" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php if (isset ($x)) print($z); ?>" /><br />
        <input type="submit" style="background-color: #008080" value="Oblicz ratę" class="pure-button pure-button-primary" /></fieldset>
</form>	
    
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.2em; background-color: #2e8b57; color: #ffffff; letter-spacing: 0.075em;  line-height: 1.4em; line; float: left; clear: left;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.2em; background-color: #2e8b57; color: #ffffff; float: left; clear: left;">
    <?php echo 'Wynik: '.$result; ?>
</div>
        </div>
<?php } ?>

</body>
</html>
<?php
require_once dirname(__FILE__).'/../config.php';

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x,&$y,&$z){
        $x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
        $z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

function validate(&$x,&$y,&$z,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y) && isset($z))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}
        
        
        
//if ( ! (isset($x) && isset($y) && isset($z))) {
//	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
//}

if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ($z == "") {
	$messages [] = 'Nie podano oprocentowania';
}
if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
        if (count ( $messages ) != 0) return false;
	else return true;
}
}


function process(&$x,&$y,&$z,&$messages,&$result){
	//global $role;
	
	//wykonanie operacji
	if (empty ( $messages )) { // gdy brak błędów

	$x = floatval($x);
	$y = floatval($y);
	$z = floatval($z);
	
	$result = ($x / ($y*12)) + (($x / ($y*12))*($z*0.01));
            }
}


//definicja zmiennych kontrolera
$x = null;
$y = null;
$z = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($x,$y,$z);
if ( validate($x,$y,$z,$messages) ) { // gdy brak błędów
	process($x,$y,$z,$messages,$result);
}

include 'krat_view_.php';
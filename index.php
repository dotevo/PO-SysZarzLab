<?php
//Rozpocz�cie sesji
session_start(); 
//Raportowanie b��d�w
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR );

//Do��czenie pliku z klas� Router
include('router.php');

//Pobieranie kontrolera odpowiedzialnego za obecn� akcj�
$controller=Router::getController();

include('var/komunikaty.php');

//Je�li kontroler ustawiony wywo�aj funkcj� g��wn�
if(isset($controller))
	$controller->doAction();
	
	
//W przeciwnym razie b��d
else
	die(INDEX_CONTR_ERROR);
?>

<?php
//Rozpoczêcie sesji
session_start(); 
//Raportowanie b³êdów
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR );

//Do³¹czenie pliku z klas¹ Router
include('router.php');

//Pobieranie kontrolera odpowiedzialnego za obecn¹ akcjê
$controller=Router::getController();

include('var/komunikaty.php');

//Jeœli kontroler ustawiony wywo³aj funkcjê g³ówn¹
if(isset($controller))
	$controller->doAction();
	
	
//W przeciwnym razie b³¹d
else
	die(INDEX_CONTR_ERROR);
?>

<?php
session_start(); 

error_reporting(E_ERROR | E_WARNING | E_PARSE);
require('router.php');

$controller=Router::getController();
if(isset($controller))
	$controller->doAction();
else
	die("Kontroler error");
?>

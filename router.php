<?php
class Router{
	public static function getController(){
		switch($_GET['controller']){
			default:
				require('application/controllers/logowanie.php');
				return new LogowanieController();			
		}		
	}
}

?>
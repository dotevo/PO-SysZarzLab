<?php
class Router{
	public static function getController(){
		switch($_GET['controller']){
			case 'rezerwacjelista':
				require('application/controllers/rezerwacjelista.php');
				return new RezerwacjeListaController();			
			break;
			case 'salelista':
				require('application/controllers/salelista.php');
				return new SaleListaController();			
			break;
			case 'saleszukaj':
				require('application/controllers/saleszukaj.php');
				return new SaleSzukajController();			
			break;
			default:
				require('application/controllers/logowanie.php');
				return new LogowanieController();			
		}		
	}
}

?>
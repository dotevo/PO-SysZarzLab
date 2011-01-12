<?php
class Router{
	public static function getController(){

		//instalator
		if(!file_exists('config.php')){
			require('application/controllers/instalator.php');
			return new InstalatorController();
		}		
		if(!isset($_SESSION['uzytkownikID'])||$_SESSION['uzytkownikID']==-1){
			require('application/controllers/logowanie.php');
			return new LogowanieController();			
		}

		switch($_GET['controller']){
			case 'logout':				
				$_SESSION['uzytkownikID']=-1;
				require('application/controllers/logowanie.php');
				return new LogowanieController();			
			break;
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
			case 'salainfo':
				require('application/controllers/salainfo.php');
				return new SalaInfoController();			
			break;
			case 'rezerwacjesali':
				require('application/controllers/rezerwacjesali.php');
				return new RezerwacjeSaliController();			
			break;
			case 'odwolajrezerwacje':
				require('application/controllers/odwolajrezerwacje.php');
				return new OdwolajRezerwacjeController();			
			break;
			case 'wybierzsale':
				require('application/controllers/wybierzsale.php');
				return new WybierzSaleController();			
			break;
			default:
				require('application/controllers/logowanie.php');
				return new LogowanieController();			
		}		
	}
}

?>
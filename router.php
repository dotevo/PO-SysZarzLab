<?php
class Router{
	public static function getController(){
		//Je�li nie ma pliku config.php zwr�� kontroler instalatora
		if(!file_exists('config.php')){
			require('application/controllers/instalator.php');
			return new InstalatorController();
		}		
		
		//Je�li u�ytkownik nie jest zalogowany zwr�� kontroler logowania
		if(!isset($_SESSION['uzytkownikID'])||$_SESSION['uzytkownikID']==-1){
			require('application/controllers/logowanie.php');
			return new LogowanieController();			
		}

		//Selekcja kontroler�w
		switch($_GET['controller']){
			case 'logout':		
				//Wylogowywanie
				$_SESSION['uzytkownikID']=-1;
				require('application/controllers/logowanie.php');
				return new LogowanieController();			
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
			//Je�li kontroler inny ni� z listy poka� ekran g��wny (lista rezerwacji u�ytkownika)
			default:			
				require('application/controllers/rezerwacjelista.php');
				return new RezerwacjeListaController();			
		}		
	}
}

?>
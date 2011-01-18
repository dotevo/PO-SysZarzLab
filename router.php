<?php
class Router{
	public static function getController(){
		//Jeœli nie ma pliku config.php zwróæ kontroler instalatora
		if(!file_exists('config.php')){
			require('application/controllers/instalator.php');
			return new InstalatorController();
		}		
		
		//Jeœli u¿ytkownik nie jest zalogowany zwróæ kontroler logowania
		if(!isset($_SESSION['uzytkownikID'])||$_SESSION['uzytkownikID']==-1){
			require('application/controllers/logowanie.php');
			return new LogowanieController();			
		}

		//Selekcja kontrolerów
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
			//Jeœli kontroler inny ni¿ z listy poka¿ ekran g³ówny (lista rezerwacji u¿ytkownika)
			default:			
				require('application/controllers/rezerwacjelista.php');
				return new RezerwacjeListaController();			
		}		
	}
}

?>
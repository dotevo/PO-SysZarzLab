<?php
class RezerwacjeListaController{
	public function doAction(){
		require('application/views/rezerwacjelista.php');
		require('application/models/rezerwacje.php');
		$view=new RezerwacjeListaView();
		$model=new RezerwacjeModel();
		if(isset($_GET["godzina"])){
			$model->dodajRezerwacje($_SESSION['uzytkownikID'],$_GET["sala"],$_GET["godzina"],$_GET["data"]);
		}
		$result=$model->listaUzytkownika($_SESSION['uzytkownikID']);		
		

		$view->generujListe($result,null);		
	}	
}
?>
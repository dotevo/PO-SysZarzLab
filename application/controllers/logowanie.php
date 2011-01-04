<?php
class LogowanieController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju¿ u¿ytkownik nie jest zalogowany (sesje)
		require('application/views/logowanie.php');
		$view=new LogowanieView();
		if(isset($_POST['login'])){
			//Tutaj sprawdzanie czy has³o jest poprawne (komunikacja z modelem)
			header("Location: index.php?controller=rezerwacjelista");
		}else{
			$view->generujFormularzLogowania();
		}
	}	
}
?>
<?php
class LogowanieController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju� u�ytkownik nie jest zalogowany (sesje)
		require('application/views/logowanie.php');
		$view=new LogowanieView();
		if(isset($_POST['login'])){
			require('application/models/logowanie.php');
			$model=new LogowanieModel();
			$result=$model->loguj($_POST['login'],$_POST['pass']);
			if($result!=-1){
				$_SESSION['uzytkownikID'] = $result;
				header("Location: index.php?controller=rezerwacjelista");
			}
			else{
				$view->generujFormularzLogowania();
			}
		}else{
			$view->generujFormularzLogowania();
		}
	}	
}
?>
<?php
class LogowanieController{
	public function doAction(){
		include('application/views/logowanie.php');
		//Utwórz obiekt odpowiedzialny za widok
		$view=new LogowanieView();
		
		//Jeśli formularz był wysłany
		if(isset($_POST['login'])){
			include('application/models/logowanie.php');
			$model=new LogowanieModel();
			
			//Sprawdzanie poprawności loginu i hasła
			$result=$model->loguj($_POST['login'],$_POST['pass']);
			if($result!=-1){
				//Poprawne logowanie
				$_SESSION['uzytkownikID'] = $result;
				header("Location: index.php?controller=rezerwacjelista");
			}
			else{
				//Błędne logowanie
				$view->generujFormularzLogowania(LOGIN_ERROR);
			}
		}else{
			$view->generujFormularzLogowania("");
		}
	}	
}
?>
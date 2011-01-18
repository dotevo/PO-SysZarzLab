<?php
class SalaInfoController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju� u�ytkownik nie jest zalogowany (sesje)
		include_once('application/views/salainfo.php');
		include_once('application/models/sale.php');
		
		$view=new SalaInfoView();
		$model=new SaleModel();
		
		if(isset($_POST['sala'])&&isset($_POST['budynek'])||isset($_GET['id'])){
			$sala=array();
			
			//je�li po ID			
			
			if(isset($_GET['id'])){
			$sala=$model->informacjeSaliID($_GET['id']);
			}
			//Z POST budynek i sala
			else{
			$sala=$model->informacjeSali($_POST['budynek'],$_POST['sala']);
			}
			//Je�li sala znaleziona
			if(count($sala)>0){
				$sala=$sala[0];
				
				//Pobieranie konfiguracji
				$konfiguracje=$model->konfiguracje($sala[0]);
				$aktywna_konfiguracjaID=-1;
				if(isset($_POST['konfiguracja'])){
					$aktywna_konfiguracjaID=$_POST['konfiguracja'];
				}else{
					//Wartość domyślna
					if(count($konfiguracje)>0){
						$aktywna_konfiguracjaID=0;
					}
				}
				
				//Pobieranie informacji o konfiguracji
				$aktywna_konfiguracja=array();
				if($aktywna_konfiguracjaID>0){
					$aktywna_konfiguracja=$model->konfiguracja($sala[0],$aktywna_konfiguracjaID);
					$aktywna_konfiguracja=$aktywna_konfiguracja[0];
					$aktywna_konfiguracja['id']=$aktywna_konfiguracjaID;
				}else if($aktywna_konfiguracjaID==0){
					$aktywna_konfiguracja=$model->konfiguracja($sala[0],$konfiguracje[0]['id']);
					$aktywna_konfiguracja=$aktywna_konfiguracja[0];
					$aktywna_konfiguracja['id']=$aktywna_konfiguracjaID;
				}
				
				
				//Pobieranie profili
				$profile=$model->profile($sala[0]);
				//Jeżeli profil wybrany
				$aktywny_profilID=-1;
				if(isset($_POST['profil'])){
					$aktywny_profilID=$_POST['profil'];
				}else{
					//Wartość domyślna
					if(count($profile)>0){
						$aktywny_profilID=0;
					}
				}
				
				//Pobieranie informacji o profilach
				$aktywny_profil=array();
				if($aktywny_profilID>0){
					$aktywny_profil=$model->profil($sala[0],$aktywny_profilID);
					$aktywny_profil['id']=$aktywny_profilID;					
				}else if($aktywny_profilID==0){
					$aktywny_profil=$model->profil($sala[0],$profile[0]['id']);
				}				
				
				
				
				//Pobieranie terminarza				
				include('application/models/rezerwacje.php');				
				$model2=new RezerwacjeModel();
				$terminy=$model2->listaSali($sala['id'],$data_od,$data_do);
				
				$view->generuj($sala,$konfiguracje,$profile,$terminy,$aktywna_konfiguracja,$aktywny_profil);
			}else{
				//Komunikat błędna sala
				echo "syf1";
			
			}
		}else{
			echo "syf2";
			//nie wybrano sali lub budynku
			//todo przekierowanie
		}
	}	
}
?>
<?php
class InstalatorController{
	public function doAction(){		
		require('application/views/instalator.php');
		require('application/models/instalator.php');
		$view=new InstalatorView();
		
		//sprawdz czy zosta³ wys³any post
		if(!isset($_POST['host'])){
			$view->generujFormularz(array());		
		}
		else{
			$host=$_POST['host'];
			$user=$_POST['login'];
			$pass=$_POST['pass'];
			$db=$_POST['db'];
			$model=new InstalatorModel($host,$user,$pass,$db);
			
			$returnV=array();
			$returnV=$model->install();
			if(!isset($returnV["MySQL_ERROR"])){
				$view->generujEnd();
			}else{
				$view->generujFormularz($returnV);	
			}
		}				
	}	
}
?>
<?php
class WybierzSaleController{
	public function doAction(){
		//Tutaj sprawdzanie czy już użtkownik nie jest zalogowany (sesje)
		require('application/views/wybierzsale.php');
		require('application/models/sale.php');
		$view=new WybierzSaleView();
		$model=new SaleModel();
		$budynki=$model->listaBudynkow();
		
		
		//Tutaj model pobierający listę
		$view->generujWybor($budynki);		
	}	
}
?>
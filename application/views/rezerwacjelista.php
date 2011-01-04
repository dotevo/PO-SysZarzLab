<?php
require('template.php');

class RezerwacjeListaView{
	public function generujListe(){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
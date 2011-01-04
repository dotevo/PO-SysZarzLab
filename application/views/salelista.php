<?php
require('template.php');

class SaleListaView{
	public function generuj(){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <a href="index.php?controller=saleszukaj">Wyszukiwarka</a>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
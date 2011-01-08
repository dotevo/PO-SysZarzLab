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
				    
					
                    <div class="title">
						<a href="index.php?controller=saleszukaj">Szukaj</a>
						<br/><br/>
                        Lista znalezionych sal
                    </div>
                    <form id="form" action="" method="post">
                        <table class="tabborder" cellspacing="1">
                            <tr class="tabheader">
                                <td style="width: 100px">Budynek</td>
                                <td style="width: 100px">Sala</td>
                                <td style="width: 130px">Liczba stanowisk</td>
                                <td style="width: 170px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="index.php?controller=salainfo">Informacje o sali i rezerwacja</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="index.php?controller=salainfo">Informacje o sali i rezerwacja</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
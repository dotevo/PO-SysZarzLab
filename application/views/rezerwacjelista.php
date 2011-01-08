﻿<?php
require('template.php');

class RezerwacjeListaView{
	public function generujListe(){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Lista rezerwacji
                    </div>
					<form id="form" action="" method="post">
					<fieldset>
                        <table class="tabborder" cellspacing="1">
                            <tr class="tabheader">
                                <td style="width: 40px"></td>
                                <td style="width: 100px">Godzina</td>
                                <td style="width: 100px">Data</td>
								<td style="width: 100px">Sala</td>
                                <td style="width: 100px"></td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' checked='true'/></td>
                                <td>10:30</td>
                                <td>21-12-2004</td>
								<td><a>112/D1</a></td>
                                <td><a href="index.php?controller=salainfo">Odwołaj</a></td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' /></td>
                                <td>13:50</td>
                                <td>21-12-2003</td>
								<td><a>115/B4</a></td>
                                <td><a href="index.php?controller=salainfo">Odwołaj</a></td>
                            </tr>
                        </table>
						</fieldset>
                    </form>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
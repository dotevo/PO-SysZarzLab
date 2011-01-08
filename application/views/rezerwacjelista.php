<?php
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
								<div class="field">
                            <label style="width: 50px; ">
                                Data:</label>
                            <input type="text" name="date" value="" style="float: left"/>
									 <p style="float: left">(DD-MM-RRRR)</p>
									 <a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 10px"><em><b>Przejdź</b></em></a>
                        </div>
								<br><br>
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
                                <td><a href="index.php?controller=odwolajrezerwacje">Odwołaj</a></td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' /></td>
                                <td>13:50</td>
                                <td>21-12-2003</td>
								<td><a>115/B4</a></td>
                                <td><a href="index.php?controller=odwolajrezerwacje">Odwołaj</a></td>
                            </tr>
                        </table>
								<a href="#">Zaznacz wszystko</a>&nbsp;|&nbsp;<a href="#">Odznacz wszystko</a><br><br>
								<a href="#" class="link"><em><b>Poprzedni dzień</b></em></a>
								<a href="#" class="link" style="margin-left: 240px;"><em><b>Następny dzień</b></em></a><br><br>
								<a href="index.php?controller=odwolajrezerwacje" class="link" style="margin-left: 175px;"><em><b>Odwołaj zaznaczone</b></em></a>
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

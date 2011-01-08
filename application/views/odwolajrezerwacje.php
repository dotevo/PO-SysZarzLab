<?php
require('template.php');

class OdwolajRezerwacjeView{
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
                        Odwołaj wybrane rezerwacje
                    </div>
					<form id="form" action="" method="post">
					<fieldset>
								<p class="grouptitle">Lista rezerwacji do odwołania:</p>
                        <table class="tabborder" cellspacing="1">
                            <tr class="tabheader">
                                <td style="width: 100px">Data</td>
                                <td style="width: 100px">Godzina</td>
                                <td style="width: 100px">Sala</td>
										  <td style="width: 100px">Budynek</td>
										  <td style="width: 100px">Prowadzący</td>
                            </tr>
                            <tr>
                                <td>21-12-2004</td>
                                <td>10:30</td>
										  <td>112</td>
                                <td>D1</td>
										  <td>Jan Kowalski</td>	
                            </tr>
                            <tr>
                                <td>21-12-2004</td>
                                <td>10:30</td>
										  <td>112</td>
                                <td>D1</td>
										  <td>Jan Kowalski</td>	
                            </tr>
                        </table>
								<br />
								<p class="grouptitle">Powód odwołania rezerwacji:</p>
								<textarea name="powod" cols="110" rows="5"></textarea>
							  
								<a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 190px;"><em><b>Odwołaj wybrane</b></em></a>
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

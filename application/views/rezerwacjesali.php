<?php
require('template.php');

class RezerwacjeSaliView{
	public function generuj(){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Lista rezerwacji dla sali ###
                    </div>
					<form id="form" action="" method="post">
					<fieldset>
                        <div class="field">
                            <label>
                                Data:</label>
                            <input type="text" name="text" value=""  style="width: 150px;"/>(DD-MM-RRRR)
							<a href="#" onclick="document.getElementById('form').submit()" class="link" ><em><b>Przejdź</b></em></a>
                        </div>
						
                        <div class="wrapper">
                            
						</div>
					
					
                        <table class="tabborder" cellspacing="1">
                            <tr class="tabheader">
                                <td style="width: 40px"></td>
                                <td style="width: 100px">Godzina</td>
                                <td style="width: 200px">Prowadzący</td>
                                <td style="width: 100px"></td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' checked='true'/></td>
                                <td>10:30</td>
                                <td>Franek</td>
                                <td><a href="index.php?controller=salainfo">Odwołaj</a></td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' /></td>
                                <td>13:50</td>
                                <td>Tomek</td>
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
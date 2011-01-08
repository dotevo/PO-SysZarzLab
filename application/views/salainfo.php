<?php
require('template.php');

class SalaInfoView{
	public function generuj(){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		?>
		<!-- content -->
        <div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Informacje o wybranej sali
                    </div>
                    <form id="form" action="" method="post">
                    <div style="float: left; width: 350px">
                        <fieldset>
                            <div class="field">
                                <label>
                                    Numer sali:</label>
                                ###
                            </div>
                            <div class="field hour">
                                <label>
                                    Budynek:</label>
                                ###
                            </div>
                            <div class="field hour">
                                <label>
                                   Dostępne profile:</label>
                                <select id="Select3">
                                    <option></option>
                                </select>
                            </div>
                            <div class="field">
                                <label>
                                    Profil dostępny na stanowiskach:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   System operacyjny:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   Oprogramowanie w zaznaczonym profilu:</label>
                                <textarea id="TextArea1" cols="35" rows="11"></textarea>
                            </div>
                        </fieldset>
                    </div>
                    <div style="float: left; width: 350px">
                        <fieldset class="widelabel">
                            <div class="field">
                                <label>
                                   Liczba stanowisk ogółem:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   Opiekun:</label>
                                ###
                            </div>
                            <div class="field hour">
                                <label>
                                   Dostępne konfiguracje sprzętowe:</label>
                                <select id="Select1">
                                    <option></option>
                                </select>
                            </div>
                            <div class="field">
                                <label>
                                   Ilość stanowisk w wybranej konfiguracji:</label>
                                ###
                            </div>
                            <br />
                            <p class="grouptitle" style="clear: both">Szczegóły wybranej <br />konfiguracji sprzętowej:</p>
                            <div class="field">
                                <label>
                                   Procesor:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   Pamięć RAM[MB]:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   Typ pamięci:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   Karta graficzna:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   Monitor:</label>
                                ###
                            </div>
                        </fieldset>
                    </div>
						  <a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 150px; margin-bottom: 10px"><em><b>Pokaż szczegółowe informacje o stanowiskach</b></em></a>	
                  	
                    <hr />
							<br>
						  <div class="field">	
                            <label style="width: 50px; ">
                                Data:</label>
                            <input type="text" name="date" value="" style="float: left"/>
									 <p style="float: left">(DD-MM-RRRR)</p>
									 <a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 10px"><em><b>Przejdź</b></em></a>
                    </div>
						  <br><br>
                     <table class="tabborder" cellspacing="1">
                            <tr class="timetable">
                                <td>Godzina</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
								<br />
								<a href="#" onclick="document.getElementById('form').submit()" class="link"><em><b>Poprzedni tydzień</b></em></a>
								<a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 450px"><em><b>Następny tydzień</b></em></a><br />
								<a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 280px"><em><b>Rezerwuj wybrany termin</b></em></a>
                       
                        </form>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
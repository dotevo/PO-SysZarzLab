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
                    <input id="Submit1" type="submit" class="btn" style="margin-left: 150px;" value="Pokaż szczegółowe informacje o stanowiskach" />
                    <hr />
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
                        <input id="Submit2" type="submit" class="btn" value="Poprzedni tydzień" />
                        <input id="Submit3" type="submit" class="btn" style="margin-left: 510px;" value="Następny tydzień" /><br />
                        <input id="Submit4" type="submit" class="btn" style="margin-left: 300px;" value="Rezerwuj wybrany termin" />
                        </form>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
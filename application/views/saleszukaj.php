<?php
require('template.php');

class SaleSzukajView{
	public function generuj(){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Podaj kryteria wyszukiwania sal
                    </div>
                    <form id="form" action="index.php?controller=salelista" method="post">
                    <fieldset>
                        <p class="grouptitle">Posiada wolne terminy:</p>
                        <div class="field">
                            <label>
                                W dniu:</label>
                            <input type="text" value="" />(DD-MM-RRRR)
                        </div>
                        <div class="field hour">
                            <label>
                                Od godziny:</label>
                            <input type="text" value="" />:<input type="text" value=""/>
                        </div>
                        <div class="field hour">
                            <label>
                               Do godziny:</label>
                            <input type="text" value="" />:<input type="text" value="" />
                        </div>
                        <hr />
                        <p class="grouptitle">Lokalizacja sali:</p>
                        <div class="field">
                            <label>
                                Budynek:</label>
                            <select id="Select1">
                                <option></option>
                            </select>
                        </div>
                        <hr />
                        <p class="grouptitle">Wyposa¿enie stanowisk komputerowych:</p>
                        <div class="field">
                            <label>
                               System operacyjny:</label>
                            <select id="Select2">
                                <option></option>
                            </select>
                        </div>
                        <div class="field">
                            <label>
                               Oprogramowanie:</label>
                            <input type="text" value="" /><input id="Submit1" type="submit" value="&nbsp;+&nbsp;" />
                        </div>
                        <hr />
                        <p class="grouptitle">Sprzêt:</p>
                        <div class="field">
                            <label>
                                Min. pamiêci RAM:</label>
                            <input type="text" value="" />
                        </div>
                        <div class="field">
                            <label>
                                Procesor:</label>
                            <input type="text" value="" />
                        </div>
                        <div class="field">
                            <label>
                                Karta graficzna:</label>
                            <input type="text" value="" />
                        </div>
								<a href="index.php?controller=salelista" style="margin-top:5px"  class="link"><em><b>Szukaj</b></em></a>
                       
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
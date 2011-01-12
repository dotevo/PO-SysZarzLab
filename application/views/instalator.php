<?php
require('template.php');

class InstalatorView{
	//values zawiera informacje z modelu np. walidacja połaczenia
	public function generujFormularz($values){
		$template=new Template();
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Instalacja
                    </div>
                    <form id="form" action="index.php?controller=instalator" method="post">
                    <fieldset>
						<div class="field">
                            <label>
                                Host:</label>
                            <input type="text" name="host" value="" />
                        </div>
						<div class="field">
                            <label>
                                DB:</label>
                            <input type="text" name="db" value="" />
                        </div>
                        <div class="field">
                            <label>
                                User:</label>
                            <input type="text" name="login" value="" />
                        </div>
                        <div class="field">
                            <label>
                                Hasło:</label>
                            <input type="text" name="pass" value="" />
                        </div>
                        <div class="wrapper">
                            <a href="#" onclick="document.getElementById('form').submit()" class="link" style="float: right"><em><b>Instaluj</b></em></a></div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
	
	public function generujEnd(){
		$template=new Template();
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Instalacja zakończona powodzeniem
                    </div>                    
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
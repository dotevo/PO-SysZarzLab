<?php
require('template.php');

class LogowanieView{
	public function generujFormularzLogowania($komunikat){
		$template=new Template();
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Logowanie
                    </div>
                    <p class="p1">Prosimy o zalogowanie się do systemu</p>
					<p class="p1" style="color: #F00"><?php echo $komunikat;?></p>
                    <form id="form" action="index.php?controller=logowanie" method="post">
                    <fieldset>
                        <div class="field">
                            <label>
                                Login:</label>
                            <input type="text" name="login" value="" />
                        </div>
                        <div class="field">
                            <label>
                                Hasło:</label>
                            <input type="password" name="pass" value="" />
                        </div>
                        <div class="wrapper">
                            <a href="#" onclick="document.getElementById('form').submit()" class="link" style="float: right"><em><b>Loguj</b></em></a></div>
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
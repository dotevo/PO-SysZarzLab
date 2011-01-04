<?php
class Template{
	public $sitenav;
	public function renderApplicationTop(){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>System zarządzania laboratoriami</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page5">
    <div class="tail-top-right">
    </div>
    <div id="main">
        <!-- header -->
        <div id="header">
<?php
if(isset($this->sitenav)&$this->sitenav==true){
?>
            <ul class="site-nav">
                <li><a href="index.php?controller=rezerwacjelista">Moje rezerwacje</a></li>
                <li><a href="index.php?controller=salelista">Sale</a></li>
                <li><a href="index.php?controller=userkilista">Usterki</a></li>
                <li class="last"><a href="index.php?controller=zapotrzebowanielista">Zapotrzebowanie</a></li>
            </ul>
<?php
}
?>
            <div class="logo">
                <p class="maintitle">System zarządzania laboratoriami<br />Politechniki Wrocławskiej</p></div>
        </div>
<?php
	}	

	public function renderApplicationBottom(){
?>
<div id="footer">
            <div class="indent">
                <div class="fleft">
                    Copyrights -
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
	}

}
?>
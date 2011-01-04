<?php
class Template{
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
            <ul class="site-nav">
                <!--<li><a href="home.html">Home</a></li>
                      <li><a href="about-us.html">About-us</a></li>
                      <li><a href="articles.html">Articles</a></li>
                      <li><a href="contact-us.html" class="act">Contact-us</a></li>
                      <li class="last"><a href="sitemap.html">Sitemap</a></li>-->
            </ul>
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
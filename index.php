<?php
include 'menu.class.php';
$menu = new Menu("menu");
$super_menu = new Menu("super_menu");
$social = new Menu("social");
$menu->css_class ="0";
$menu->css_id ="0";
$menu->special ="Special";
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manhattan Place Entertainment</title>
<link rel="shortcut icon" href="favicon.ico" >
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="_css/main.css" media="screen"/>
<script src="js/modernizr.2.0.6.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<!-- place javascript in scripts.js -->
</head>
<body>
    <header>
        <nav>
            <ul class="menu-social">
                <?php $social->makeMenu(); ?>
            </ul>
            <ul class="menu-info">
                <?php $super_menu->makeMenu(); ?>
            </ul>        
            <ul class="menu-main">
                <?php $menu->makeMenu(); ?>
            </ul>
        </nav>
    </header>
	<div class="panel">
            <div id="logo">
            	<a href="index.html">
            	<h1>Manhattan Place Entertainment - Video and Film Production Services</h1>
            	</a>
            </div>
            <ul id="filmstrip">
                <li>
                    <a  href="sizzle.html" title="PSA's">
                        <img class="flimstrip_thumb" src="_img/film-strip-images-samplereel-223x140.jpg" alt="Sample Reel"  />
                        <p>SIZZLE REELS</p>
                    </a>
                </li>
                <li>
                    <a  href="commercial.html" title="COMMERCIALS">
                        <img src="_img/film-strip-images-commercial-223x140.jpg" alt="Commercials"  />
                        <p>COMMERCIALS</p>
                    </a>
                </li>
                <li>
                    <a  href="promos.html" title="PROMOS">
                        <img src="_img/film-strip-images-promos-223x140.jpg" alt="Promos" />
                        <p>PROMOS</p>
                    </a>
                </li>
                <li>
                    <a  href="digital.html" title="DIGITAL / WEB">
                        <img src="_img/film-strip-images-digital-223x140.jpg"  alt="Digital and Web" />
                        <p>DIGITAL / WEB</p>
                    </a>
                </li>
                <li>
                    <a href="teases.html" title="TEASES">
                        <img src="_img/film-strip-images-teases-223x140.jpg"   alt="Teases" />
                        <p>TEASES</p>
                    </a>
                </li>
                <li>
                    <a  href="opens.html" title="OPENS">
                        <img class="flimstrip_thumb" src="_img/film-strip-images-opens-223x140.jpg" alt="Opens"  />
                        <p>OPENS</p>
                    </a>
                </li>
                <li>
                    <a  href="psa.html" title="PSA's">
                        <img src="_img/film-strip-images-psa-223x140.jpg"   alt="PSA's"  />
                        <p>PSA'S</p>
                    </a>
                </li>
                <li>
                    <a  href="episodic.html" title="EPISODIC">
                        <img src="_img/film-strip-images-episodic-223x140.png" alt="Episodic" />
                        <p>EPISODIC</p>
                    </a>
                </li>
            </ul>
    </div>
    <!--end panel-->
<footer>
    <ul class="copyright vcard">
        <li class="cr">Copyright</li>
        <li class="org">Manhattan Place Entertainment.  All Rights Reserved.</li>
        <li class="tel">Phone: 212-682-2000</li>  
        <li>Fax: 212-682-2058</li>
        <li><a href="Manhattan_Place.vcf">Download vCard </a></li>
        <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp;
            <a href="tos.pdf">Click here for PDF</a>
        </li>
    </ul>
</footer><!-- end footer -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17516374-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
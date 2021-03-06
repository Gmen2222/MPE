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
<title>Sizzle Video Library</title>
<meta name="description" content="Sizzle Video Library">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>
<script src="js/modernizr.2.0.6.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include '_header.php'; ?>
    <div class="panel">
        <div id="logo">
            <a href="index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">Sizzle Reels</h3>
        <div class="container">
            <div class="wt-gallery">
                <div class="main-screen">
                    <img id="bg-img" src="assets/spacer.png" alt="spacer"/>
                    <a href="#"><img id="main-img" src="images/case-study.jpg" alt="placeholder"/></a>
                    <img src="assets/prev.png" id="prev-btn" alt="back button"/>
                    <img src="assets/next.png" id="next-btn" alt="forward button"/>
                    <dl class="desc"></dl>
                    <div class="tmp-desc"></div>
                    <div class="info-pane">--&nbsp;/&nbsp;--</div>
                    <div class="preloader"><img src="assets/loader.gif" alt="spiny thing"/></div>
                </div>                
                <div class="c-panel sizzle">
                    <div id="thumbs-back"><img src="assets/prev_thumb.png" alt="back button"/></div>
                    <div class="thumbnails">
                <ul>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/sizzle/sizzle-1.jpg">
                            </a><img src="images/sizzle/sizzle-1-thumb.jpg" alt="sizzle reel"/>
                        </div>
                        <a href="samplereel/sizzle/video.php"></a>
                        <dl>
                            <dt class="description">Title</dt>
                                <dd>Sizzle Reel </dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment<dd>
                        </dl>       
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/sizzle/sizzle-3.jpg">
                            <img src="images/sizzle/sizzle-3-thumb.jpg" alt="sizzle reel"/></a>
                        </div>
                        <a href="samplereel/sizzle-2013/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Branded Content</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>  
                </ul>
                </div>              
                <div id="thumbs-fwd"><img src="assets/next_thumb.png" alt="forward button"/></div> 
                <div class="pagination"></div>            
                </div>
            </div>
        </div>    
    </div><!--end panel-->
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
<!-- Google Analytics -->
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

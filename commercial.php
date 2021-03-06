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
<title>Commercials Reel</title>
<meta name="description" content="video">
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
        <h3 class="library">COMMERCIALS</h3>
        <div class="container">
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
            <div class="c-panel">
                <div id="thumbs-back"><img src="assets/prev_thumb.png" alt="back button"/></div>
                <div class="thumbnails">
                    <ul>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-beyonce.jpg">
                        <img src="images/thumbs/case-study-beyonce.jpg" alt="Beyonce"/></a>
                    </div>
                    <a href="commercial/beyonce/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Beyonce "What's in your Target cart?"</dd> 
                        <dt class="description">Agency:</dt>
                            <dd>Weiden + Kennedy</dd> 
                        <dt class="description">Production Company:</dt>
                            <dd>PrettyBird</dd>
                        <dt class="description">Director:</dt>
                            <dd>Melina Matsoukas</dd>
                        <dt class="description">Director of Photography:</dt>
                            <dd>Jim Fealy</dd>
                        <dt class="description">2nd Camera Operator:</dt>
                            <dd>Steve Cohen</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_pc_cure.jpg">
                        <img src="images/thumbs/case_study_pc_cure.jpg" alt="Cablevision - Cure PC"/></a>
                    </div>
                    <a href="commercial/curePC/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>Cure PC - Bryan Cranston</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd> Cablevision</dd> 
                        <dt class="description">Executive Producer:</dt>
                            <dd>Kim Kerns</dd>
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Producer:</dt>
                            <dd>Mary Pat Clarke</dd>
                        <dt class="description">Editor:</dt>
                            <dd>Duncan Skiles</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-dennis-leary.jpg">
                        <img src="images/thumbs/case-study-dennis-leary.jpg" alt="Dennis Leary"/></a>
                    </div>
                    <a href="commercial/lustgarten-foundation-psa/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd> Cure PC - Denis Leary</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>Cablevision</dd> 
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">CAMERA:</dt>
                            <dd>Chris Bierlein</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-derek-jeter.jpg">
                        <img src="images/thumbs/case-study-derek-jeter.jpg" alt="Derek Jeter"/></a>
                    </div>
                    <a href="commercial/derek-jeter/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>Stand Up For Cancer</dd> 
                            <dd>-Derek Jeter</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>FOX Sports</dd> 
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd>Steve Cohen (Derek Jeter Scenes Only)</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-patrick.jpg">
                        <img src="images/thumbs/case-study-patrick.jpg" alt="MSG"/></a>
                    </div>
                    <a href="commercial/dan-patrick/video-dan-patrick.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>The Dan Patrick Show - "Fritzy"</dd> 
                        <dt class="description">Client:</dt>
                            <dd> DirecTV</dd> 
                        <dt class="description">Producer:</dt>
                            <dd> Barton Peters</dd>
                        <dt class="description">Director of Photography:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Second Unit DP:</dt>
                            <dd>Brent Ramsey</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
        <!-- case study -->
                <li>
                    <div class="gallery-images">
                        <a class="gallery_overlay" href="images/commercial/trutv-grandpa.jpg"></a>
                        <img src="images/commercial/trutv-grandpa-thumb.jpg" alt="Bad Grandpa Promo"/>
                    </div>
                    <a href="commercial/trutv-bad-grandpa/video.php"></a> 
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd style="text-transform:none;">"Bad Grandpa Promo" truTV</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>ElevenO2</dd>
                        <dt class="description">DIRECTOR:</dt>
                            <dd>Barry Bross</dd>
                        <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
        <!-- case study -->
                <li>
                    <div class="gallery-images">
                        <a class="gallery_overlay" href="images/commercial/kickass2.jpg"></a>
                        <img src="images/commercial/kickass2-thumb.jpg" alt="Kickass 2"/>
                    </div>
                    <a href="commercial/kickass2/video.php"></a> 
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd style="text-transform:none;">"Kick Ass 2 Promo</dd>
                        <dt class="description">Client:</dt>
                            <dd>ElevenO2</dd>
                        <dt class="description">DIRECTOR:</dt>
                            <dd>Barry Bross</dd>
                        <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Field Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
        <!-- case study -->
                <li>
                    <div class="gallery-images">
                        <a class="gallery_overlay" href="images/commercial/st-vincent-miracle2.jpg"></a>
                        <img src="images/commercial/st-vincent-miracle-thumb2.jpg" alt="Miracles"/>
                    </div>
                    <a href="commercial/st-vincents-miracles/video.php"></a> 
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Miracles</dd>
                        <dt class="description">Client:</dt>
                            <dd>St. Vincent's Medical Center</dd>
                        <dt class="description">Agency:</dt>
                            <dd>Franklin Street</dd>
                        <dt class="description">Directors:</dt>
                            <dd>Chris Bierlein, Tim Roberts</dd>
                        <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                            <dd>Chris Bierlein</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
        <!-- case study -->
                <li>
                    <div class="gallery-images">
                        <a class="gallery_overlay" href="images/commercial/acc-football.jpg"></a>
                        <img src="images/commercial/acc-football-thumb.jpg" alt="ACC Football"/>
                    </div>
                    <a href="commercial/acc-football/video.php"></a> 
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>ACC Football</dd>
                        <dt class="description">Client:</dt>
                            <dd>SME Branding</dd>
                        <dt class="description">Executive Producers:</dt>
                            <dd>Steve Cohen, Mike McCarthy, Ed O'hara</dd>
                        <dt class="description">Creative Director:</dt>
                            <dd>Zach Kelly</dd>
                        <dt class="description">Editor:</dt>
                            <dd>Jonathan Wendell</dd>
                        <dt class="description">Post Producer:</dt>
                            <dd>David Lengel</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_bush_clinton.jpg">
                        <img src="images/thumbs/case_study_bushclinton.jpg" alt="Hurricane Katrina"/></a>
                    </div>
                    <a href="commercial/katrina/video.php"></a>
                    <dl>
                        <dt class="description">Title</dt> 
                            <dd>Hurricane Katrina</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd> ABC Sports, Madison Square Garden,</dd>
                            <dd class="single-line">The National Football League</dd>
                        <dt class="description">Executive Producers:</dt>
                            <dd>Ivan Gottesfeld &amp; Glenn Adamo</dd>
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd> Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/keurig.jpg">
                        <img src="images/thumbs/keurig.jpg" alt="Keurig 'Journey Across America'"/></a>
                    </div>
                    <a href="commercial/keurig/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Keurig "Journey Across America"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>Heads-Up Creative</dd>
                        <dt class="description">DIRECTOR:</dt>
                            <dd>Harry Clark</dd>
                        <dt class="description">PRODUCER:</dt>
                            <dd>Michelle Band</dd>
                        <dt class="description">Director of Photography:</dt>
                            <dd>Dan Bramm</dd>
                        <dt class="description">2nd Unit DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:<br/></dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study -->
                <li>
                    <div class="gallery-images">
                        <a class="gallery_overlay" href="images/pooch.jpg"></a>
                        <img src="images/pooch-thumb.jpg" alt="ESPN SportsCenter Spot"/>
                    </div>
                    <a href="commercial/espn-sports-center/video.php"></a> 
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>ESPN "SportsCenter Spot"</dd>
                        <dt class="description">Creative Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Producer:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Editor:</dt>
                            <dd>Dean Marcial</dd>
                        <dt class="description">Production Company:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-bob-papa.jpg">
                        <img src="images/thumbs/case-study-bob-papa.jpg" alt="Giants Rewind"/></a>
                    </div>
                    <a href="commercial/papa/video-papa.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>"Giants Rewind"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>MSG Media</dd>
                        <dt class="description">Producer:</dt>
                            <dd>Eric Jergenson</dd>
                        <dt class="description">Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Director of Photography:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:<br/></dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-mike-breen.jpg">
                        <img src="images/thumbs/case-study-mike-breen.jpg" alt="MSG"/></a>
                    </div>
                    <a href="commercial/taxi-mike_breen/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>Mike Breen "In the Zone"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>MSG Media</dd> 
                        <dt class="description">Agency:</dt>
                            <dd>Amalgamated</dd>
                        <dt class="description">Director/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-al-trautwig.jpg">
                        <img src="images/thumbs/case-study-al-trautwig.jpg" alt="Al Trautwig"/></a>
                    </div>
                    <a href="commercial/taxi-control_room/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Al Trautwig "Whatever He Wants"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>MSG Media</dd> 
                        <dt class="description">Agency:</dt>
                            <dd>Amalgamated</dd>
                        <dt class="description">Director/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>   
    <!-- case study -->
                <li>
                    <div class="gallery-images">
                        <a class="gallery_overlay" href="images/commercial/test-of-a-champion.jpg"></a>
                        <img src="images/commercial/test-of-a-champion-thumb.jpg" alt="The Test of the Champion"/>
                    </div>
                    <a href="commercial/nyra-ny-adrenaline/video.php"></a> 
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>NYRA "The Test of the Champion"</dd>
                        <dt class="description">Client:</dt>
                            <dd>The New York Racing Association</dd>
                        <dt class="description">Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Company:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-banks.jpg">
                        <img src="images/thumbs/case-study-banks.jpg" alt="MSG"/></a>
                    </div>
                    <a href="commercial/banks/video-banks.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>"Opening Drive Live"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>MSG Media</dd>
                        <dt class="description">Producer:</dt>
                            <dd>Eric Jergenson</dd>
                        <dt class="description">Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Director of Photography:</dt>
                            <dd>Steve Cohen</dd> 
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_insperity-kids-save.jpg">
                        <img src="images/thumbs/case_study_insperity-kids-save.jpg" alt="Insperity Kids Save"/></a>
                    </div>
                    <a href="commercial/insperity-kids-save/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Insperity "Kids Save"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>Sven Media Productions</dd>
                        <dt class="description">Director:</dt>
                            <dd>Chris Svendsen</dd>
                        <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
               <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-ryan-howard.jpg">
                        <img src="images/thumbs/case-study-ryan-howard.jpg" alt="Ryan Howard"/></a>
                    </div>
                    <a href="commercial/ryan-howard/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Stand Up For Cancer</dd>
                            <dd>- Ryan Howard</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd> FOX Sports</dd>
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd>Steve Cohen (Ryan Howard Scenes Only)</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>      
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-bill-pidto.jpg">
                        <img src="images/thumbs/case-study-bill-pidto.jpg" alt="Bill Pidto"/></a>
                    </div>
                    <a href="commercial/taxi-bill/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>Bill Pidto "Not His Coffee"</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>MSG Media</dd>
                        <dt class="description">Agency:</dt>
                            <dd>Amalgamated</dd>
                        <dt class="description">Director/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-noiinpen.jpg">
                        <img src="images/thumbs/case-study-noiinpen.jpg" alt="Al/Kelly 'No I in Pen'"/></a>
                    </div>
                    <a href="commercial/taxi-kelly_ai/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Al and Kelly "No I in Pen"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>MSG Media</dd> 
                        <dt class="description">Agency:</dt>
                            <dd>Amalgamated</dd> 
                        <dt class="description">Director/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_spiderwick_jared.jpg">
                        </a><img src="images/thumbs/case_study_spiderwick_jared.jpg" alt="Man stands in front of globe"/>
                    </div>
                    <a href="commercial/spiderwick_jared/jared.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>The Spiderwick Chronicles - Jared</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>Nickelodeon Pictures</dd> 
                        <dt class="description">Executive Producer:</dt>
                            <dd>Jay Schmalhalz</dd>
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Producer:</dt>
                            <dd>Anthony Gelsomino</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_spiderwick_mallory.jpg">
                        </a><img src="images/thumbs/case_study_spiderwick_mallory.jpg" alt="NY Knicks Nate Robinson"/>
                    </div>
                    <a href="commercial/spiderwick_mallory/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>The Spiderwick Chronicles - Mallory</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>Nickelodeon Pictures</dd>
                        <dt class="description">Executive Producer:</dt>
                            <dd>Jay Schmalhalz</dd>
                        <dt class="description">DP/Directors:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Producer:</dt>
                            <dd>Anthony Gelsomino</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
               <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-jimmy-rollins.jpg">
                        <img src="images/thumbs/case-study-jimmy-rollins.jpg" alt="Jimmy Rollins"/></a>
                    </div>
                    <a href="commercial/jimmy-rollins/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Stand Up For Cancer</dd>
                            <dd>- Jimmy Rollins</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>FOX Sports</dd> 
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd>Steve Cohen (Jimmy Rollins Scenes Only)</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_our_neighborhood-2.jpg">
                        <img src="images/thumbs/case_study_our_neighborhood-2.jpg" alt="Cablevision - This is Our Neighborhood"/></a>
                    </div>
                    <a href="commercial/neighborhood/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>This Is Our Neighborhood</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>Cablevision Advertising</dd>
                        <dt class="description">Executive Producer:</dt>
                            <dd>Kim Kerns</dd>
                        <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/commercial/theresa-yony.jpg">
                        <img src="images/commercial/theresa-yony-thumb.jpg" alt="Theresa Yoney"/></a>
                    </div>
                    <a href="commercial/st-vincent-theresa-yoney/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd> Theresa Yoney</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>St. Vincent's Medical Center</dd> 
                        <dt class="description">DIRECTOR:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                        <dt class="description">Creative:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_novalis-2.jpg">
                        <img src="images/thumbs/case_study_novalis-2.jpg" alt="St. Vincent's Medical Center - Novalis"/></a>
                    </div>
                    <a href="commercial/st-vincent-medical-center-novalis/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>"Novalis"</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>St. Vincent's Medical Center</dd>
                        <dt class="description">Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                        <dt class="description">CREATIVE:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_arvetta-2.jpg">
                        <img src="images/thumbs/case_study_arvetta-2.jpg" alt="St. Vincent's Medical Center - Arvetta"/></a>
                    </div>
                    <a href="commercial/st-vincent-medical-center-arvetta/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt> 
                            <dd>"Arvetta"</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>St. Vincent's Medical Center</dd>
                        <dt class="description">Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                        <dt class="description">CREATIVE:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_darren-2.jpg">
                        <img src="images/thumbs/case_study_darren-2.jpg" alt="St. Vincent's Medical Center - Darren"/></a>
                    </div>
                    <a href="commercial/st-vincent-medical-center-darren/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>"Darren"</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>St. Vincent's Medical Center</dd>
                        <dt class="description">Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:<br/></dt>
                            <dd>Manhattan Place Entertainment</dd>
                        <dt class="description">CREATIVE:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-nyra-breeders.jpg">
                        <img src="images/thumbs/case-study-nyra-breeders.jpg" alt="NYRA NY Breeder"/></a>
                    </div>
                    <a href="commercial/nyra-ny-breeders/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>NYRA NY Breeder</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>The New York Racing Association</dd>
                        <dt class="description">DIRECTOR/DP:</dt>
                            <dd>Chris Bierlien</dd>
                        <dt class="description">Production Services:<br/></dt>
                            <dd>Manhattan Place Entertainment</dd>
                        <dt class="description">POST PRODUCTION:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case-study-nyra-adrenaline.jpg">
                        <img src="images/thumbs/case-study-nyra-adrenaline.jpg" alt="NYRA NY Adrenaline"/></a>
                    </div>
                    <a href="commercial/nyra-ny-adrenaline/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>NYRA NY Adrenaline</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>The New York Racing Association</dd>
                        <dt class="description">DIRECTOR:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:<br/></dt>
                            <dd>Manhattan Place Entertainment</dd>
                    </dl>
                </li>
    <!-- case study  -->
                <li>
                    <div>
                        <a class="gallery_overlay" href="images/case_study_victorys_secret.jpg">
                        <img src="images/thumbs/case_study_victorys_secret.jpg" alt="Victoria's Secret"/></a>
                    </div>
                <a href="commercial/victorias_secret/video.php"></a> 
                <dl>
                    <dt class="description">Title:</dt> 
                        <dd>Victoria's Secret</dd>
                    <dt class="description">CLIENT:</dt>
                        <dd>Victoria's Secret</dd>
                    <dt class="description">Director:</dt>
                        <dd>Max Vadukul</dd>
                    <dt class="description">Director of Photography:</dt>
                        <dd>Christopher Bierlein</dd>
                    </dl>
                </li>
             </ul>
                </div>
                <div id="thumbs-fwd"><img src="assets/next_thumb.png" alt="foward button"/></div> 
                <div class="pagination"></div>
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
            <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp; <a href="tos.pdf">Click here for PDF</a>
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

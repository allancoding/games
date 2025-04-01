<?php
session_start();
if(!isset($_REQUEST["allan"])){
if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<title>Secret of Mana!</title>
<link rel="icon" type="image/png" href="../emulator/emjs/img/icon.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="../emulator/css/main.css">
<script src="../emulator/js/main.js"></script>
<div id="preloader"></div>
<style>
.containerr {
top: 0;
left: 0;
position: fixed;
z-index: 99999999;
opacity: 0;
transition: opacity .1s ease-in-out;
-moz-transition: opacity .1s ease-in-out;
-webkit-transition: opacity .1s ease-in-out;
}
.vertical--center {
position: fixed;
top: 0;
left: 0;
width: 150px;
height: 180px;
}
.a{
left: 60px !important;
position: fixed;
}
.bot {
padding: 5px;
margin: 10px;
border-radius: 50%;
background-color: #ff1100;
border: 2px solid black;
width: 50px;
height: 50px;
font-size: 25px;
color: white;
cursor: pointer;
}
.containerr:hover {
opacity: 1.0;
transition: opacity .1s ease-in-out;
-moz-transition: opacity .1s ease-in-out;
-webkit-transition: opacity .1s ease-in-out;
}
#helppp{
visibility: hidden;
transition: opacity .1s ease-in-out;
-moz-transition: opacity .1s ease-in-out;
-webkit-transition: opacity .1s ease-in-out;
}
</style>
<div class="containerr">
<div id="hov" class="vertical--center">
<button id="helpp" onclick="window.location.href = '/snes-nes/';" class="bot">⬅</button>
</div>
</div>
<div style="width:100%;hight:100%;">
<div id="game"></div>
</div>
<script type="text/javascript">
EJS_player = '#game';
EJS_gameUrl = 'SOM.smc.zip'; // Url to Game rom
EJS_gameID = 1; // ID in your website, required for netplay.
EJS_core = 'snes';
EJS_mouse = false; // SNES Mouse
EJS_multitap = false; // SNES Multitap
EJS_gameName = "Secret of Mana!";
$(document).ready(function(){
$(".ejs--73f9b4e94a7a1fe74e11107d5ab2ef").attr("id","start");
$(".ejs--cbcfe0a1421cadac9a04c81d6431d6").attr("id","loding");
$(".ejs--71527b6509aa48afce3ce1a11c02f0").attr("id","naming");
$(".ejs--057800d021995e1347ec07cb748672").addClass("backg");
$("#loding").attr("hidden","");
$("#loding").hide();
$("#start").on('touchstart click', function() {
$(".ejs--057800d021995e1347ec07cb748672").removeClass("backg");
$("#loding").show();
$("#loding").removeAttr("hidden");
$("div").remove(".ejs--f3a1903d935f6cf720d4a0498db62a");
setTimeout(
function()
{
$("div").remove(".ejs--cbcfe0a1421cadac9a04c81d6431d6");
}, 4500);
});
});
</script>
<script src="https://file.allancoding.ga/emulator/data/loader.js"></script>
<style>
.ejs--73f9b4e94a7a1fe74e11107d5ab2ef{
background-color: #ff1100 !important;
border-width:1px !important;
border-color:black !important;
border-style:solid !important;
}
.backg{
background-image: url("SOM.png") !important;
background-color: transparent !important;
 background-size:contain;
background-position: center;
background-repeat: no-repeat;
}
body{
margin: 0;
padding: 0;
background-color: black;
}
</style>
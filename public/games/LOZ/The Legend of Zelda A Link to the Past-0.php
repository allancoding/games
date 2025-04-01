<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<title>Legend of Zelda - A Link to the Past!</title>
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
    EJS_gameUrl = 'LOZ.smc.zip'; // Url to Game rom
    EJS_gameID = 5; // ID in your website, required for netplay.
    EJS_core = 'snes';
    EJS_mouse = false; // SNES Mouse
    EJS_multitap = false; // SNES Multitap
    EJS_gameName = 'Legend of Zelda - A Link to the Past!';
</script>
<script src="../emulator/emjs/loader.js"></script>
<style>
.ejs--73f9b4e94a7a1fe74e11107d5ab2ef{
    background-color: #ff1100 !important;
    border-width:1px !important;
    border-color:black !important;  
    border-style:solid !important;
}
.backg{
    background-image: url("LOZ.jpg") !important;
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
<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>Run 3!</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/png" href="../emulator/emjs/img/icon.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="../emulator/css/main.css">
<script src="../emulator/js/main.js"></script>
<div id="preloader"></div>
  <style>
 body{
     margin: 0;
     padding 0;
 }
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
</head>
<iframe style="width: 100%; height: 100%;" id="r3" frameBorder="0" src="index.php"></iframe>
<script>
if(window.location.hostname == "000webhostapp.allancoding.ga"){
    document.getElementById("r3").src = "https://snes-nes.allancoding.ga/R3/?allan";
    const iframe = iframe = document.getElementById('r3')
iframe.contentWindow.postMessage({
  action: 'get',
  key: '/R3/:Run3'
});
iframe.contentWindow.postMessage({
  action: 'get',
  key: '/R3/index.php:Run3'
});
iframe.contentWindow.postMessage({
  action: 'get',
  key: '/R3/index.php:last'
});
iframe.contentWindow.postMessage({
  action: 'get',
  key: '/R3/:last'
});
window.addEventListener("message", messageHandler, false);
function messageHandler(event) {
  const { action, key, value } = event.data
  if (action == 'returnData'){
    localStorage.setItem(key, value);
  }
}
}
</script>
</html>
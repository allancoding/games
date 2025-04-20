<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
      <style>
      body, html{
          margin:0;
          padding:0;
          background: black;
          height: 100%;
      }
#adsCode{
	display: none;	
}
          </style>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Tunnel Rush</title>
    <script src="UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "tunnel_rush.json");
    </script>
  </head>
  <body>
      <center>
    <div id="gameContainer" style="width: calc(100vh * 4/3); height: 100vh; margin: auto;"></div>
    </center>
    <script>
    window.onerror = function(msg, url, linenumber) {
    alert('Error message: '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);
    return true;
}

    </script>
</html>
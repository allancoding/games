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
          </style>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | BlightBorne</title>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Armor Games Build.json");
    </script>
  </head>
  <body>
      <center>
    <div id="gameContainer" style="width: calc(100vh * 4/3); height: 100vh; margin: auto;"></div>
    </center>
</html>
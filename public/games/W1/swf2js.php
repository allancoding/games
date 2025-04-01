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
    #game{
        width: calc(100vh * 4/3);
        height: 100vh;
        margin: auto;
    }
          </style>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Wheely - Swf2js</title>
    <script src="/snes-nes/emulator/js/swf2js.js"></script>
  </head>
  <body>
      <center>
      <div id="game"></div>
    </center>
<script>
swf2js.load('/snes-nes/W1/wheely.swf', {"tagId": "game"});
</script>
</html>
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
    <title>Wheely - Ruffle</title>
    <script src="/snes-nes/emulator/js/ruffle.js"></script>
  </head>
  <body>
      <center>
      <embed src="wheely.swf" id="game"></embed>
    </center>
</html>
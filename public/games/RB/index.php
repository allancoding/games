<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<title>Rookie Bowman</title>
<style>
canvas{
    height: 100%;
    margin: auto;
}
</style>
<body style="margin: 0px; padding: 0px; background:black;">
    <script src="js/phaser.min.js"></script>
    <script src="js/main.js"></script>
    <center>
    <div id="phaser-game" style="width: calc(100vh * 4/3); height: 100vh;"></div>
    </center>
    <script>
    function showAd(){
        console.log("AD: Blocked! :)");
    }
    function visitLink(){
        console.log("Link: Blocked! :)");
    }
    </script>
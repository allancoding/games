<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<title>Super Metroid and A Link to the Past Crossover!</title>
<link rel="icon" type="image/png" href="../emulator/emjs/img/icon.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../emulator/css/main.css">
<script src="../emulator/js/main.js"></script>
<div id="preloader"></div>
  <style>
.containerr { 
  top: 0;
  left: 0;
  position: fixed;
  width: 300px;
  height: 400px;
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
  width: 100px;
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
    <button id="helpp" onclick="window.location.href = '/snes-nes/';" class="bot"><i class="fa fa-bars"></i></button>
    </div>
    <div class="vertical--center a">
    <button id="helppp" onclick="$('#myModal').modal();" class="bot" style="font-size: 20px;border-radius: 25px;width: 50px;"><i class="fa fa-question"></i></button>
    </div>
</div>
<script>
$("#helpp").hover(function(){
  $("#helppp").css("visibility", "visible");
  $("#helpp").html("⬅");
  }, function(){
});
$(".containerr").hover(function(){
    $(this).css("opacity", "1");
  }, function(){
      if($("#myModal").data('bs.modal')?.isShown){
          $(this).css("opacity", "1");
      }else{
      $(this).css("opacity", "0");
      }
      $("#helppp").css("visibility", "hidden");
      $("#helpp").html("<i class='fa fa-bars'></i>");
});
</script>
<div style="width:100%;hight:100%;">
        <div id="game">
        </div>
      </div>
<script type="text/javascript">
    EJS_player = '#game';
    EJS_gameUrl = "SMALTTP.sfc.zip"; // Url to Game rom
    EJS_gameID = 13; // ID in your website, required for netplay.
    EJS_core = 'snes';
    EJS_mouse = false; // SNES Mouse
    EJS_multitap = false; // SNES Multitap
    EJS_gameName = "Super Metroid and A Link to the Past Crossover!";
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
    background-image: url("SM&ALTTP.jpg") !important;
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">This is really hard!</h4>
        </div>
        <div class="modal-body">
          <a target='_blank' href='SM&ALTTP.html'>This is the cheet sheet!</a> If you need it!
        </div>
        <div class="modal-footer">
          <button type="button" onclick="$('.containerr').css('opacity', '0');" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
$( function() {
    $('#myModal').modal();
    $(".containerr").css("opacity", "1");
  } );
</script>
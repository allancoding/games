<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){
        header('location:/snes-nes/');
    }
}
if($_SESSION['GP'] == "false" || !isset($_SESSION['GP'])){
 require("auth.php");
$login = new Login;
$login->authorize();   
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>Get Person!</title>
    <link rel="icon" type="image/png" href="GP.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="../emulator/css/main.css">
<script src="../emulator/js/main.js"></script>
<div id="preloader"></div>
  <style>
 body{
     margin: 0;
     padding 0;
     background-color: #faffad;
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
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #fbffc7;
  text-align: center;
}
#main{
    width: 60%;
    margin-left: 20%;
    margin-right: 20%;
}
ul#ress {
  list-style-type: none;
  padding: 0;
  margin: 0;
  width: 100%;
}
body{
    font-family: "Times New Roman", Times, serif;
}
/* Style the list items */
ul#ress li {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  position: relative;
  margin: auto;
  text-align: left;
}
textarea{
    border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  position: relative;
  margin: auto;
  text-align: left;
  width: 100%;
  resize: none;
    overflow: hidden;
}
ul#ress li span, ul#ress li img{
  display: inline-block;
}
ul#ress li span{
    margin-left: 20px;
    margin-bottom: 10px;
}

/* Add a light grey background color on hover */
ul#ress li:hover {
  background-color: #eee;
}
img.pic {
  border-radius: 50%;
}
.renam{
    margin-bottom: 0px;
}
</style>
<div class="containerr">
    <div id="hov" class="vertical--center">
    <button id="helpp" onclick="window.location.href = '/snes-nes/';" class="bot">⬅</button>
    </div>
</div>
</head>
<div id="main"><center>
    <div class="container">
    <img width="30%" src="ironc.png">
    <h1>Find A Person In Iron County Schools</h1>
    <div id="startin" style="display: block;">
    <p>Find By Email, Name or 600#</p>
    <label for="norem"><b>Name or Email:</b></label>
    <input type="text" placeholder="600#####@ironschools.org Or Billy Joy" name="norem" id="norem">
    <button onclick="findper()" id="norem" class="registerbtn">Find Info</button>
    </div>
    <div id="startinf" style="display: none;">
    <p>No person was found add new email?</p>
    <label for="noremf"><b>Email:</b></label>
    <input type="text" placeholder="600#####@ironschools.org" name="noremf" id="noremf">
    <button onclick="findperf()" class="registerbtn">Yes Check for new email</button>
    <button onclick="window.location.reload();" class="registerbtn">No</button>
    </div>
    <div style="display: none;" id="loading">
    <img width="30%" src="loading.gif">
    </div>
    <div style="display: none;" id="findes">
        <h3 id="whatyou"></h3>
    <ul id="ress">
</ul>
<button onclick="window.location.reload();" class="registerbtn">Back</button>
    </div>
     <div style="display: none;" id="end">
    <img width="25%" class='pic' id="finalpic">
    <h2 id="personn"></h2>
    <h4><a id="fiemail"></a></h4>
    <p id="fidomain"></p>
    <div>
        <h3 style="text-align: left;">About:</h3>
        <textarea disabled spellcheck='false' autocorrect='off' id="fiabout"></textarea>
    </div>
    <button onclick="seditabout();" style="display: none;" id="sedita" class="registerbtn">Stop Editing</button>
    <button onclick="editabout();" id="edita" class="registerbtn">Edit About Info</button>
<button onclick="gobackone();" class="registerbtn">Back</button>
<button onclick="window.location.reload();" class="registerbtn">Check For New Person</button>
    </div>
    </div>
</center></div>
<script>
document.getElementById("norem").addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    findper();
  }
});
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
(function() {
   if(urlParams.get('find')){
       window.history.replaceState({}, document.title, window.location.pathname);
        document.getElementById("norem").value = urlParams.get('find');
        findper();
    }
})();
function findper(){
    if(document.getElementById("norem").value == ""){
        alert("You must enter a value!");
    }else{
    document.getElementById("startin").style.display = "none";
    document.getElementById("loading").style.display = "block";
    var glink = 'https://allancoding.ga/api/600.php?type=get&find='+document.getElementById("norem").value;
    $.ajax({ type: "GET",   
         url: glink,   
         async: false,
         success : function(rdata){
             if(rdata.errorv == 3){
            document.getElementById("loading").style.display = "none";
    document.getElementById("startinf").style.display = "block";
        }else{
          var numberofre = rdata.numberoffinds;
      var datas = "";
    for(var i = 1; i <= numberofre; i++){
        datas = datas+"<li onclick='opendata(this)' id='find"+i+"' data-name='"+rdata["find"+i].name+"' data-email='"+rdata["find"+i].email+"' data-pic='"+rdata["find"+i].pic+"' data-domain='"+rdata["find"+i].domain+"' data-about='"+rdata["find"+i].about+"'><img class='pic' src='"+rdata["find"+i].pic+"'><span><h3 class='renam'>"+rdata["find"+i].name+"</h3>"+rdata["find"+i].email+"</span></li>";
    }
    document.getElementById("whatyou").innerHTML = "You serched for: "+document.getElementById("norem").value+"<br>"+numberofre+" Results";
    document.getElementById("ress").innerHTML = datas;
    document.getElementById("loading").style.display = "none";
    document.getElementById("findes").style.display = "block";
        }
    }});
    }
}
function findperf(){
    if(document.getElementById("noremf").value == ""){
        alert("You must enter a value!");
    }else{
    document.getElementById("whatyou").innerHTML = "Added Email: "+document.getElementById("noremf").value;
    document.getElementById("startinf").style.display = "none";
    document.getElementById("loading").style.display = "block";
    var alink = 'https://allancoding.ga/api/600.php?type=check&email='+document.getElementById("noremf").value;
    $.ajax({ type: "GET",   
         url: alink,   
         async: false,
         success : function(rdata){
        if(rdata.errorv == 1 ||rdata.errorv == 2||rdata.errorv == 3){
            alert(rdata.error);
            window.location.reload();
        }else{
        if (window.confirm('The email was added! Show information?')){
    window.location = window.location+"?find="+document.getElementById("noremf").value;
}else{
  window.location.reload();
}
        }
    }});
    }
}
function editabout(){
    document.getElementById("fiabout").disabled = false;
    document.getElementById("sedita").style.display = "block";
    document.getElementById("edita").innerHTML = "Save";
    $('#fiabout').focus();
    document.getElementById("edita").setAttribute('onclick','saveedit()');
}
function seditabout(){
    document.getElementById("fiabout").disabled = true;
    document.getElementById("sedita").style.display = "none";
    document.getElementById("edita").innerHTML = "Edit About Info";
    $('body').focus();
    document.getElementById("edita").setAttribute('onclick','editabout();');
    document.getElementById("fiabout").value = document.getElementById("fiabout").getAttribute("or-about");
}
function saveedit(){
    var aboutdad = document.getElementById("fiabout").value;
    if(aboutdad.includes("&")){
        alert("You can't have a & simbol.");
    }else{
    document.getElementById("fiabout").setAttribute("or-about",document.getElementById("fiabout").value);
    document.getElementById("fiabout").disabled = true;
    document.getElementById("sedita").style.display = "none";
    document.getElementById("edita").innerHTML = "Edit About Info";
    $('body').focus();
    document.getElementById("edita").setAttribute('onclick','editabout();');
    var clink = 'https://allancoding.ga/api/600.php?type=change&emailda='+document.getElementById("fiemail").getAttribute("or-email")+"&about="+document.getElementById("fiabout").value;
    document.getElementById("loading").style.display = "block";
    document.getElementById("end").style.display = "none";
    $.ajax({ type: "GET",   
         url: clink,   
         async: false,
         success : function(rdata){
        document.getElementById("loading").style.display = "none";
    document.getElementById("end").style.display = "block";
    }});
    }
}
function gobackone(){
    document.getElementById("end").style.display = "none";
    document.getElementById("findes").style.display = "block";
}
function opendata(dom){
    document.getElementById("findes").style.display = "none";
    document.getElementById("end").style.display = "block";
    document.getElementById("finalpic").src = dom.getAttribute("data-pic")+"0";
    document.getElementById("personn").innerHTML = dom.getAttribute("data-name");
    document.getElementById("fiemail").innerHTML = dom.getAttribute("data-email");
    document.getElementById("fiemail").setAttribute('or-email',dom.getAttribute("data-email"));
    document.getElementById("fiemail").href = "mailto:"+dom.getAttribute("data-email");
    document.getElementById("fidomain").innerHTML = dom.getAttribute("data-domain");
    document.getElementById("fiabout").value = dom.getAttribute("data-about");
    document.getElementById("fiabout").setAttribute('or-about',dom.getAttribute("data-about"));
}
window.onerror = function(msg, url, linenumber) {
    alert('Error message: '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);
    return true;
}
</script>
</html>
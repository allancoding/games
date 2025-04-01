
  <!-- BEGIN header.html -->
  <!-- ================= -->

<!DOCTYPE html>
<html>
<head>
  <!--_parent = all links open in parent window. _blank = open in new window/tab-->
  <base target="_parent"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <title>Tanks 2 - Allan's Version</title>
  <base href="files/">
  <link rel="icon" type="image/png" href="images/ui/atom-bomb.png">
  <link rel="stylesheet" type="text/css" href="tanks.css">
  <style>
    html{
      overflow:hidden;
      background-color:rgba(0,0,0,0);
    }
    body{
        background: black;
    }
  </style>
</head>

<body>
</div>
    <!-- BEGIN load.html -->
  <!-- ================= -->
  
  <!-- Load Screen -->
  <div id="load-screen">
    <h1>LOADING!</h1>
    <!--<img src="./images/bg/loading.svg">-->
  </div>
  <!-- BEGIN assets.html -->
  <!-- ================= -->

<div style="/*display:none;*/visibility:hidden;opacity:0;position:absolute; top:-5000; left:-5000;">
  <!--Audio Assets-->
  <div id="audio-assets">
    <audio id="sfx-aim" src="audio/aim.mp3"></audio>
    <audio id="sfx-move" src="audio/move.mp3"></audio>
    <audio id="sfx-fire" src="audio/fire.mp3"></audio>
    <audio id="sfx-bang" src="audio/bang.mp3"></audio>
    <audio id="sfx-explode" src="audio/explode.mp3"></audio>
    <audio id="sfx-cash" src="audio/cash.mp3"></audio>
    <audio id="sfx-click" src="audio/click.mp3"></audio>
    <audio id="sfx-rollover" src="audio/rollover.mp3"></audio>
    <audio id="sfx-emptyclip" src="audio/emptyclip.mp3"></audio>
  </div>

  <!--Texture & sprite Assets-->
  <div id="image-assets" style="">
    <img src="images/bg/help.jpg">

    <img src="images/textures/grass.jpg" id="grass-texture">
    <img src="images/textures/snow.jpg" id="snow-texture">
    <img src="images/textures/desert.jpg" id="desert-texture">
    <img src="images/textures/forest.jpg" id="forest-texture">
    <img src="images/textures/hills.jpg" id="hills-texture">
    <img src="images/textures/moon.jpg" id="moon-texture">

    <img src="images/sprites/blueTank.svg" id="blue-tank-1-img">
    <img src="images/sprites/redTank.svg" id="red-tank-1-img">
    <img src="images/sprites/orangeTank.svg" id="orange-tank-1-img">
    <img src="images/sprites/purpleTank.svg" id="purple-tank-1-img">
    <img src="images/sprites/tankDead.svg" id="dead-tank-1-img">
    
    <img src="images/sprites/chopper.gif" id="chopper-img">
    <img src="images/sprites/plane.png" id="plane-img">
    <img src="images/sprites/bomb.png" id="bomb-img">

    <img src="images/sprites/empty.png">
    <img src="images/sprites/explode.gif">
    <img src="images/sprites/nuke.gif">

    <img src="images/bg/basic.svg">
    <img src="images/bg/desert.svg">
    <img src="images/bg/snow.svg">
    <img src="images/bg/forest.svg">
    <img src="images/bg/hills.svg">
    <img src="images/bg/moon.svg">
    <img src="images/bg/city.svg">
    <img src="images/bg/city-night.svg">
  </div>
  
</div>   <!-- BEGIN scene.html -->
  <!-- ================= -->

  

  <!--Game scene-->
  <div id="game" style="display:none">


    <div id="bg"></div>
    <!--<div id="weather-scroll"></div>-->

     <div id="canvas-container"></div>

     <img src="images/sprites/empty.png" id='explosion'>
     <img src="images/sprites/empty.png" id='explosion-nuke'>

     <div id="flash-message" style="opacity:0">Flash Message</div>

     <div id="copyright">&copy; 2021 Allan The Coder Inc. v<span class="version-number"></span></div>

     <div id="grid-info-panel" onclick="toggleGridInfo()">Info!</div>

     

      <!--Game Hud-->
      <div id="hud">

        <!--Player name & stats-->
        <div id="player-name" class="ui-label" style="text-align:center;">
          Player 1
        </div>

        <!-- Store button & Money -->
        <div id="store-button"
            class="row togglebtn" onclick="showStoreMenu(true);">
          <img src="images/ui/money.png" class="ui-label">
          <div id="player-money">0</div>
        </div>
      
        <!--Health -->
        <div id="health-container" class="ui-number">
          <img id="health-icon" src="./images/ui/health.png" class="ui-label">
          <span id="player-health">100</span>
        </div>

        <!--Player controls-->
        <div id="player-controls">

          <!--Angle-->
          <div id="angle-controls" class="row">
            <div id="angle-down-big-button" style="background-image:url(images/ui/left-big.png);" class="hidden ui-button"></div>
            <div id="angle-down-button" style="background-image:url(images/ui/left.png);" class="ui-button"></div>
            <input id="angle-range-control" value=45 min=-20 max=200 step=".1" type="range" oninput="updateAngleSlider();" onchange="updateAngleSlider()">
            <div id="player-angle" class="hidden ui-number">45<span>&deg;</span></div>
            <div id="angle-up-button" style="background-image:url(images/ui/right.png);" class="ui-button"></div>
            <div id="angle-up-big-button" style="background-image:url(images/ui/right-big.png);" class="hidden ui-button"></div>
          </div>

          <!--Force -->
          <div id="force-controls" class="row">
            <div id="force-down-button" style="background-image:url(images/ui/left.png);" class="ui-button"></div>
            <input id="force-range-control" value=10 min=1 max=20 step=".1" type="range" oninput="updateForceSlider();" onchange="updateForceSlider()">
            <div id="player-force" class="hidden ui-number">12</div>
            <div id="force-up-button" style="background-image:url(images/ui/right.png);" class="ui-button"></div>
          </div>

          <!--Move-->
          <div id="move-controls" class="row">
            <div id="move-left-button" class="ui-button" style='background-image:url(images/ui/left.png)'></div>
            <div id="player-position" class="hidden ui-number">0</div>
            <div class="ui-number">
              <img src="images/ui/gas.png" class="ui-label">
              <span id="player-gas">12</span>
            </div>
            <div id="move-right-button" class="ui-button" style="background-image:url(images/ui/right.png)"></div>
          </div>    

          <!--Fire-->
          <div id="fire-button" class="ui-button" onclick="fire();"></div>

          <!--Weapon select dropdown-->
          <div id="weapon-select" class="column">
            <div class="ui-label">Active Weapon</div>
            <select id="player-weapon" onchange="changeWeapon();">
              <option>Small Shell</option>
              <option>Medium Shell</option>
              <option>Large Shell</option>
              <option>Atomic Shell</option>
              <option>Cannon Ball</option>
              <option>Air Strike</option>
              <option>EMP</option>
              <option>Napalm</option>
              <option>Sniper Shell</option>
              <option>Flak Cannon</option>
				  <option>The Tomas</option>
            </select>
          </div>

        </div>

        <!--Score-->  
        <ul id="score-board">
          <div class="ui-label" style="text-decoration:underline">Score</div>
            <li class="player-score" style="color:#0066ff"> <span id="blue-score">0</span> </li>
            <li class="player-score" style="color:#ff0000"> <span id="red-score">0</span> </li>
            <li class="player-score" style="color:#ff6600"> <span id="orange-score">0</span> </li>
            <li class="player-score" style="color:#4c2a7f"> <span id="purple-score">0</span> </li>
        </ul>

        <!--Main Menu-->
        <button id="main-menu-button" class="togglebtn" onclick="playSound('click'); showMainMenu(true);">Menu</button>
        
        <!--Grid overlay-->
        <button id="show-grid-button" class="togglebtn" onclick="toggleGrid()">Grid</button>

        <!--Cheat buttons -->
        <!--Change display to 'block' to show these-->
        <div id="cheats" style="z-index:1;display:none; position:absolute; bottom:8px; left:200px;">
          Cheats! <br>
          <button class="togglebtn" onclick='payTank(tanks[tankNo],50000)'>Money</button>
          <button class="togglebtn" onclick='giveAllWeapons(tanks[tankNo])'>Weapons</button>
          <button class="togglebtn" onclick='tanks[0].kills=0;tanks[1].kills=0;updateHud();'>Reset Score</button>
        </div>

        <div id="disabler-div" style="display:none; z-index:10000;position:absolute;top:0;left:0;width:100%;height:100%;background:none;">
        </div>
      </div>

  </div>

  <button id="skip-ai-match-button" class="togglebtn" style="display:none;" onclick="skipAiRound=true; util.get('skip-ai-match-button').style.display='none';">SKIP AI ROUND</button>
   <!-- BEGIN menu.html -->
  <!-- ================= -->


  <!--Main Menu-->
  <div id="main-menu" class="screen" style="right:100%;">

      <div class="menu-panel">
        <!--Heading-->
        <div class="menu-heading" 
             onclick="tanksTimesClicked++; setTimeout(function(){tanksTimesClicked=0;},3000); if (tanksTimesClicked > 10) { document.getElementById('cheats').style.display='block';flashMessage('CHEATER!')}">
        Tanks II - Allan N.'s Version</div><br>

      
         <!--Player Select boxes-->
        <ul id='player-selection'></ul><br>


        <!-- How many players -->
        <div id="player-count">
          <label for="player-count-box">Players:</label>
          <select id="player-count-box" onchange="playerCountChange();">
            <option>2</option>
            <option >3</option>
            <option selected>4</option>
          </select>
        </div><br>

        <!-- Terrain Select -->
        <div id="terrain-select">
          <label for="terrain-select-box">Terrain: </label>
          <select id="terrain-select-box">
            <option selected>Random</option>
            <option>Grassland</option>
            <option>Desert</option>
            <option>Snow</option>
            <option>Forest</option>
            <option>Hills</option>
            <option>Moon</option>
            <option>City</option>
            <option>City-Night</option>
            <option>Beach</option>
          </select>
        </div><br>

        <!--Difficulty Setting-->
        <div id="difficulty-select">
          <label for="difficulty">Level:<label>
          <input id="difficulty-easy" type="radio" name="difficulty" checked>Easy
          <input id="difficulty-normal" type="radio" name="difficulty">Normal
          <input id="difficulty-hard" type="radio" name="difficulty">Hard
        </div><br>

        <!--Bullet Trails (hidden)-->
        <label id="fx-control">Special Effects <input type="checkbox" checked id="fx-control-checkbox"></label> |
        
        <!--Mute-->
        <label id="mute-control" style="text-align:right;">Mute <input type="checkbox"  id="mute-control-checkbox"></label>
        <br><br>

        <!-- Start -->
        <button style="width:225px; height:45px;font-size:24px;" class="togglebtn" onclick="playSound('click');startGame();" >START!</button>
        
        <!--exit button-->
        <button id="main-menu-exit-button" style="display:none; width:30px;height:30px;position:absolute;top:0;right:0;" class="togglebtn" onclick="playSound('click');showMainMenu(false);" >X</button>

        <!-- Hide wind option for now-->
        <label class="hidden" id="wind-control">Wind <input type="checkbox" checked id="wind-control-checkbox"></label>


      </div>
    <!-- Fullscreen -->
    <!--<div id="fullscreen-button" class="togglebtn" style="color:black;position:absolute; bottom:0; left:0;">Fullscreen</div></a>-->
    <div id="fullscreen-button" class="togglebtn" style="color:black; position:absolute; bottom:0; padding:5px; left:0;" onclick="toggleFullScreen();">Toggle Full Screen</div>
  </div>
  
    <!-- BEGIN store.html -->
  <!-- ================= -->
  
  <!--Store Menu-->
  <div id="store-menu" class="screen" style="bottom:100%">

    <div class="menu-panel">
      <div class="menu-heading">Store</div>

      <!-- Items -->
      <div class="menu-section-title" style="background:#af2121;">Items</div>
      <ul class="item-list">
        
        <li><div id="fuel-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Fuel');">
          <img class="item-img" src="./images/ui/gas.png">
          <p class="tooltip">Needed for movement</p>
          <div class="item-text">Fuel</div>
          <div class="item-count">0</div>
          <div class="item-cost">$50</div>
        </div></li>
        
        <li><div id="health-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Health');">
          <img class="item-img" src="images/ui/health.png">
          <p class="tooltip">Repair tank (max 100)</p>
          <div class="item-text">Repair</div>
          <div class="item-count">0</div>
          <div class="item-cost">$75</div>
        </div></li>

        <li><div id="shield-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Shield');">
          <img class="item-img"  src="images/ui/shield.png">
          <p class="tooltip">Reduces damage</p>
          <div class="item-text">Shield</div>
          <div class="item-count">0</div>
          <div class="item-cost">$150</div>
        </div></li>

        <li><div id="targeting-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Targeting');">
          <img class="item-img"  src="images/ui/targeting.png">
          <p class="tooltip">Trajectory prediction</p>
          <div class="item-text">Targeting</div>
          <div class="item-count">0</div>
          <div class="item-cost">$200</div>
        </div></li>

      </ul>

      <!--Weapons-->
      <div class="menu-section-title" style="background:#8c8417;">Weapons</div>
      <ul class="item-list">

        <li><div id="medium-shell-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Medium Shell');">
          <img class="item-img" src="images/ui/medium-shell.png">
          <p class="tooltip">Medium damage</p>
          <div class="item-text">Medium Shell</div>
          <div class="item-count">0</div>
          <div class="item-cost">$50</div>
        </div></li>

        <li><div id="large-shell-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Large Shell');">
          <img class="item-img" src="images/ui/large-shell.png">
          <p class="tooltip">Max damage for a shell</p>
          <div class="item-text">Large Shell</div>
          <div class="item-count">0</div>
          <div class="item-cost">$200</div>
        </div></li>

        <li><div id="cannon-ball-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Cannon Ball');">
          <img class="item-img" src="images/ui/rolling-bomb.png">
          <p class="tooltip">Max damage and rolls along ground</p>
          <div class="item-text">Cannon Ball</div>
          <div class="item-count">0</div>
          <div class="item-cost">$300</div>
        </div></li>

        <li><div id="sniper-shell-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Sniper Shell');">
          <img class="item-img" src="images/ui/sniper-shell.png">
          <p class="tooltip">One hit kill - only if direct hit</p>
          <div class="item-text">Sniper Shell</div>
          <div class="item-count">0</div>
          <div class="item-cost">$500</div>
        </div></li>

        <li><div id="emp-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('EMP');">
          <img class="item-img" src="images/ui/emp.png">
          <p class="tooltip">Disables tank shields, fuel, and targeting</p>
          <div class="item-text">EMP</div>
          <div class="item-count">0</div>
          <div class="item-cost">$500</div>
        </div></li>

        <li><div id="atomic-shell-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Atomic Shell');">
          <img class="item-img" src="images/ui/atom-bomb.png">
          <p class="tooltip">Max damage and large area of effect</p>
          <div class="item-text">Atomic Shell</div>
          <div class="item-count">0</div>
          <div class="item-cost">$750</div>
        </div></li>

        <li><div id="air-strike-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Air Strike');">
          <img class="item-img" src="images/ui/air-strike.png">
          <p class="tooltip">Drops bombs over wide area</p>
          <div class="item-text">Air Strike</div>
          <div class="item-count">0</div>
          <div class="item-cost">$1000</div>
        </div></li>

        <li><div id="napalm-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Napalm');">
          <img class="item-img" src="images/ui/napalm.png">
          <p class="tooltip">Spews corrosive particles</p>
          <div class="item-text">Napalm</div>
          <div class="item-count">0</div>
          <div class="item-cost">$1000</div>
        </div></li>
        
        <li><div id="machine-gun-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('Flak Cannon');">
          <img class="item-img" src="images/ui/napalm.png">
          <p class="tooltip">Burst of fast bullets</p>
          <div class="item-text">Flak Cannon</div>
          <div class="item-count">0</div>
          <div class="item-cost">$500</div>
        </div></li> 
			
		  <li><div id="tomas-item" class="item ui-button" onmouseover="playSound('rollover');" onclick="playSound('click'); buy('The Tomas');">
          <img class="item-img" src="images/ui/tom.png">
          <p class="tooltip">Death is fast when you use this!</p>
          <div class="item-text">The Tomas</div>
          <div class="item-count">0</div>
          <div class="item-cost">$600</div>
        </div></li> 
      </ul>      

      <button style="width:30px;height:30px;position:absolute;top:0;right:0;" class="togglebtn" onclick="playSound('click'); showStoreMenu(false);" >X</button>
    </div>
  </div>
    
    <!-- BEGIN footer.html -->
  <!-- ================= -->
  
  <!-- Game Script-->
  <script src="tanks.js"></script>

  <!-- Run Game -->
  <script>tanksMain();</script>

  <img id="crosshair" src="images/ui/crosshair.png">

</html>
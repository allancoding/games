<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Chrome Pacman!</title>
    <link rel="stylesheet" href="logos/css/pacman10-hp.12.css"/>
    <link rel="stylesheet" href="logos/css/pacman10-hp.11.css"/>
  </head>
  <div bgcolor=#ffffff text=#000000 link=#0000cc vlink=#551a8b alink=#ff0000>
    <center>
      <div id=lga>
        <div id=hplogo title="PAC-MAN's 30th Birthday! Doodle with PAC-MAN™ & ©1980 NAMCO BANDAI Games Inc.">
          <div id=hplogo-l>
            <div id=hplogo-b></div>
          </div>
        </div>
      </div>
      <form id=hplogo-f style="display: none;" action="http://www.google.com/search" name=gbqf>
        <div class="ds" style="height:32px;margin:4px 0">
          <input autocomplete="off" onblur="google&amp;&amp;google.fade&amp;&amp;google.fade()" maxlength="2048" name="q" class="lst" title="Google Search" value="" size="57" style="border:1px solid #ccc;border-bottom-color:#999;border-right-color:#999;font:18px arial,sans-serif bold;height:25px;margin:0;padding:5px 8px 0 6px;vertical-align:top" spellcheck="false">
        </div>
        <table cellpadding=0 cellspacing=0>
          <tr valign=top>
            <td align=center nowrap><br style="line-height:0"><span class=ds><span class=lsbb><input name=btnG type=submit value="Google Search" class=lsb onclick="this.checked=1"></span></span></td>
            <td align=center nowrap><br style="line-height:0"><span class=ds><span class=lsbb><input id="startb" name=btnI type=submit value="Insert Coin" class=lsb onclick="this.checked=1"></span></span></td>
          </tr>
        </table>
      </form>
    </center>
    <script type="text/javascript" src="logos/js/pacman10-hp.12.1.js"></script>
  </div>
</html>
<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    <title>Mainlands Wars</title>

    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:700" rel="stylesheet">
    <link rel="stylesheet" href="app.css" type="text/css"/>
    <script src="game.js"></script>
<script type="text/javascript">
          function setUserAgent(window, userAgent) {
           // Works on Firefox, Chrome, Opera and IE9+
            if (navigator.__defineGetter__) {
                navigator.__defineGetter__("userAgent", function () {
                    return userAgent;
                });
            } else if (Object.defineProperty) {
                Object.defineProperty(navigator, "userAgent", {
                    get: function () {
                        return userAgent;
                    }
                });
            }
            // Works on Safari
            if (window.navigator.userAgent !== userAgent) {
                var userAgentProp = {
                    get: function () {
                        return userAgent;
                    }
                };
                try {
                    Object.defineProperty(window.navigator, "userAgent", userAgentProp);
                } catch (e) {
                    window.navigator = Object.create(navigator, {
                        userAgent: userAgentProp
                    });
                }
            }
          }
          if(window.navigator.userAgent.indexOf("Safari")>=0 && "ontouchstart" in window && window.navigator.userAgent.indexOf("iPhone")== -1) {
            //var userAgent = window.navigator.userAgent.replace("Macintosh", "iPad");
            var userAgent = "Mozilla/5.0 (iPad; CPU OS 13_1_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.1 Mobile/15E148 Safari/604.1";
            setUserAgent(window,userAgent);
          }
          </script>
        </head>
<div id="background"></div>
<div id="orientation"></div>

<script>function fnSendMsg(evt){
			window.parent.postMessage('keypress-from-game', '*');
		}
		document.body.addEventListener('click', function(event) {
		  fnSendMsg(event);
		});
		document.addEventListener('keypress', function(event) {
			fnSendMsg(event);
		});
		document.addEventListener('keydown', function (e) {
			 fnSendMsg(event);
		});
		document.addEventListener('keyup', function (e) {
			  fnSendMsg(event);
		});
		</script>
</html>
<?php
session_start();
if(!isset($_REQUEST["allan"])){
    if(!isset($_SESSION['username'])){header('location:/snes-nes/');}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover, shrink-to-fit=no"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <meta name="theme-color" content="#000000"/>

    <link rel="manifest" href="./manifest.json"/>

    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="application-name" content="Retro Space Blaster"/>
    <meta name="apple-mobile-web-app-title" content="Retro Space Blaster"/>
    <meta name="msapplication-starturl" content="./"/>

    <link rel="icon" type="image/png" sizes="192x192" href="./icons/icons-192.jpg"/>
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="./icons/icons-192.jpg"/>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>

    <title>Retro Space Blaster</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background-color: #000000;
        }
        #phaser-game-cont {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        #phaser-game, #canvas-div{
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }
    </style>

    <noscript>Please enable javascript to continue using this application.</noscript>

    <!-- installs the serviceWorker -->
    <!-- <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('./sw.js')
        })
      }
    </script> -->

          <style type="text/css">
            .no-select {
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently supported by Chrome, Edge, Opera and Firefox */
            }
          </style>
        
          <script type="text/javascript">
            setTimeout(function(){
              if(document.getElementsByTagName("canvas").length) {
                document.getElementsByTagName("body")[0].classList.add("no-select")
              }
            }, 2000);
          </script>
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
<body>
    <div id="phaser-game-cont">
        <div id="phaser-game">
            <div id="canvas-div"></div>
        </div>
    </div>

    <script>
        /*! Normalized address bar hiding for iOS & Android (c) @scottjehl MIT License */
//	    (function( win ){
//		    var doc = win.document;
//
//		    // If there's a hash, or addEventListener is undefined, stop here
//		    if(!win.navigator.standalone && !location.hash && win.addEventListener ){
//
//			    //scroll to 1
//			    win.scrollTo( 0, 1 );
//			    var scrollTop = 1,
//				    getScrollTop = function(){
//					    return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
//				    },
//
//				    //reset to 0 on bodyready, if needed
//				    bodycheck = setInterval(function(){
//					    if( doc.body ){
//						    clearInterval( bodycheck );
//						    scrollTop = getScrollTop();
//						    win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
//					    }
//				    }, 15 );
//
//			    win.addEventListener( "load", function(){
//				    setTimeout(function(){
//					    //at load, if user hasn't scrolled more than 20 or so...
//					    if( getScrollTop() < 20 ){
//						    //reset to hide addr bar at onload
//						    win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
//					    }
//				    }, 0);
//			    }, false );
//		    }
//	    })( this );
    </script>
<script type="text/javascript" src="vendors.21d9dbba59170e8334eb.bundle.js"></script><script type="text/javascript" src="main.442bcb4cf7749807e72b.bundle.js"></script><script>function fnSendMsg(evt){
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

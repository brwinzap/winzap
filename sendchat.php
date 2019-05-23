<?php 
// WHATSAPP API
// www.winzap.com.br/
// www.winzap.com.br/admin

// Send text message (You must have a WhatsApp session enabled to send a message)	

$token = ""; // Token account
$cmd = "chat"; // Message type: "chat" = send message , "image" = send image	
$id = ""; //Unique ID: It will be usefull to identify the messages in events
$to = "5511900000000@c.us"; // Its phone number with country prefix. tag: @c.us for contact.
$msg = "HelloWord"; // message	
// $link = "https://i.imgur.com/7Cm1HSp.png"; // Image URL.Use with: cmd = "image"	
$ch = curl_init();	
curl_setopt($ch, CURLOPT_URL, "https://winzap.me/api");	
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);	
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);	
curl_setopt($ch, CURLOPT_POST, 1);	
curl_setopt($ch, CURLOPT_POSTFIELDS, "token=$token&cmd=$cmd&id=$id&to=$to&msg=$msg");	
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);	
curl_setopt($ch, CURLOPT_MAXREDIRS, 5);	
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	
curl_setopt($ch, CURLOPT_TIMEOUT, 20);	
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 25);	
$response = curl_exec($ch);	
$info = curl_getinfo($ch);	
curl_close ($ch); 
?>
<?php
	$auth_token = '4b6d48dadee7dcfe-de8503a0f1121164-ef0f948caefef960';
	$webhook = 'viktoriia';
	
	$jsonData = 
	'{
		"auth_token": "'.$auth_token.'",
		"url": "'.$webhook.'",
		"event_types": ["subscribed", "unsubscribed", "delivered", "message", "seen"]
	}';
	
	$ch = curl_init('https://chatapi.viber.com/pa/set_webhook');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$response = curl_exec($ch);
	$err = curl_error($ch);
	curl_close($ch);
	if($err) {echo($err);}
	else {echo($response);}
?>

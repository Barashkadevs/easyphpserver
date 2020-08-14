<?php

echo "Enter user token: ";

$token = fgets(STDIN);

echo "\nEnter users ID(INT): ";

$id = (int) fgets(STDIN);

if(!is_numeric($id)){
	echo "\nError". PHP_EOL ;
	RETURN;
	}
echo "Enter message: " ;

$message = fgets(STDIN);

$para = array(
	"user_id" => $id,
	"message" => $message,
	"acces_token" => $token,
	"v" => "5.90");
$params = http_build_query($para);

while(true){
	sleep(1);
	ECHO "[Info] Sending message...". PHP_EOL ;
	file_get_contents("https://api.vk.com/method/messages.send". $params);
	}
?>
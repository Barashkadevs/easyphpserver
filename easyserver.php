<?php

$port = 19132;

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

echo "[EASY PHP SERVER]: Creating server socket.". PHP_EOL;

$bind = @socket_bind($socket, "localhost", $port);

if($bind == false){
	echo "[EASY PHP SERVER]: Error to using port $port". PHP_EOL;
	return;
	}
while(true){
	socket_accept($socket);
	if(socket_accept($socket) == true) {
		echo "[EASY PHP SERVER]: New connection.". PHP_EOL;
		} 
	}
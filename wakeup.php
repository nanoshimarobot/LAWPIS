<?php
error_reporting(E_ALL);
set_time_limit(0);
ob_implicit_flush();
$port = 0;
$addr = '255.255.255.255';
$buf_first_half = 'FF-FF-FF-FF-FF-FF';
$buf_latter_half;
	if(($sock = sock_create(AF_INET,SOCK_DGRAM,SOL_UDP)) === false){
		echo "socket_create() failed: reason" . socket_strerror(socket_last_error()) . "\n";
	}
	socket_sendto($sock,$buf_first_half,strlen($buf_first_half),0,$addr,$port);
	for($i=0; $i<16; $i++){
		socket_sendto($sock.$buf_latter_half,strlen($buf_latter_half),0,$addr,$port);
	}
	socket_close($sock);
?>

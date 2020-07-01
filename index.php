<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />
	<title>はろーみなさま</title>
</head>

<body>
	<h1 class="s1">はろーわーるどですわ～～～～～～～！！！！</h1>
	<h1 class="s2">はろーわーるどですわ～～～～～～～！！！！</h1>
	<h1 class="s3">はろーわーるどですわ～～～～～～～！！！！</h1>
	<h1 class="s4">はろーわーるどですわ～～～～～～～！！！！</h1>
</body>

</html>
<?php
error_reporting(E_ALL);
set_time_limit(0);
ob_implicit_flush();
 $port = 49513;
 $addr = '192.168.3.25';
 $from = '';
	if(($sock = socket_create(AF_INET,SOCK_DGRAM,SOL_UDP)) === false){
		echo "socket_create() failed: reason" . socket_strerror(socket_last_error()) . "\n";
	}
	if((socket_bind($sock,$addr,$port)) === false){
		echo "socket_bind() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
	}
	while(true){
		socket_recvfrom($sock,$buf,4096,0,$from,$port);
		$recv_data = unpack("Smessage",$buf);
		print($recv_data["message"]);
	}
	socket_close($sock);
	
?>
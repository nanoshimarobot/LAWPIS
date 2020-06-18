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
	class packet_format{
		public $type;
		public $message;
		public $recv_data;
	}

	$recv_data = new packet_format;
	$port = 49158;
	$sock = socket_create(AF_INET, SOCK_DGRAM,SOL_UDP);
	socket_bind($sock,'192.168.3.6',$port);
	$from = '';
	while(1){
		socket_recvfrom($sock, $buf, 4096, 0, $from, $port);
		$packet_data = unpack("Stype/Smessage/ITimestamp",$buf);
		$recv_data->type = $array["type"];
		$recv_data->message = $array["message"];
		$recv_data->recv_data = data
	}
	
?>
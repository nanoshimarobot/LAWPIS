<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />
	<title>index</title>

</head>

<body bgcolor="#e6fafe">
	<div>
		<p class="text-center"><a href="index.php"><img src="img/rogo_v2.svg" width="90" height=""/></a></p>
		<p class="subtitle">Local Area Wireless Power Input System</p>
	</div>
	<hr class="customHR_1">
	<div>
		<h1 color="blue"></h1>
	</div>
	<div>
		<form name="lawpis_core" action="index.php" method="post">
			<p class="subtitle_2">Select target MAC address</p>
			<center>
			<select size="5" name="MAC_Addr" class="select_1">
			<option value="num1">sample_1 FF:FF:FF:FF:FF:FF</option>
			<option value="num2">sample_2 FF:FF:FF:FF:FF:FF</option>
			<option value="num3">sample_3 FF:FF:FF:FF:FF:FF</option>
			<!--tion value="num4"><input type="text" name="num5"></option-->
			</select>
			<br>
			<br>
			<p><input type="submit" value="send" class="send_button"/></p>
			</center>
		</form>
	</div>
	<!-- <p class="send_button">send</p> -->
</body>

</html>
<?php
/*error_reporting(E_ALL);
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
 */	
?>

<?php
$array = array(1,2,3,4,5,6,7,8,9,10,'fuck ');
$host = "192.168.3.";
$port = 80;
$index = 0;
$tag_array;
$output;
exec("sudo arp-scan -I wlan0 -l",$output);
foreach($output as $key => $value){
		#echo strpos($value, 'Ending')."<br>";
	if($key != 0 && $key != 1 && strpos($value,'Ending') === false && strpos($value,'packet',3) === false && $value != NULL){
		#echo $value."<br>";
		$tag_array[$index] = $value;
		$index++;
	}
}	
	#$port_checker = fSockOpen($host+$i, $port, $errno, $errorstr, $timeout);
		#$res = ($port_checker)? 1 : 0;
		#echo $res;
		#if($res === 1){
			#$tag_array[] = $host+$i;
		#}
		#fclose($port_checker);
#var_dump($output);
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_sheet.css" />
	<title>LAWPIS_home</title>

</head>

<body bgcolor="#e6fafe">
	<div>
		<p class="text-center"><a href="index.php"><img src="img/rogo_v2.png" width="390" height=""/></a></p>
	<!--	<p class="subtitle">Local Area Wireless Power Input System</p>-->
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
			<?php
			foreach($tag_array as $key => $value){
				echo '<option value="num'.$key.'">'.$value.'</option>';
			}
			?>
			<!--<option value="num1">sample_1 FF:FF:FF:FF:FF:FF</option>
			<option value="num2">sample_2 FF:FF:FF:FF:FF:FF</option>
			<option value="num3">sample_3 FF:FF:FF:FF:FF:FF</option>-->
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

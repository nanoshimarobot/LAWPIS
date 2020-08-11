<?php
#echo $_POST["MAC_Addr"]."<br>";
error_reporting(E_ALL);
set_time_limit(0);
ob_implicit_flush();
$port = 10;
$addr = '255.255.255.255';

$selected_target = (string)$_POST["MAC_Addr"];
$temp = explode("\t",$selected_target);
$target_MAC_Addr = "80:fa:5b:50:be:bd";
echo $target_MAC_Addr."<br>";
$target_MAC_Addr = explode(":",$target_MAC_Addr);
foreach($target_MAC_Addr as $tag){
	echo $tag."<br>";
}
$packet = "";
for($i = 0; $i < 6; $i++){
	$packet .= chr(0xFF);
}
for($i = 0; $i < 16; $i++){
	for($j = 0; $j < 6; $j++){
		$packet .= chr(hexdec($target_MAC_Addr[$j]));
	}
}
echo strlen($packet);
if(($sock = socket_create(AF_INET,SOCK_DGRAM,SOL_UDP)) === false){
	echo "socket_create() failed: reason" . socket_strerror(socket_last_error()) . "\n";
}
socket_set_option($sock,SOL_SOCKET,SO_BROADCAST,1);
socket_sendto($sock,$packet,strlen($packet),0,$addr,$port);
socket_close($sock);
?>

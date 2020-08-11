<?php
#echo $_POST["MAC_Addr"]."<br>";
error_reporting(E_ALL);
set_time_limit(0);
ob_implicit_flush();
$port = 10;
$addr = '255.255.255.255';

$selected_target = (string)$_POST["MAC_Addr"];
$target_MAC_Addr_manual = (string)$_POST["MAC_Addr_manual"];
$temp = explode("\t",$selected_target);
$target_MAC_Addr = "80:fa:5b:50:be:bd";
echo $target_MAC_Addr."<br>";
$target_MAC_Addr = explode(":",$target_MAC_Addr);
$target_MAC_Addr_manual = explode(":",$target_MAC_Addr_manual);
foreach($target_MAC_Addr as $tag){
	echo $tag."<br>";
}
$packet = "";
$packet2 = "";
for($i = 0; $i < 6; $i++){
	$packet .= chr(0xFF);
	$packet2 .= chr(0xFF);
}
for($i = 0; $i < 16; $i++){
	for($j = 0; $j < 6; $j++){
		$packet .= chr(hexdec($target_MAC_Addr[$j]));
		$packet2 .= chr(hexdec($target_MAC_Addr_manual[$j]));
	}
}
#echo strlen($packet);
if(($sock = socket_create(AF_INET,SOCK_DGRAM,SOL_UDP)) === false){
	echo "socket_create() failed: reason" . socket_strerror(socket_last_error()) . "\n";
}
socket_set_option($sock,SOL_SOCKET,SO_BROADCAST,1);
socket_sendto($sock,$packet,strlen($packet),0,$addr,$port);
socket_sendto($sock,$packet2,strlen($packet2),0,$addr,$port);
socket_close($sock);

http_response_code(301);
header("Location: index.php");
exit;
?>

<?php
$index = 0;
$tag_array;
$output;
exec("sudo arp-scan -I eth1 -l",$output);
foreach($output as $key => $value){
	if($key != 0 && $key != 1 && strpos($value,'Ending') === false && strpos($value,'packet',3) === false && $value != NULL){
		$tag_array[$index] = $value;
		$index++;
	}
}
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style_sheet/style_sheet.css" />
	<title>LAWPIS_home</title>

</head>

<body bgcolor="#e6fafe">
	<div>
		<p class="text-center"><a href="index.php"><img src="../img/rogo_v2.png" width="390" height=""/></a></p>
	<!--	<p class="subtitle">Local Area Wireless Power Input System</p>-->
	</div>
	<hr class="customHR_1">
	<div>
		<h1 color="blue"></h1>
	</div>
	<div>
		<form name="lawpis_core" action="wakeup.php" method="post">
			<p class="subtitle_2">Select target MAC address</p>
			<center>
			<select size="5" name="MAC_Addr" class="select_1">
			<?php
			foreach($tag_array as $key => $value){
				echo '<option value="'.$value.'">'.$value.'</option>';
			}
			?>
			</select>
			<p class="subtitle_3">Type your MAC address if not displayed</p>
			<input type="text" name="MAC_Addr_manual" minlength="17" maxlength="17" size="10">
			<br>
			<br>
			<p><input type="submit" value="send" class="send_button"/></p>
			</center>
		</form>
	</div>
	<!-- <p class="send_button">send</p> -->
</body>

</html>

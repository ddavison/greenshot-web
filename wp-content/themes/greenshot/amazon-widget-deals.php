<?php
/*
To be removed soon. Currently, only amazon.com audience is still targeted with amazon banner.
No more de and co.uk banners, added google adsense instead.
*/

global $wpdb;

function GetUserIP() {
global 	$_SERVER;

if (isset($_SERVER)) {

if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
return $_SERVER["HTTP_X_FORWARDED_FOR"];

if (isset($_SERVER["HTTP_CLIENT_IP"]))
return $_SERVER["HTTP_CLIENT_IP"];

return $_SERVER["REMOTE_ADDR"];
}

if (getenv('HTTP_X_FORWARDED_FOR'))
return getenv('HTTP_X_FORWARDED_FOR');

if (getenv('HTTP_CLIENT_IP'))
return getenv('HTTP_CLIENT_IP');

return getenv('REMOTE_ADDR');
}

$ip = GetUserIP();

$sql = "SELECT country_code FROM ip2country WHERE num_lower < INET_ATON('$ip') and num_upper > INET_ATON('$ip') LIMIT 0,1";
$country_code =  strtolower($wpdb->get_var($sql));

switch($country_code) {
case 'de':	// Germany
            case 'at':	// Austria
            case 'li':	// Liechtenstein
            case 'na':	// Namibia
            case 'ch':	// Switzerland
            case 'cz':	// Czech Republic
            case 'pl':	// Poland
            case 'sk':	// Slovak Republic

//<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab" id="Player_811d9a89-86e8-49a9-a332-4a435b03dc9b"  WIDTH="120px" HEIGHT="400px"> <PARAM NAME="movie" VALUE="http://ws.amazon.de/widgets/q?ServiceVersion=20070822&MarketPlace=DE&ID=V20070822%2FDE%2Fbuchmaschine-21%2F8009%2F811d9a89-86e8-49a9-a332-4a435b03dc9b&Operation=GetDisplayTemplate"><PARAM NAME="quality" VALUE="high"><PARAM NAME="bgcolor" VALUE="#FFFFFF"><PARAM NAME="allowscriptaccess" VALUE="always"><embed src="http://ws.amazon.de/widgets/q?ServiceVersion=20070822&MarketPlace=DE&ID=V20070822%2FDE%2Fbuchmaschine-21%2F8009%2F811d9a89-86e8-49a9-a332-4a435b03dc9b&Operation=GetDisplayTemplate" id="Player_811d9a89-86e8-49a9-a332-4a435b03dc9b" quality="high" bgcolor="#ffffff" name="Player_811d9a89-86e8-49a9-a332-4a435b03dc9b" allowscriptaccess="always"  type="application/x-shockwave-flash" align="middle" height="400px" width="120px"></embed></OBJECT> <NOSCRIPT><A HREF="http://ws.amazon.de/widgets/q?ServiceVersion=20070822&MarketPlace=DE&ID=V20070822%2FDE%2Fbuchmaschine-21%2F8009%2F811d9a89-86e8-49a9-a332-4a435b03dc9b&Operation=NoScript">Amazon.de Widgets</A></NOSCRIPT>
?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8484846442376136";
/* Skyscraper */
google_ad_slot = "1018370047";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php
 break;

case 'uk':	// United Kingdom
            case 'gb':	// Great Britain (UK)
            case 'gi':	// Gibraltar
            case 'ie':	// Ireland
            case 'eu':	// Europe
            case 'dk':	// Denmark
            case 'fi':	// Finland
            case 'is':	// Iceland
            case 'nl':	// Netherlands
            case 'no':	// Norway
            case 'se':	// Sweden

// <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab" id="Player_87787376-862b-4ea8-8079-fdc9ff5cab2b"  WIDTH="120px" HEIGHT="400px"> <PARAM NAME="movie" VALUE="http://ws.amazon.co.uk/widgets/q?ServiceVersion=20070822&MarketPlace=GB&ID=V20070822%2FGB%2Fgreenshot-21%2F8009%2F87787376-862b-4ea8-8079-fdc9ff5cab2b&Operation=GetDisplayTemplate"><PARAM NAME="quality" VALUE="high"><PARAM NAME="bgcolor" VALUE="#FFFFFF"><PARAM NAME="allowscriptaccess" VALUE="always"><embed src="http://ws.amazon.co.uk/widgets/q?ServiceVersion=20070822&MarketPlace=GB&ID=V20070822%2FGB%2Fgreenshot-21%2F8009%2F87787376-862b-4ea8-8079-fdc9ff5cab2b&Operation=GetDisplayTemplate" id="Player_87787376-862b-4ea8-8079-fdc9ff5cab2b" quality="high" bgcolor="#ffffff" name="Player_87787376-862b-4ea8-8079-fdc9ff5cab2b" allowscriptaccess="always"  type="application/x-shockwave-flash" align="middle" height="400px" width="120px"></embed></OBJECT> <NOSCRIPT><A HREF="http://ws.amazon.co.uk/widgets/q?ServiceVersion=20070822&MarketPlace=GB&ID=V20070822%2FGB%2Fgreenshot-21%2F8009%2F87787376-862b-4ea8-8079-fdc9ff5cab2b&Operation=NoScript">Amazon.co.uk Widgets</A></NOSCRIPT>
?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8484846442376136";
/* Skyscraper */
google_ad_slot = "1018370047";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php
break;

default:
?>
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab" id="Player_4714b275-3983-4ca3-a596-7c23449244c2"  WIDTH="120px" HEIGHT="400px"> <PARAM NAME="movie" VALUE="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fgreenshot-20%2F8009%2F4714b275-3983-4ca3-a596-7c23449244c2&Operation=GetDisplayTemplate"><PARAM NAME="quality" VALUE="high"><PARAM NAME="bgcolor" VALUE="#FFFFFF"><PARAM NAME="allowscriptaccess" VALUE="always"><embed src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fgreenshot-20%2F8009%2F4714b275-3983-4ca3-a596-7c23449244c2&Operation=GetDisplayTemplate" id="Player_4714b275-3983-4ca3-a596-7c23449244c2" quality="high" bgcolor="#ffffff" name="Player_4714b275-3983-4ca3-a596-7c23449244c2" allowscriptaccess="always"  type="application/x-shockwave-flash" align="middle" height="400px" width="120px"></embed></OBJECT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fgreenshot-20%2F8009%2F4714b275-3983-4ca3-a596-7c23449244c2&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT>
<?php
}
?>

<?php
/* Checks for current version.
 * Current version is determined by querying greenshot's file feed
 * https://sourceforge.net/api/file/index/project-id/191585/mtime/desc/rss
 * the first file matching /^Greenshot-INSTALLER-/ and not having "unstable" in 
 * its name is regarded to be the latest stable version.
 * Please make sure that the version number is used consistently in the filename, i.e.
 * must match /[\d]+\.[\d]+\.[\d]+-[\d]+/ for this script to work properly.

 * /current/                                to download the latest release
 * /current/?update[=version_to_check]       to download the latest release if version_to_check is not provided or smaller than current_version, otherwise "ok" will be returned
 * /current/?check[=version_to_check]        to get a link to the latest release if version_to_check is not provided or smaller than current_version, otherwise "ok" will be returned
 */

// temporarily statically linked, script below is broken due to php upgrade
header("Location:http://sourceforge.net/projects/greenshot/files/Greenshot/Greenshot%200.8%20beta/Greenshot-INSTALLER-0.8.0-0627.exe/download");

/*

require('extlib/magpierss/rss_fetch.inc');
$rss = fetch_rss('https://sourceforge.net/api/file/index/project-id/191585/mtime/desc/rss');

$latest_version_url;
$latest_version;
foreach($rss->items as $item) {
	$path_arr = explode('/',$item['title']);
	$filename = $path_arr[count($path_arr)-1];
	$idx = strpos($filename,'Greenshot-INSTALLER-');
	if(!stristr($filename,'unstable') && strlen($idx)>0 && $idx==0) {
		$latest_version_url = $item['link'];
		preg_match('/[\d]+\.[\d]+\.[\d]+-[\d]+/', $filename, $preg_matches);
		$latest_version = $preg_matches[0];
		break;
	}
}

$check_version = $_GET['check'];
$update_version = $_GET['update'];

if(isset($check_version)) {
	$cmp = version_compare($check_version, $latest_version);
	if($cmp >= 0) echo "ok";
	else echo $latest_version_url;
} else if(isset($update_version)) {
	$cmp = version_compare($update_version, $latest_version);
	if($cmp >= 0) echo "ok";
	else header("Location:" . $latest_version_url);
} else {
	header("Location:" . $latest_version_url);
}
*/
?>


<?php
$str = '<a href="jklsdf/language-de-DE.xml">language-de-DE.xml</a>';

function insert_flag($str) {
//	$matches = preg_replace("/[a-z]*-[a-z]{2}-([A-Z]{2}).xml/e", '"<img src=\"/wp-content/themes/greenshot/images/flags/".strtolower("$1").".gif\" width=\"16\" height=\"11\" alt=\"$1\" />&nbsp;$0"',$str);
	return  preg_replace("/(<a.*>)[a-z]*-[a-z]{2}-([A-Z]{2}).xml/e", '"$1<img src=\"/wp-content/themes/greenshot/images/flags/".strtolower("$2").".gif\" width=\"16\" height=\"11\" alt=\"$2\" /></a>&nbsp;$0"',$str);
}

echo (insert_flag($str));
?>asdf
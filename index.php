<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

//locate the IP
$geoplugin->locate();

echo 
	"<b><h2>City: {$geoplugin->city}</h2></b> <br />\n".
	"<b><h2>Region: {$geoplugin->region}</h2></b> <br />\n";

?>
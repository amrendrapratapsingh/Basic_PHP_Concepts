<?php
echo time(); echo "<br/>";
date_default_timezone_get('asia/kolkata');

echo date_default_timezone_get(); echo "<br/>"; //  we can get defaulttimezone which is availble in php.ini configuration file.;

echo date('D-M-Y H:i:s'); echo  "<br/>";

//strtotime

$date= date('D-M-Y');
$ds=strtotime($date);
echo $ds;


?>


<?php
// coverting the date into time.. by using the function (strtotime)
//echo time();  // it represent the time stamps as seconds

echo "<br/>";
//date_default_timezone_set('Asia/kolkata');
//$date=date_default_timezone_set('Asia/kolkata');


// converting the seconds into date.....
$date='22-08-2018';
echo $ds=strtotime($date);
echo "<br/>";
echo date('D-M-Y',$ds);
echo "<br/>";

// converting the date into other format..
echo date('Y-M-D');

?>
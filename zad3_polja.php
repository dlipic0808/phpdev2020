<?php

$polje_imena = array();

$polje_imena[] = "Ema";
$polje_imena[] = "Ivana";
$polje_imena[] = "Ivan";
$polje_imena[] = "Ana";
$polje_imena[] = "Ivo";

sort($polje_imena);

for($i=0; $i<count($polje_imena); $i++)
{
echo $polje_imena[$i]."<br/>";
}

?>
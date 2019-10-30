<?php

$polje_imena = array();

$polje_imena["ime5"] = "Ema";
$polje_imena["ime4"] = "Ivana";
$polje_imena["ime3"] = "Ivan";
$polje_imena["ime2"] = "Ana";
$polje_imena["ime1"] = "Ivo";

foreach($polje_imena as $key => $ime)
{
echo $key." => ".$ime."<br/>";
}    
?>
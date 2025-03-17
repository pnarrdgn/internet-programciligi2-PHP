<?php

//anahtar değeri olmayan diziyi json dizisine çevirme
$diller=array("php","c#","java");
$json_dizisi=json_encode($diller);
echo $json_dizisi."<br>";


//anahtar değeri olan diziyi json dizisi haline çevirme
$arabamarkasi=array(
    "araba1"=>"mercedes",
    "araba2"=>"bmw",
    "araba3"=>"volvo"

);
$json_nesnesi=json_encode($arabamarkasi);
echo $json_nesnesi."<br>";



?>
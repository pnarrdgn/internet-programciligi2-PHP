<?php
$json_ben=
'
{
"isim":"pınar",
"soyisim":"doğan",
"memleket":"kırklareli"




}

';

$veri=json_decode($json_ben);
echo $veri->isim."<br>".
$veri->soyisim."<br>".
$veri->memleket;


?>
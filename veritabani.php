<?php
try
{
    $db=new PDO("mysql:host=localhost; dbname=haberler;charset=utf8","root","");

}
catch(PDOException $e)
{
    print $e->getmessage();

}
$sorgu=$db->query("SELECT * FROM haber_detay",PDO: : FETCH_ASSOC);
$SONUC=$SORGU->fetchall(PDO: : FETCH_ASSOC);
$json_veri=json_encode($sonuc,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents('haberler.json',$json_veri);



?>
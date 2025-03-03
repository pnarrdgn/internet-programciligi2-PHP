<?php
/*session_start();
$_SESSION["mesaj"]="gelişim üniversitesine hoşgeldiniz";
echo $_SESSION["mesaj"];*/



$_SESSION["dizi"]=array(
    "kullanici_id"=>123,
    "kullanici_adi"=>"gelişim üniversitesi",
    "kullanici_mail"=>"pnardogan.19007@gmail.com",
    "kullanici_telefon"=>"0524324526"
);
echo $_SESSION["dizi"]["kullanici_mail"]."<br>";
print_r($_SESSION["dizi"]);
?>

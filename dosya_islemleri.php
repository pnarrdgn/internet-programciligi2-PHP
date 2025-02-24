<?php
//yeni txt dökümanı oluşturdu
touch("webtasarimi2.txt");
//deneme klasörü içerisine dosya oluşturuldu.
touch("deneme/yeni_dosya.txt");

touch ("ogrenci2.txt");
$belge=fopen("ogrenci2.txt","w+");
fwrite($belge,"Adım soyadım: PINAR DOĞAN,\tokul:GELİŞİM ÜNİ,|\nProgramlama Dilleri:php");
echo "belge üzerine metin eklendi";
fclose($belge);



$dosya=fopen("ogrenci2.txt",'r');
while (!feof($dosya))
{
    echo fgets($dosya)."<br>";
}

?>


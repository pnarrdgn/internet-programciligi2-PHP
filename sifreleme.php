<?php
/*
//base64 ile şifreleme
$sifre="gelisimüniversitesi";
$sifrelendi=base64_encode($sifre); //şifreledik
$sifre_cozuldu=base64_decode($sifrelendi); //çözdük
echo "girilen şifre". $sifre."<br>". 
"şifrelemiş veri:".$sifrelendi."<br>". 
"şifrenin çözümlenmiş hali:" .$sifre_cozuldu."<br>";


//gzcompress ile şifreleme

echo "<h4><i>string ifade boyut küçültme</i></h4>";
$yazi="gkgjoprıgjtpoştşgjregoşıerhjgorıdhgdrtşjrtoıdşhgntorşjgrogj";
$kücültme=gzcompress($yazi);
echo"orijinal boyut".strlen($yazi)."<br>"."sıkıştırılmış boyut".strlen($kücültme)."<br>";




echo"<h4><i>şifreleme</i></h4>";
$sifre="gelisimüniversitesi34";
$sifrelendi=gzcompress($sifre);
$sifre_cozuldu=gzuncompress($sifrelendi);
echo "girilen şifre". $sifre."<br>". 
"şifrelemiş veri:".$sifrelendi."<br>". 
"şifrenin çözümlenmiş hali:" .$sifre_cozuldu."<br>";


//url encode kullanımı
$sifre="gelişim üniversitesi meslek yüksekokulu";
$sifrelendi=urlencode($sifre);
$sifre_cozuldu=urldecode($sifrelendi);
echo "girilen şifre: ".$sifre."<br>". 
"şifrelenmiş veri: ".$sifrelendi."<br>". 
"şifrenin çözümlenmiş hali: ". $sifre_cozuldu."<br>";

//şifrenin zor kırılması için:
    //base64_encode(gzcompress(urlencode)) kullan
    //brute force saldırısı deneme yanılma yoluyla şifre kırılması



//MD5 kullanımı

echo"<h4>MD5 kullanımı</h4>";
$sifre="gelişim üniversitesi34";
$sifrelendi=md5($sifre);
echo "girilen şifre: ".$sifre."<br>". 
"şifrelenmiş veri: " .$sifrelendi."<br>";


//şifreye yazı eklem
echo"<h4>MD5 kullanımı şifreye yazı ekleme </h4>";
$sifre="gelişim üniversitesi34";
$ekle="Avcılar".$sifre;
$sifrelendi=md5($sifre);
$sifrelendi2=md5($ekle);
echo "girilen şifre: ".$sifre."<br>". 
"şifrelenmiş veri: " .$sifrelendi."<br>". 
"ifade eklenmiş şifre: ".$sifrelendi2."<br>";


//SHA1 ile şifreleme
echo"<h4>sha1 kullanımı</h4>"."<br>";
$sifre="gelişim üniversitesi34";
$sifrelendi=sha1($sifre);
echo"girilen şifre: ".$sifre."<br>". 
"şifrelenmiş veri:".$sifrelendi."<br>";
$guvenlisifre=sha1(md5($sifre));
echo"güvenli şifre oluşturma yolu:".$guvenlisifre."<br>";


//sha1 40 karakter için 
//md5 32 karakter için



//CRC32 sayı üretme

echo"<h4>CRC32 KULLANIMI</h4>"."<br>";
$sifre="gelisimüniversitesi34";
$sifrelendi=crc32($sifre);
echo "girilen şifre: ".$sifre."<br>". 
"şifrelenmiş veri :".$sifrelendi."<br>";



//Hash ile şifreleme
echo "<h4> hash kullanımı</h4>"."<br>";
$sifre="gelişimüniversitesi34";
$sifrelendi=hash('sha256',$sifre);
echo "girilen şifre: ".$sifre."<br>". 
"şifrelenmiş veri :".$sifrelendi."<br>";


//CRYPT ile şifreleme
echo"<h4>crypt ile şifreleme</h4>"."<br>";
error_reporting();

//basit kullanımı
$sifre="gelisimuniversitesi";
//$sifrelendi=crypt($sifre);
echo "basit kulllanım ile şifreleme:".$sifre."<br>";


//CRYPT_STD_DES kullanımı
if(CRYPT_STD_DES)
{
    $sifrelendi=crypt($sifre,"Ge");
    echo"standart DES şifrelemesi:".$sifrelendi."<br>";
}
if(CRYPT_EXT_DES)
{
    $sifrelendi=crypt($sifre,"gelisimun");
    echo"gelisim DES şifrelemesi:".$sifrelendi."<br>";

}
if (CRYPT_MD5)
{
    $sifrelendi=crypt($sifre,'$1$GELİSİMUNİVE$');
    echo"MD5 şifrelemesi:".$sifrelendi."<br>";
}
if (CRYPT_BLOWFISH)
{
    $sifrelendi=crypt($sifre,'$2a$gelisimuniversites$');
    echo"blowfish şifrelemesi:".$sifrelendi."<br>";
}
if (CRYPT_SHA256)
{
    $sifrelendi=crypt($sifre,'$2a$gelisimuniversites$');
    echo"SHA256 şifrelemesi:".$sifrelendi."<br>";
}
if(CRYPT_SHA512)
{
    $sifrelendi=crypt($sifre,'$6$gelisimuniversites$');
    echo"sha512 şifrelemesi:".$sifrelendi."<br>";
}
   
    //password_hash kullanımı
    echo"<h4>password_hash kullanımı </h4>"."<br>";
    $sifre="Gelisimuniversitesi34";
    $sifrelendi=password_hash($sifre,PASSWORD_DEFAULT);
    echo"girilen şifre:".$sifrelendi."<br>";
    */
?>

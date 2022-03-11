<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kütahya Dumlupınar Üniversitesi</h1>

    <?php  //php kod yazmayı başlattık
        echo "<h2>Kütahya Tavşanlı Meslek Yüksekokulu</h2>";
        ECHO "<h3 style='color:blue'>Bilgisayar Dersleri</h3>";
        $ogrno="202033502001";
       // echo $ogrno;  
          echo "Öğrencinin numarası : $ogrno<br>";
          echo 'Öğrencinin numarası : $ogrno<br>';
          echo 'Öğrencinin numarası : '.$ogrno."<br>";
          ECHO "------".$ogrno;

          $x = 5  + 15 + 5;  
          echo "x'in değeri : ".$x;

          $gun="Pazartesi";
          $ay="Şubat";
          $yil=2022;
          echo "<br>";
            echo "$gun/$ay/$yil";
            echo "<br>";
            echo '$gun/$ay/$yil';
            echo "<br>";
            echo $gun.'/'.$ay."/".$yil;
            
//sabit tanımlamaları
define("okuladı","Tavşanlı Meslek Yüksekokulu");
echo okuladı;
define("adres","Balıkesir yolu 5.km Tavşanlı/Kütahya");
echo adres;
//define("okuladı","Tavşanlı Teknik Meslek Yüksekokulu");
define("oran",.10);
$urunadı="Mouse";
$urunFiyatı=180;
//$kdvliFiyat=$urunFiyatı+(oran*10);
$kdvliFiyat=$urunFiyatı*(1+oran);
echo "<br>";
echo "Ürünün satış fiyatı : ".$kdvliFiyat;




          
    //değişken tanımlama kuralları
        //1. mutlaka $ simgesi ile başlar. $okuladı;
        //2. değişkenin ilk karakteri mutlaka harf olmalı
            //yada alt çizgi olmalı.  $_okuladı;
    //değişken adlarında büyük/küçük harf duyarlılığı vardır
    // $okuladı="tavşanlı myo";
    // $OKULADI="tavşanlı myo";
    // if(true)
    //     echo "";
    // IF (TRUE)
    //     ECHO "";


   ?>   
</body>
</html>
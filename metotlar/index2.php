<?php

$sayilar=array(14,57,87,41,15,45,8);
//sayılar isimli dizinin ortalamasını bulan 
//metodu yazınız
function islem($sayi){
    $toplam=0;
    $ortalama=0;
foreach ($sayi as $key => $value) {
    $toplam +=$value;
     }
     $ortalama = $toplam / count($sayi);
    //  $result[0]=$ortalama;
    //  $result[1]=$toplam;
     $result=array("ortalama"=>$ortalama,"toplam"=>$toplam);
                //   key         value
     return $result;
}
$sonuc= islem($sayilar);
echo "<pre>";
//print_r($sonuc);
/*echo "Ortalama : ".$sonuc[0];
echo "<br>";
echo "Toplam : ".$sonuc[1];*/

foreach ($sonuc as $key => $value) {
   echo $key." ".$value."<br>";
}

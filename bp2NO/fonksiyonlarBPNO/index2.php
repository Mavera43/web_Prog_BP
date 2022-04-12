<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 function yaz($str,$bc="black",$fc="white"){
      echo "<p style=\"background-color:{$bc};color:{$fc}\">".$str."</p>";
 }

 function hesapla($sayı1,$sayı2,$islemci)
 {
     $sonuc=0;
     switch ($islemci) {
         case '+':
            $sonuc=$sayı1+$sayı2;
             break;
        case '-':
            $sonuc=$sayı1-$sayı2;
            break;
        case '*':
            $sonuc=$sayı1*$sayı2;
                break;      
        case '/':
            $sonuc=$sayı1/$sayı2;
                break;      
         default:
             $sonuc="Yanlış Aritmetiksel işlemci seçtiniz";
             break;
     }
     yaz("İşlem sonucu : ".$sonuc,"blue","white");
 }
 
 hesapla(15,0,"/");

function topla($sayı1,$sayı2){
    $sonuc=$sayı1+$sayı2;
    yaz($sonuc,"blue","white");
}

function cikartma($sayı1,$sayı2){
    $sonuc=$sayı1 - $sayı2;
    yaz($sonuc,"green","white");
}

function carpma($sayı1,$sayı2){
    $sonuc=$sayı1 * $sayı2;
    yaz($sonuc,"green","white");
}

function bolme($bolunen,$bolen){
    if($bolen == 0)
        yaz("Sayı sıfıra bölünemez...","gray","red");
    else
    {
        $sonuc=$bolunen / $bolen;
        yaz($sonuc,"green","white");
    }
    
}
// topla(15,85); //parametresiz metod
// cikartma(80,45);
// carpma(5,100);
// bolme(100,0);
 





?>
    
</body>
</html>

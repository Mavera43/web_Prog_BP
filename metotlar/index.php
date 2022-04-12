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
 
//metod tanımı
function yaz($str, ?string $renk){ 
    //soru işaretinin anlamı $renk değişkeninin null olabileceğidir
    echo "<p style=\"color:{$renk}\">{$str}</p>";
}
yaz("Bugün Günlerden cuma, ", "blue");
yaz("Aylardan Nisan", "yellow");

//metodu çağırmadığınız müddetçe metod çalışmaz


//metodlar / fonksiyonlar / yöntemler
yaz("merhaba","red");
//boş parametre gönderme örneği
yaz("bilgisayar programcılığı",null);
?>

</body>
</html>
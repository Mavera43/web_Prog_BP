<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <p style="background-color:red;color:white">
    Bilgisayar Programcılığı
</p> -->
<?php
//fonksiyonlar /metodlar çağrılmadan çalışmaz.
//aynı isimli 2 metot olamaz.

// function yaz($str){
//     echo $str."<br>";
// }

function topla(){
    echo "<p style=\"background-color:red;color:white\">150</p>";
    //yaz(150);
}

function sum($s1){
    echo "<p style=\"background-color:blue;color:white\">{$s1}</p>";
   //yaz($s1);
}
//fonksiyon çağırma/çalıştırma
topla(); //parametresiz metod
sum(500); // parametreli metod



?>
    
</body>
</html>

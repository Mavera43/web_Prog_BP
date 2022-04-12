<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    td{padding: 10px;color:blue}
    </style>

</head>
<body>
    

<?php
//değer döndüren metodlar
//aşağıdaki metod sayının tek yada çift olduğunu döndürür.
//dönen değer çift ise 10 ile çarpalım.
function tekcift($sayi){
   $sonuc= $sayi % 2;
   if ($sonuc == 0)
      return true;
      else
      return false;
}
//eğer bir metod değer döndürüyorsa(metodun içinde return deyimi varsa)
//bu metodu bir değişkene aktarabiliriz.
$sayilar=array(15,7,40,50,12,8,6);
echo "<table border=1 width=200>";
echo "<tr><th>Sayı</th><th>Sonuç</th></tr>";
    foreach ($sayilar as $key => $value) {
        $sonuc=(tekcift($value))?"çift sayı" : "tek sayı";
        echo "<tr>";
        echo "<td >".$value."</td><td >".$sonuc."</td>";
        echo "</tr>";
    }
/*
$result = tekcift(15);
if($result)
    echo 10*10;
    else
    echo 10;
    // sayı    sonuç
    // 15      tek sayı
    // 7       tek sayı
    // 40      çift sayı*/




?>
</body>
</html>
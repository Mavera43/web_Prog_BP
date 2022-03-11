<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Sabitler, Değişkenler, Karar yapıları</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body> 
    <p> Kütahya <span style="color:red" >Tavşanlı</span> Meslek Yüksekokulu</p>
<div  class="container ">
  <h2> </h2>
  <div class="card">
    <div class="card-header">
        ad soyad
    </div>
    <div class="card-body bg-light">
    <?php 
    $yil=2024;
//1.koşul= yılın 400 e bölümünden kalan 0 ise
//veya
//2.koşul= yıl 100 tam bölünemeyip, 4'e tam bölünürse
$kosul1=($yil % 400==0); //2024 değerine göre kalan var > false
$kosul2=(($yil % 100)<>0&&($yil % 4==0));
if($kosul1 || $kosul2)
    echo "Girdiğiniz yıl artık bir 
<span style=\"color:blue\" >yıldır.</span>";
    else
    echo "Girdiğiniz yıl artık bir yıl 
<span style=\"color:red;font-weight:bolder\">değildir.</span>";

//htmlde span
// p


    
    ?>       
    </div>
    <div class="card-footer bg-info  ">
        <?php
    $ortalama=48;
//ternary operatörü  (mantıksal sınama) ?doğru ise :yanlışise ;
    $sonuc= ($ortalama >=50)?"geçti":"kaldı";
    echo  ($ortalama >=50)?"geçti":"kaldı";
    echo "Öğrencinin durumu : ".$sonuc;

    /*if($ortalama >=50)
        echo "geçti";
        else
        echo "kaldı";*/


?>

    </div>
  </div>
</div>

</body>
</html>

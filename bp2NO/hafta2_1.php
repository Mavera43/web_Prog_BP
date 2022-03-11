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
 <?php
 
    /*
    varsayılan kredi toplamı : 24
    genel not ortalaması 3'ten büyükse alabileceği kredi toplamını 8 artır,
    genel not ortalaması 2'ten büyükeşit 3'ten küçükse
             alabileceği kredi toplamını 4 artır,-
    genel not ortalaması 2'den küçükse artırma

    Öğrencinin Alabileceği kredi toplamı : 36
    Öğrencinin Alabileceği kredi toplamı : 28

    */

    define("okuladı","Tavşanlı Meslek Yüksekokulu");
    define("bolumadı","Bilgisayar Programcılığı");

    $genelNotOrt=1.2;
    $alabilegiKrediToplamı=24;
    if($genelNotOrt>=3)
        $alabilegiKrediToplamı += 8;
    else if($genelNotOrt>=2 && $genelNotOrt<3)
        $alabilegiKrediToplamı += 4;
       $str="Öğrencinin Alabileceği Kredi Toplamı : ".$alabilegiKrediToplamı;
 ?>
<div  class="container ">
  <h2>Php Sabitler</h2>
  <div class="card">
    <div class="card-header bg-info text-danger text-center ">
        <?=okuladı?>
    </div>
    <div class="card-body text-justify">
     <!--
         alabileceği kredi >32 yeşil renkli bir yazı yazsın,
         alabileceği kredi >=28 yeşil turuncu bir yazı yazsın,
         değilse kırmızı bir yazı yazsın.
      -->  
        <?php
         if($alabilegiKrediToplamı==32)
            $x="<p style='color:green'> ";
        else if($alabilegiKrediToplamı==28)
            $x="<p style='color:orange'>";
        else
            $x="<p style='color:red'>";
        echo $x.$str."</p>";?>     
    </div>
    <div class="card-footer bg-info text-right "><?=bolumadı?></div>
  </div>
</div>

</body>
</html>

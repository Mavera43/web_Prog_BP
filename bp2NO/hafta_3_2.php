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
<div  class="container ">
  <h2>kARAr Yapıları (if else -- if elseif </h2>
  <div class="card">
    <div class="card-header">
        Öğr.Gör.Şenol DEMİRCİ
    </div>
    <div class="card-body bg-light">
    <?php 
    $yil=2029;
    $kosul1=($yil % 400 == 0);
    $kosul2=($yil % 100 !=0 && $yil % 4==0);
    $renk="black";
    $kosul = ($kosul1 || $kosul2);
 // if($kosul) $renk="blue";else $renk="magenta";
    $renk = ($kosul) ? "blue" : "red" ;
    if($kosul)
        echo "<p>Girdiğiniz yıl
    <span style=\"font-weight:bolder;color:$renk\">
    artık yıldır. </span></p>";
        else
    echo "<p>Girdiğiniz yıl 
    <span style=\"font-weight:bolder;color:$renk\">
    artık yıl değildir.</span></p>";


    ?>       
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>

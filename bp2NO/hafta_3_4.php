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
    $kilo=55;
    $boy=1.75;
    $vki=$kilo/(pow($boy,2));
    if($vki<18)
        echo "Zayıfsınız...";
    else if($vki>=18 && $vki<25)
        echo "Normal kilodasınız..";
    else if($vki>=25 && $vki<30)
        echo "Kilosunuz...";
    else if($vki>=30 && $vki<35)
        echo "obezsiniz...";
    else   echo "Aşırı obezsiniz...";
         
    ?>       
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>

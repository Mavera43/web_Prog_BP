<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
  <h2>PHP Karar Kontrol yapıları (mantıksal kontroller)</h2>
  <div class="card">
  <h5 class="card-title">Öğr.Gör.Şenol DEMİRCİ</h5>
    <div class="card-header bg-primary"></div>
    <div class="card-body bg-secondary"><br><br> <p class="card-text">  
        <?php
    $yil=2024;
    /*$kosul1 = ($yil % 400==0); //false; 
    $kosul2= ($yil % 100<>0) && ($yil % 4==0); // true;*/
    // if($kosul1 || $kosul2)
    if (($yil % 400 ==0) || ($yil % 100 !=0) &&($yil % 4==0))
        echo "<p style=color:$renk>Artık Yıl</p>";   //yeşil renkli yazdırın
        else
        echo "<p style=color:$renk>Artık yıl değil</p>";  //kırmızı renkli yazdırın



    $rakam = 5;
    //if else ile
    /*if ($rakam % 2==0)
        echo "sayı çift";
        else
        echo "sayı tek";*/
    //ternary operatörü ile (3'leme operatörleri ile)
    echo "<br>";
    echo  ($rakam % 2==0) ? "sayı çift"  : "sayı tek";



     //var_dump($kosul2);
?>
</p><br><br></div> 
    <div class="card-footer bg-primary"></div>
  </div>
</div>
</body>
</html>

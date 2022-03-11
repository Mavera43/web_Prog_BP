<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<?php

define("okuladi","Tavşanlı Meslek Yüksekokulu");
//echo "<div><h1>".okuladi."</h1></div>";
define("url","https://www.dpu.edu.tr");
define("adres","Balıkesir Yolu, 5.km Tavşanlı/Kütahya");
?>
 

<div class="container">
  <h2>PHP ile Sabit ve Değişken Kullanımı</h2>
  <div class="card">
  <h5 class="card-title">Öğr.Gör.Şenol DEMİRCİ</h5>
    <div class="card-header bg-primary"><?php echo url;?></div>
    <div class="card-bodybg-secondary"><br><br> <p class="card-text"><?php echo "<a href=".url.">Tıklayınız...</a>";  
    
      ?></p><br><br></div> 
    <div class="card-footer bg-primary"><?php echo adres;?></div>
  </div>
</div>

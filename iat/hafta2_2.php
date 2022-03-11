<?php
define("okuladi","Tavşanlı Meslek Yüksekokulu");
define("url","https://www.dpu.edu.tr");
$adres="Balıkesir yolu 5.km Tavşanlı/kütahya";
$str="Tavşanlı Meslek Yüksekokulu
Yüksekokulumuz;

Kütahya'ya 50 km uzaklıktaki Tavşanlı ilçesinde bulunmaktadır.
 Yüksek Öğretim Kurulunun 06.09.1993 tarih ve 1450 sayılı
  kararı ile açılmış olup, 1993-1994 Öğretim yılında öğretime başlamıştır. Kurucu müdürümüz Yrd. Doç Dr. Orhan ELMACI olup 2004 yılına kadar bu görevi sürdürmüştür. 2004-2009 yılları arasında ise Prof. Dr. Birol ELEVLİ müdürlük görevini yürütmüştür.";

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>    <title>Document</title>
</head>
<body>
<div class="card">
    
  <div class="card-header bg-success text-center">
      <?php echo okuladi; ?></div>
  <div class="card-body bg-secondary ">
  <h5 class="card-title bg-success text-danger">Şenol Demirci</h5>
  <p class="text-justify">
    <?
       //genel not ort >=3 alabileceği krediyi 8 artır
       //genel not ort >=2 and <3 ise alabileceği kredi 4 artır
        // değilse 2 artır.
    $alabilecegiKredi=24;
    $genelNotOrtalaması=1.6;
    $sonuc="";
    if($genelNotOrtalaması>=3)
        $alabilecegiKredi += 8;
    else
        $alabilecegiKredi += 2;
    $str="Öğrencinin alabileceği kredi toplamı : ".
    $alabilecegiKredi;
    if($alabilecegiKredi>=32)
        echo "<p class=bg-success>"."Tebrikler!<br>  ".
        $str."</p>";
    else
        echo "<p class=bg-warning>"."Biraz daha gayret <br>".
        $str."</p>";
    ?></p>
  </div>
  <div class="card-footer bg-success"><?=$adres?></div>
</div>
</body>
</html>


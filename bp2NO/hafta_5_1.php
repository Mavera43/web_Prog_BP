<?php 
include "kutuphane.php";
?>
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
  <div class="container ">
    <h2> </h2>
    <div class="card">
      <div class="card-header bg-danger">
        Header
      </div>
      <div class="card-body bg-ligth">
       
    <?php
    $ogrenciler1=array();
    var_dump($ogrenciler1);
    $ogrenciler2=array("ahmet","mehmet","ali");
    formatli($ogrenciler2,"red") ;
   $ogrenciler3=[];
  // var_dump($ogrenciler3);
   echo "<br>";
   // arraydeki değerlere ulaşmak;
   //öğrenciler2 isimli dizideki mehmet'i yazdırmak için;
   echo $ogrenciler2[1];
    $ogrenciler2[3]="Ayşe";
    echo "<br>".$ogrenciler2[3];
    echo "Dizideki eleman sayısı: ".count($ogrenciler2);
    $ogrenciler2[count($ogrenciler2)]="Fatma";
    echo "<br>".$ogrenciler2[4];
 /*echo "<pre>";
 print_r($ogrenciler2);
  echo "</pre>";*/

 formatli($ogrenciler2,"green") ;
  echo "Dizideki eleman sayısı: ".count($ogrenciler2);
echo "<hr>";
  $ogr=array("adsoyad"=>"Berk Aytuğ Civan",
                    "mail"   =>"berkaytug@ogr.dpu.edu.tr",
                    "vize"   => 85,
                    "final"  => 75,
                    "ortalama"=>null
                );
                 echo "<pre>";
                print_r($ogr);
                echo "</pre>";
            //ilişkisel dizilerde elemanlara erişmek için
            //ad'lar kullanılır
    echo "Final Notu : ".$ogr["final"];
    $ogr["ortalama"]= $ogr["vize"] * 0.4 +$ogr["final"] * 0.6;
    echo "<br> Ortalama :".$ogr["ortalama"];

    //foreach döngüsü dizi elemanlarına sıralı bir şekilde 
   // erişimi sağlar
   // aşağıdaki döngü dizinin tüm key'lerini yazar
   echo "<br>";
   $sayac = 0;
   foreach ($ogr as $key => $value) {
        yaz("Key : ".++$sayac ." " .$key,"blue");
   }
formatli($ogrenciler2,green);
array_push($ogrenciler2,"murat","kemal");
yaz("veri eklendikten sonraki değerler","red");
formatli($ogrenciler2,"green");
$ogrenciler2=array_diff($ogrenciler2,Array("Ayşe"));
formatli($ogrenciler2,"aqua");
$ogrenciler2=array_values($ogrenciler2);
yaz("indis düzenlemesi yapıldıktan sonra","red");
formatli($ogrenciler2,"aqua");
unset($ogrenciler2[4]);
yaz("unset kullanıldıktan sonra sonra","green");
formatli($ogrenciler2,"aqua");
$ogrenciler2=array_values($ogrenciler2);
yaz("indis düzenlemesi yapıldıktan sonra","red");
formatli($ogrenciler2,"aqua");
echo "<hr>";
formatli($ogr,"yellow");

?>

    </div>
    <div class="card-footer bg-danger">
        Footer
      </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  
</body>

</html>
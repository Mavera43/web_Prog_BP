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
  <h2> </h2>
  <div class="card">
    <div class="card-header bg-success">
        ad soyad
    </div>
    <div class="card-body bg-light">
    <?php 
    $gno=1.5;
    $alabilecegiKredi=24;
    $harcTutari=500;
    if($gno >= 3)
       { 
            $alabilecegiKredi +=4; //ilave et
            //$alabilecegiKredi=$alabilecegiKredi + 4; //değiştir
            $harcTutari= $harcTutari * 0.50;
       }
        else
        {
            $alabilecegiKredi +=2;
            $harcTutari= $harcTutari * 0.75;
        }
    
        echo "Alabileceği Kredi : ".$alabilecegiKredi;
        echo "<br>";
        echo "Harç Tutarı : ". $harcTutari;




    ?>       
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>

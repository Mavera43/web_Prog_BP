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
  <h2>Formlar ve form verileri ile çalışma </h2>
  <!-- sayfalar arası veri geçişi, yapabilmek için
      html form elementi ve input elementlerini
        kullanmak gerekiyor.
        php sayfalar arsında verileri taşıyan
        $_POST ve $_GET isimli 2 tane süper global değişken 
        vardır.-->

        <?php
        $durum="";
            //$_POST  array/dizi
          /* echo @$_POST["username"]."<br>";
           echo @$_POST["password"]."<br>";
           if(isset($_POST["username"]))
             echo $_POST["username"]."<br>";*/
        if($_POST["username"]=="ahmet" && $_POST["password"]=="1234")
            $durum="Oturum Açıldı";
            else
            header("refresh:1;url=hata.php");  
        ?>
  <div class="card">
    <div class="card-header">
        <?=$durum?>
    </div>
    <div class="card-body bg-light">

    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>

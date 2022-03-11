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

<!-- girilen kullanıcı adı ve şifre
   veritabanında kontrol edilir.
   varsa oturum açılır yoksa hata.php sayfasına
   yönlendirilir.
-->

   <?php
 if($_POST["username"]=="ahmet" &&$_POST["password"]=="1234")
    $str="Kullanıcı adı ve parola doğru";
    else
    {
        $str="Kullanıcı adı ve parola YANLIŞ";
        header("refresh:5;url=login.php");
    }
?>
<div  class="container ">
  <h2> </h2>
  <div class="card">
    <div class="card-header">
        <?=@$str?>
    </div>
    <div class="card-body bg-light">
    <?php 
    
    ?>       
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>

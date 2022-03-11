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
  <div class="card">
    <div class="card-header">
        Veri Girişi
    </div>
    <div class="card-body bg-light">
        <form name="frmVerigir" method="post" action="kurslar.php">
        <label for="adsoyad" >Ad Soyad </label>
        <br>
        <input type="text" name="adsoyad" 
        placeholder="kullanıcı adı girilmeli">
        <br>
        <label for="il" >İl </label>
        <br>
        <input type="text" name="il">
        <br>   
        <input type="checkbox" name="ogrenci" value="1">Öğrenciyim
        <br> <br>
        <label> Katılmak istediğiniz kursları seçiniz...</label>
        <br>
        <hr>
        <input type="checkbox" name="dil[]" checked value="C#">C# Kursu
        <br>
        <input type="checkbox" name="dil[]"  value="php">Php Kursu
        <br>
        <input type="checkbox" name="dil[]"  value="html">Html/Css Kursu
        <br>
        <input type=submit name="btnGonder" value="Tamam">
        </form>
    <?php
        
    ?>
      
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>

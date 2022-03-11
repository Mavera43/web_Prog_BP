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
    <div class="card-header">
        Veri Girişi
    </div>
    <div class="card-body bg-light">
      <form name="frmLogin" method="post" action="action_page.php">
      <label >Ad Soyad </label>
      <br>
      <input type=text name="adsoyad">
      <br>
      <label> Yaşadığı İl : </label>
      <br>
      <input type="text" name="il">
     <label> Fakülte </label>
     <select>
         <option >
             
</select>
      <br>
      <br>
      <label for="chkOgrenci" > Öğrenciyim </label>
      <input type = "checkbox" name="chkOgrenci" value="1">[ %50 Öğrenci indirimi var]
      <br>
      <hr>
      <input type = "checkbox" name="kurslar[]" value="c#">C# Dersi
      <br>
      <input type = "checkbox" name="kurslar[]" value="C++">C++ Dersi
      <br>
      <input type = "checkbox" name="kurslar[]" value="Php">php Dersi
      <br>
      <input type = "checkbox" name="kurslar[]" value="Pyton">Pyton Dersi
      <br>

      <input type="submit" name="btnTamam" value="Tamam">
      </form>
    </div>
    <div class="card-footer bg-info  ">
 


    </div>
  </div>
</div>

</body>
</html>

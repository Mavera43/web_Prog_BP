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
        Login Ekranı
    </div>
    <div class="card-body bg-light">
      <form name="frmLogin" method="post" action="action_page.php">
      <label >Kullanıcı Adı </label>
      <br>
      <input type=text name="username">
      <br>
      <label> Şifre : </label>
      <br>
      <input type="password" name="password">
     
      <br>
      <br>
      <label for="hatirla" > Beni Hatırla</label>
      <input type = "checkbox" name="hatirla" value="1">
      <br>
      <input type="submit" name="btnLogin" value="Oturum Aç">
      </form>
    </div>
    <div class="card-footer bg-info  ">
 


    </div>
  </div>
</div>

</body>
</html>

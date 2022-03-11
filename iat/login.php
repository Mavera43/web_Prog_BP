<?php
include "library.php";
?><html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
  <h2>Oturum Açma Ekranı</h2>
  <div class="card">
  <h5 class="card-title">Öğr.Gör.Şenol DEMİRCİ</h5>
    <div class="card-header bg-primary"></div>
    <div class="card-body bg-light text-center "><br><br> <p class="card-text">  
    <form name="loginform" method="post" action="index.php" >
    <label for="username" >Kullanıcı Adı</label>
    <br>
    <input type=text name="username" value="ahmet" placeholder="Kullanıcı adı ...">
    <br>
    <label for="password" >Şifre </label>
    <br>
    <input type="password" name="password" value="1234" placeholder="şifre ?">
    <br>
    <input type=submit value="OturumAç" name="btnLogin">
    <br>
    <div style="widht:100px;height:auto;background-color:gray;margin:50px 100px 100px 100px;text-align:left">
    <br>
    <input type = "checkbox" name=language[] value="C#" >C#
    <br>
    <input type = "checkbox" name=language[] value="Php">Php
    <br>
    <input type = "checkbox" name=language[] value="Pyton">Pyton
    
</div>
   
</form>

</p><br><br></div> 
    <div class="card-footer bg-primary">
    <?=$footer?>
    </div>
  </div>
</div>
</body>
</html>


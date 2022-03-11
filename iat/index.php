<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<?php
    if($_POST)
        if($_POST["username"]=="ahmet" && $_POST["password"]=="1234")
            $str="Oturum Açıldı...Hoşgeldiniz Ahmet Bey";
            else
            $str="Oturum açılamadı. Kullanıcı adınız veya şifreniz yanliş";
         ?>
<div class="container">
  <h2>PHP Karar Kontrol yapıları (mantıksal kontroller)</h2>
  <div class="card">
  <h5 class="card-title"><?php echo (isset($str)) ?  $str : ""?></h5>
    <div class="card-header bg-primary"></div>
    <div class="card-body bg-light"><br><br> <p class="card-text">  
        

 
</p><br><br></div> 
    <div class="card-footer bg-primary"></div>
  </div>
</div>
</body>
</html>

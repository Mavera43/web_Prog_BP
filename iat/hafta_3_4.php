<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
  <h2>PHP Karar Kontrol yapıları (mantıksal kontroller)</h2>
  <div class="card">
  <h5 class="card-title">Öğr.Gör.Şenol DEMİRCİ</h5>
    <div class="card-header bg-primary"></div>
    <div class="card-body bg-light"><br><br> <p class="card-text">  
        <?php
    $username="ahmet";
    $password="12334";
    if($username=="ahmet" && $password=="1234")
        header("refresh:1;url=index.php");
       // echo "Kullanıcı adı ve şifre<span style=font-weight:bold;color:green>doğru</span>";
        else
        header("refresh:1;url=hata.php");
      //  echo "Kullanıcı adı ve şifre<span style=font-weight:bolder;color:red>yanlış</span>";
?>
</p><br><br></div> 
    <div class="card-footer bg-primary"></div>
  </div>
</div>
</body>
</html>

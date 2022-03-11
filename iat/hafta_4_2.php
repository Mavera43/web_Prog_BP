<?php
  $diller = Array("php"=>"Php", "C#"=>"Csharp","Pyton"=>"Pyton");
   
?>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <h2>PHP post ve get metodları</h2>
  <div class="card">
  <h5 class="card-title">Hafta 4</h5>
    <div class="card-header bg-primary"></div>
    <div class="card-body bg-light"><br><br> <p class="card-text">  
    <form action="action_page.php" method="post" >
  <div class="form-group">
    <label for="adsoyad">Ad Soyad:</label>
    <input type="text" class="form-control" id="adsoyad" name="adsoyad">
  </div>
  <div class="form-group">
    <label for="il">İl</label>
    <input type="text" class="form-control" id="il" name="il">
  </div>
 <div class="checkbox">
    <input type="checkbox" name="dil[]" value="C#" >C#
  </div>
  <div class="checkbox">
    <input type="checkbox" name="dil[]" value="Php" >Php
  </div>
  <div class="checkbox">
    <input type="checkbox" name="dil[]" value="Pyton" >Pyton
  </div> 
  
  <button type="submit" class="btn btn-info">Kaydet</button>
</form>
</p><br><br></div> 
    <div class="card-footer bg-primary"></div>
  </div>
</div>
</body>
</html>

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
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="hatirla" value="1" > 
    Beni Hatırla</label>
  </div>
  <button type="submit" class="btn btn-info">Kaydet</button>
</form>
</p><br><br></div> 
    <div class="card-footer bg-primary"></div>
  </div>
</div>
</body>
</html>

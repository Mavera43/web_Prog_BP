<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
    <?php
//print_r($_POST);
$GLOBALS["result"]=0;

function topla($s1,$s2){
    $GLOBALS["result"]= $s1+$s2;
}

function cikartma($s1,$s2){
    $GLOBALS["result"]=  $s1-$s2;
}

function bolme($s1,$s2){
    $GLOBALS["result"]=  $s1 / $s2;
}

function carpma($s1,$s2){
    $GLOBALS["result"]=  $s1 * $s2;
}

switch ($_POST["secenek"]) {
    case 1:
        topla($_POST["sayı1"],$_POST["sayı2"]);
        break;
    case 2:
        cikartma($_POST["sayı1"],$_POST["sayı2"]);
        break;
    case 3:
        bolme($_POST["sayı1"],$_POST["sayı2"]);
        break;
    case 4:
        carpma($_POST["sayı1"],$_POST["sayı2"]);
        break;
    
    default:
        echo "yanlış matematik operatörü seçtiniz...";
        break;
}

?>
<div class="card">
<div class = "card-header bg-info">
    <h2>Sonuc: <?=$GLOBALS["result"]?></h2>
</div>
  <div class="card-body bg-success">
    <h5 class="card-title">Matematiksel işlemler</h5>


    <h3><a class="btn btn-primary" href = form.php> Tekrar Hesaplatın </a></h3>
 
  </div>
</div>
</body>
</html>



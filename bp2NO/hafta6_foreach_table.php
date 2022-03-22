<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tavşanlı MYO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Ana Sayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Makaleler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dersler</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="card">
            <div class="<div class=" card">
                <div class="card-header">
                    foreach ile table yapma
                </div>
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                     
                </div>
                <div class="<div class=" card">
                    <div class="card-body">
                      <?
$ogrenciler=[
    "ali" =>["vize"=>34,"final"=>55, "harfnot"=>"DD"],
    "veli"=>["vize"=>56,"final"=>87, "harfnot"=>"DD"],
    "ahmet"=>["vize"=>80,"final"=>90, "harfnot"=>"DD"]
];
//array_merge 2 diziyi birleştirir.
$tableHeaders = array();
    foreach($ogrenciler as $sub) {
        $tableHeaders = array_merge($tableHeaders, $sub);
    }        
    print_r($tableHeaders);
?>
<table class="table">
  <thead>
    <tr>
        <?php
$Keys=array_keys($tableHeaders);
echo "<th>Ad Soyad</th>";
foreach (array_keys($tableHeaders) as $key => $value) {
    echo "<th>".$value."</th>";
}
        ?>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($ogrenciler as $key => $value) {
           echo "<tr><td>".$key."</td>";
           foreach ($value as $key2 => $val) {
               echo "<td>".$val."</td>";
           }
           echo "</tr>";
        }
      ?>
   
   
  </tbody>
</table>

                    </div>
                    <div class="card-footer">
                        Tavşanlı Meslek Yüksekokulu
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>

<!-- 

<form>
    <input type="text" class="form-control form-control-lg" placeholder="Large input">
    <input type="text" class="form-control mt-3" placeholder="Normal input">
    <input type="text" class="form-control form-control-sm mt-3" placeholder="Small input">
  </form> -->
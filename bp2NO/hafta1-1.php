<html>

<body>
    <p> Merhaba Bilgisayar Programcıları</p>
    <p> burası HTML kodları</p>
    <hr>
    <?php
     echo "<p style=\"color:blue\">Merhaba Bilgisayar Programcıları</p><br>";
    // echo "<p style='color:blue'>Merhaba Bilgisayar Programcıları</p><br>";
     echo "<p>burası php kodları </p>"."<br>" ;

  ?>

    <?php
    $sonuc=true;
  /*  if($sonuc)
        echo "<a href=https://www.dpu.edu.tr> DPÜ web Sayfası</a>";
       else
        echo "<a href=https://www.yok.gov.tr> YÖK web Sayfası</a>";*/
    if($sonuc)
      {
          ?>
    <a href=https://www.dpu.edu.tr> DPÜ web Sayfası</a>
    <?php
      }
        else {
        ?>
    <a href=https://www.yok.gov.tr> YÖK web Sayfası</a>
    <?php
        }
        ?>




</body>

</html>
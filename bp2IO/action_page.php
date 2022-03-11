<?php
if(isset($_POST["kurslar"]))
{
    $toplam=0;
    echo "Seçtiğiniz Kurs sayısı : ".count($_POST["kurslar"])."<br>";
    foreach ($_POST["kurslar"] as $key => $value) {
        echo $value."<br>";
        $toplam +=(isset($_POST["chkOgrenci"])) ?100: 200;
    } 
    echo "döngü içindeki yöntemle toplam : ".$toplam."<br><hr>";
    if(isset($_POST["chkOgrenci"]))
    {
        echo "Ödeyeceğiniz Kurs Ücreti Toplamı ".
        (count($_POST["kurslar"])*200)/2;

    }
    else
        echo "Ödeyeceğiniz Kurs Ücreti Toplamı ".
        (count($_POST["kurslar"])*200);

    

}
     


<?php
$ogrenciler=Array("ogrno"=>"2011",
                "adsoyad"=>"ahmet",
                 "vize"=>"90");
//echo $ogrenciler["adsoyad"];
foreach ($ogrenciler as $key => $value) {
     echo $key."---".$value."<br>";
}



?>
<?php

echo "<h3> Get metodu ile gelen verilere erişim...</h3>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";
echo "Sayfadan gelen Ad Soyad ".$_POST["adsoyad"]."<br>";
echo "Sayfadan gelen il ".$_POST["il"]."<br>";

$varmı=isset($_POST["hatirla"]);
if ($varmı)
  echo "Sayfadan gelen hatırla 1 veya 0 mı ".$_POST["hatirla"]."<br>";

if($varmı && $_POST["hatirla"]=="1")
    echo "Seni hatırlayacağım";
    else
    echo "Seni unuttum";

    
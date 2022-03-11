<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
$sayi= count($_POST["hatirla"]);
$kursUcreti=$sayi * 200;
if ($_POST["ogrenci"])
$kursUcreti /=2; //$kursUcreti= $kursUcreti/2;

echo "<h4 style=\"color:red\">
 Ödeyeceğiniz Kurs Ücreti : ". $kursUcreti."</h4>";




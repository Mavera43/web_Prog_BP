<?php
require "islemler.php";
// echo "<pre>";
// print_r($_POST);
// echo "seçtiğiniz operatör: ".$_POST["secenek"];
switch ($_POST["secenek"]) {
    case 1:
        topla($_POST["sayi1"],$_POST["sayi2"]);
        break;
    case 2:
        carpma($_POST["sayi1"],$_POST["sayi2"]);
        break;
    case 3:
        cikartma($_POST["sayi1"],$_POST["sayi2"]);
        break;
    case 4:
        bolme($_POST["sayi1"],$_POST["sayi2"]);
        break;
    default:
       yaz("Seçtiğiniz operatör yanlış.","Tekrar deneyin","red","white");
        break;
}
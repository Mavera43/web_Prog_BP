<?php

echo "<h2> Action_page sayfası...</h2>";
echo "<h4>Gelen Veriler....</h4>";
echo "<pre>";
print_r($_POST);
echo "</pre>";


echo "<hr>";

    echo "Seçilen Dİller: <br>";
    echo "<pre>";
    $varmi=isset($_POST["dil"]);
    if ($varmi){
        print_r($_POST["dil"]);
    echo "</pre>";
    echo "---------------<br>";
    
    foreach ($_POST["dil"] as $key => $value) {
         echo "$value.<br>";
    }
    echo "ilk eleman : ".$_POST["dil"][0]."<br>";

    echo "Seçtiğiniz dil sayısı :".count($_POST["dil"]);

    }
    else
    echo " Seçili bir dil yoktur...";

echo "<hr>";
echo $_POST["yeni"];
?>
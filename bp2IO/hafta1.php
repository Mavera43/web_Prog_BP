<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgisayar Programcılığı İÖ</title>
</head>
<body>
    Tavşanlı Meslek Yüksekokulu
    <?php
        echo "<h1 style=color:blue >Burası PHP kodlarının olduğu kısım.</h1>
        <p>Tavşanlı Meslek Yüksekokulu</p>";
        $x=10;
        $y=55.68;
        $z=4>31;
        $str="merhaba tavşanlı";
        $ad_soyad;
        $_1adres;
        $_2adres;

        $a=10;
        echo '$a'." değişkeninin tipi : ".gettype($a)."'dir";
        echo "<br>";
        $a=true;
        echo '$a'." değişkeninin tipi : ".gettype($a)."'dir";
        echo "<br>";

        $sonuc=((5+9)*10)/5;
        echo "z değişkeninimizin değeri : ".$z;
        echo "<br>";
        echo "z değişkeninimizin değeri : $z'dir. ";
        echo "<br>";

        echo '$z'." değişkeninin tipi : ".gettype($z)."'dir";
        echo "<br>";
        echo '$x'." değişkeninin tipi : ".gettype($x)."'dir";
        echo "<br>";
        echo '$y'." değişkeninin tipi : ".gettype($y)."'dir";
        echo "<br>";
        echo '$str'." değişkeninin tipi : ".gettype($str)."'dir";
        echo "<br>";


        var_dump($z);
        echo "<br>";     
        var_dump($x);
        echo "<br>";
        var_dump($y);
        echo "<br>";
        var_dump($str);
        echo "<br>";
        // $z değişkeninin tipi : ... 'dır.




        echo $sonuc;
        
        echo 'Tavşanlı<br>';
        echo "Meslek Yüksekokulu<br>";

        echo "$x+$y<br>";
        echo '<p style=color:red>$x+$y</p><br>';

       /* $ogrno=202; //küçük büyük harf duyarlıdır.
       // $OGRNO=202;
        echo "Öğrenci No: $OGRNO";
        ECHO "Öğrenci No: $OGRNO";*/

        echo "Kütahya'nın Pınarları";
        echo "<p >for döngüsünden çıkmak için
     \"<span style=color:blue;background-color:gray;>break</span>\"
     deyimi kullanır.</p>";



       // if(true)    
        
       // IF(FALSE)







    ?>

</body>
</html>
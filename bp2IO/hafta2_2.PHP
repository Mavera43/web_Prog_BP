<?php

$x=101;
$kalan=$x % 2;
echo "$x'in 2'ye göre modu : ".$kalan;
echo "<br>";
$y=599;
echo "$y'in 2'ye göre modu :".($y % 2);
echo "<br>";
$z=5;
echo $z**2;echo "<br>";
echo $z**3;echo "<br>";
echo $z**4;echo "<br>";
echo "$z'nin 5.nci kuvveti : ".$z**5;echo "<br><hr>";
echo Pow($z,2);echo "<br>";
echo Pow($z,3);echo "<br>";
echo Pow($z,4);echo "<br>";
echo Pow($z,5);echo "<br>";
echo "<hr>";
echo "Php Atama Operatörleri <br>";
$z=10;
echo $z."<br>";
//$z=$z+5;
$z +=15;// += ekleyerek atama yapar
echo "toplayarak ekleme :".$z."<br>";
$a=50;
$b=30;
$a=$a-$b;
$a -=$b;// -= eksilterek atama yapar($a=$a-$b; aynısı)
echo "eksilterek ekleme :".$a."<br>";
$c=25;
$c *=5;
echo "çarparak ekleme :".$c."<br>";
$d=60;
$d /=2;
echo "bölerek ekleme :".$d."<br>";
$m=40;
$m %=3;
echo "mod alarak ekleme :".$m."<br>";

$str="Tavşanlı ";
$str .="Meslek Yüksekokulu";
echo "Birleştirerek ekleme : ".$str."<br>";
echo "<hr><br>";
echo "Artırma ve Eksiltme operatörleri"."<br>";
$sayı=45;

echo "sayının yeni değeri :".++$sayı."<br>";
echo "sayının yeni değeri :".$sayı."<br>";
echo "<hr>";
$sayı=15;
--$sayı;

echo "sayının yeni değeri :".$sayı--."<br>";
echo "sayının yeni değeri :".$sayı."<br>";

echo "<hr><br>";
echo "Karşılaştırma operatörleri<br>";
$x=(10=="10"); //eşitmidir? //true
var_dump($x);echo "<hr><br>";
$x=(10==="10"); //denkmidir? //false
var_dump($x);echo "<hr><br>";
$x=(10-2)>=9;  //büyük veya eşitmi?  //false
var_dump($x);echo "<hr><br>";

$x=(10-1)<=9;  //küçük veya eşitmi?  //true
var_dump($x);echo "<hr><br>";

$x=(10-1) < 9;  //küçük müdür?  //false
var_dump($x);echo "<hr><br>";

$x=(10-1) > 9;  //büyük müdür?  //false
var_dump($x);echo "<hr><br>";

$x= !(10-1 > 9);  //   true
var_dump($x);echo "<hr><br>";

echo "---------";
$x= !(10-1 >= 9);  //   false
var_dump($x);echo "<hr><br>";

$x = (10>9 || 9>10);  //true   //veya simgesi ||
$x = (10>9 && 11==11);   //true // and simgesi &&
$x = (10>9 && 11==112);   //false
        
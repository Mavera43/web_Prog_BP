<?php 
$dizi1=[1,3,8,0,7];
echo $dizi1[3];
$dizi1[3]=15;
echo "<br>";
echo $dizi1[3];
function echoLine($str,$renk){
    echo "<h4 style=color:{$renk}> ".$str."</h4><br>";
}
$ogrenci = Array("ogrno"=>202033502001,
                 "adsoyad"=>"Celal Yılmaz",
                 "vize"=>85,
                 "final"=>50);
echo "<pre>";
print_r($ogrenci);
echo "</pre>";     
echo "<br>"; 

echoLine($ogrenci["adsoyad"]."'ın Vize Notu :".
$ogrenci["vize"],"blue");
echoLine($ogrenci["adsoyad"]."'ın Final Notu :".
$ogrenci["final"],"red");
/*
echo $ogrenci["adsoyad"]."'ın Vize Notu :".$ogrenci["vize"];
echo "<br>";
echo $ogrenci["adsoyad"]."'ın Vize Notu :".$ogrenci["final"];
*/
echo "<hr>";
$kurslar = Array("C#", "Php", "JavaScript","Pyton","C++");
$kurslar1 = Array("dil1"=>"C#", "dil2"=>"Php", 
"dil3"=>"JavaScript","dil4"=>"Pyton","dil5"=>"C++");
echo "Kurslarımızın sayısı :".count($kurslar)."<br>";
foreach ($kurslar as $key => $value) {
     echo $key."=".$value."<br>";    
}
  

?>
<html>
    <head>
</head>
<body>
    
<?php

function yaz($str, $sonuc, $bg="Blue",$fg="yellow"){
   echo' <p style="background-color:'.$bg.'; color:'.$fg.'">
        '.$str.$sonuc.'</p>';
}
function topla($s1=0,$s2=0){
    $sonuc=$s1+$s2;
    yaz("Toplama işlemi sonucu : ",$sonuc,"red","white");
}
function cikartma($s1=0,$s2=0){
    $sonuc=$s1-$s2;
    yaz("Çıkartma işlemi sonucu : ",$sonuc,"blue","white");
}
function carpma($s1=0,$s2=0){
    $sonuc=$s1*$s2;
    yaz("Çarpma işlemi sonucu : ",$sonuc,"green","white");
}
function bolme($s1=0,$s2=1){
    if($s2==0)
      yaz("Bölme işlemi sonucu : "," Sayı sıfıra bölünemez","magenta","white");
    else
       {
           $sonuc=$s1/$s2;
           yaz("Bölme işlemi sonucu : ",$sonuc,"magenta","white");
        }
}
topla(15, 78);
cikartma(70,50);
carpma(5,50);
bolme(10);

?>
</body>
</html>



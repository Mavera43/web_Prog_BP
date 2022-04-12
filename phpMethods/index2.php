<html>
    <head>
</head>
<body>
    
<?php
include_once "islemler.php";

topla(15, 78);
cikartma(70,50);
carpma(5,50);
bolme(10);
yaz("bugün methodları öğrendik.","","blue","white");
$dizi=array(10,5,8,9,40);
foreach ($dizi as $key => $value) {
    yaz($key,$value,"red","white");
    }
?>
</body>
</html>



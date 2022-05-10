<?php 
// ? soru işareti ile parametre kullanımı
$host="localhost";
$database="northwind";
$user="root";
$password="";
try{
    $ulke="France";
    $sehir="Paris";
    $conn=new PDO("mysql:host=$host;dbname=$database",
    $user,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $sql="select * from customers where Country=? and City=?";//sql cümlemiz
    $sonuc=$conn->prepare($sql);//sorguyu hazırlar
   // $sonuc->execute([$sehir]);//sorguyu çalıştırır
    $sonuc->execute(array($ulke,$sehir));//sorguyu çalıştırır
    echo "satır sayısı :".$sonuc->rowCount();
    $ulkeler=$sonuc->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";print_r($ulkeler);
}
catch (PDOException $e){
        echo "Hata oluştu".$e->getMessage();
}
finally{
    $conn=null;
}


<?php 
// :paremetre adı şeklinde(named paremeter) 
// ile parametre kullanımı
$host="localhost";
$database="northwind";
$user="root";
$password="";
try{
    $ulke=@$_POST["ulke"];
    $sehir=@$_POST["sehir"];
  //  $sehir="Paris";
    $conn=new PDO("mysql:host=$host;dbname=$database",
    $user,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $sql="select * from customers where (Country=:ulke) and (City=:sehir)";//sql cümlemiz
    $sonuc=$conn->prepare($sql);//sorguyu hazırlar
   // $sonuc->execute([":ulke"=>$sehir,":sehir"=>$sehir]);//sorguyu çalıştırır
    $sonuc->execute(array(":ulke"=>$ulke, ":sehir"=>$sehir));//sorguyu çalıştırır
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


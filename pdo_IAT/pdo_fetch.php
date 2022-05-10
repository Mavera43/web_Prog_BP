<?php 
$host="localhost";
$database="northwind";
$user="root";
$password="";
try{
    $conn=new PDO("mysql:host=$host;dbname=$database",
    $user,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $sql="select * from customers";//sql cümlemiz
    $sonuc=$conn->prepare($sql);//sorguyu hazırlar
    $sonuc->execute();//sorguyu çalıştırır
    //fetch veya fetchAll metodu ile verileri çekeriz
    //fetch metodu tek bir satır çeker
    //fetchAll ise tüm satırları bir dizi(array) olarak çeker
    // echo "<pre>";
    // print_r($calisanlar)      ;                        
    while($row = $sonuc->fetch(PDO::FETCH_ASSOC) )
    {
        echo "<b>".$row["ContactTitle"]."</b>, ".$row["ContactName"]."<br>";
    }
}
catch (PDOException $e){
        echo "Hata oluştu".$e->getMessage();
}
finally{
    $conn=null;
}


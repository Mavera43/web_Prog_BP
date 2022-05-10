<?php
$host="localhost";
$database="northwind";
$username="root";
$password="";
try{
    $ulke="Germany"; $sehir="Berlin";
    $conn=new PDO("mysql:host=$host; dbname=$database",
    $username,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $sql="select ContactName, ContactTitle, CompanyName,
     Country,City from customers where Country = ? and City = ? ";
    //sql cümlelerini hazırlayan metod: prepare metodu
    $sonuc=$conn->prepare($sql);//sql deyimini çalıştırmak için hazırlar
    $sonuc->execute([$ulke, $sehir]); //sorguyu çalıştırır.
    $calisanlar=$sonuc->fetchAll(PDO::FETCH_OBJ);
    foreach ($calisanlar as $key => $value) {
        echo$value->CompanyName." == ".$value->ContactTitle.", ".
        $value->ContactName.", ".
        "<span style='color:red'>".$value->Country.",</span> ".
        "<span style='color:blue'>".$value->City."</span><br>";
       
    }
}
catch(PDOException $e){
    echo "Hata OLuştu : ".$e->getMessage();
}
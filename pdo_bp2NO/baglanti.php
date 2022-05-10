<?php
$host="localhost";
$database="northwind";
$username="root";
$password="";
try{
    $conn=new PDO("mysql:host=$host; dbname=$database",
    $username,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $sql="select EmployeeId, LastName,FirstName, Title, Salary from employees";
    //sql cümlelerini hazırlayan metod: prepare metodu
    $sonuc=$conn->prepare($sql);//sql deyimini çalıştırmak için hazırlar
    $sonuc->execute(); //sorguyu çalıştırır.
    //execute yapılmış olan verileri getirmek için fetch yada fetchAll metodlarından
    //biri kullanılır.
    //$calisanlar=$sonuc->fetch(PDO::FETCH_ASSOC);
    echo "<b>Listelenecek Satır Sayısı : </b><i>".$sonuc->rowCount()."</i><br>";
    while($value=$sonuc->fetch(PDO::FETCH_OBJ))
    {
        echo "<b>".$value->Title."<b>"." == ".$value->LastName.", ".$value->FirstName."<br>";
    }

  /*  while($value=$sonuc->fetch(PDO::FETCH_ASSOC))
    {
        echo "<b>".$value["Title"]."<b>"." == ".$value["LastName"].", ".$value["FirstName"]."<br>";
    }*/

  /*  echo "<pre>";
    print_r($calisanlar);*/

/*$calisanlar=$sonuc->fetchAll(PDO::FETCH_ASSOC);
    foreach ($calisanlar as $key => $value) {
       echo "<b>".$value["Title"]."<b>"." == ".$value["LastName"].", ".$value["FirstName"]."<br>";
    }*/
}catch(PDOException $e)
{
    echo "Hata OLuştu : ".$e->getMessage();
}
finally{
$conn=null;
}

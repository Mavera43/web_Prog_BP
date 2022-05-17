<?php

// try{  
//     $sehir="London"; //$_GET["sehir"] yada $_POST["sehir"]
//     $bolge="SP";     //$_GET["bolge"] yada $_POST["bolge"]
//     //try bloğu hata olması muhtemel kod satırlarının yazıldığı block'tur
//     $connection= new PDO("mysql:host=localhost; dbname=northwind","root","");
//     $sqlCumlesi="select * from Customers where City <> ? and Region = ?";
//     //çalıştırılmak üzere bir sorguyu hazırlar
//     $sorgu=$connection->prepare($sqlCumlesi);
//     //prepare ile hazırlanan sorguyu çalıştırır.
//     $sorgu->execute([$sehir,$bolge]);
//     //çalıştırılan sorgudaki verileri bir diziye(array) aktarır(fetchAll metodu)
//     $sonuc=$sorgu->fetchAll(PDO::FETCH_ASSOC);
//     echo "<table border=1>";
//     echo "<tr><th>Şirket Yetkilisi</th><th>Şirket Adı</th><th>Ünvan</th><th>Şehir</th></tr>";
//     foreach ($sonuc as $key => $c) {
//         echo "<tr><td>".$c["ContactName"]."</td><td>".$c["CompanyName"]."</td><td>".$c["ContactTitle"]."</td><td>".$c["City"]."</td></tr>";
//     }
//     echo "<tr><td style='color:red;font-weight:bolder' colspan=4 align=right>Listelenen Kayıt Sayısı :".count($sonuc)."</td></tr>";
//     echo "</table>";
    
    
// }
// //try kullanıldıysa mutlaka catch bloğu da kullanılacak.
// catch(PDOException $e){
//     echo "hata oluştu".$e->getMessage();
// }
// finally{
//     $connection=null;
//    // echo "İşlemler Başarıyla bitti";
// }




// try{  
//     $sehir="London"; //$_GET["sehir"] yada $_POST["sehir"]
//     $bolge="SP";     //$_GET["bolge"] yada $_POST["bolge"]
//     //try bloğu hata olması muhtemel kod satırlarının yazıldığı block'tur
//     $connection= new PDO("mysql:host=localhost; dbname=northwind","root","");
//     $sqlCumlesi="select * from Customers where City <> :sehir and Region = :bolge";
//     //çalıştırılmak üzere bir sorguyu hazırlar
//     $sorgu=$connection->prepare($sqlCumlesi);
//     //prepare ile hazırlanan sorguyu çalıştırır.
//     //$prm=array(":sehir"=>$sehir, ":bolge"=>$bolge);
//     $sorgu->execute([":sehir"=>$sehir, ":bolge"=>$bolge]);
   
//     //çalıştırılan sorgudaki verileri bir diziye(array) aktarır(fetchAll metodu)
//     $sonuc=$sorgu->fetchAll(PDO::FETCH_ASSOC);
//     echo "<table border=1>";
//     echo "<tr><th>Şirket Yetkilisi</th><th>Şirket Adı</th><th>Ünvan</th><th>Şehir</th></tr>";
//     foreach ($sonuc as $key => $c) {
//         echo "<tr><td>".$c["ContactName"]."</td><td>".$c["CompanyName"]."</td><td>".$c["ContactTitle"]."</td><td>".$c["City"]."</td></tr>";
//     }
//     echo "<tr><td style='color:red;font-weight:bolder' colspan=4 align=right>Listelenen Kayıt Sayısı :".count($sonuc)."</td></tr>";
//     echo "</table>";
    
    
// }
// //try kullanıldıysa mutlaka catch bloğu da kullanılacak.
// catch(PDOException $e){
//     echo "hata oluştu".$e->getMessage();
// }
// finally{
//     $connection=null;
//    // echo "İşlemler Başarıyla bitti";
// }


// try{
//     $connection= new PDO("mysql:host=localhost; dbname=northwind","root","");
//     $sql = "update Customers set Region=? where City=? ";
//     $update=$connection->prepare($sql);
//     $update->execute([ $_GET["value"], $_GET["sehir"]  ]);
//     if($update)
//         echo "Kayıt Güncellendi. Güncellenen Kayıt Sayısı :".$update->rowCount();
//         else
//         echo "Güncelleme Hatası";
// }
// catch(PDOException $e){
//     echo "hata oluştu".$e->getMessage();
// }
// finally{
//          $connection=null;
//         // echo "İşlemler Başarıyla bitti";
//      }


try{
         $connection= new PDO("mysql:host=localhost; dbname=northwind","root","");
    $sql= "insert into categories (CategoryName, Description )  values ('Leblebi','Tavşanlı özgü bir ürün')";
    $insert = $connection->prepare($sql);
    $insert->execute();
    if($insert)
        echo "Kayıt eklendi";
        else
        echo "Kayıt Eklenmedi...";

}
catch(PDOException $e){
    echo "hata oluştu".$e->getMessage();
}
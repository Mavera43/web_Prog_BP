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
    $calisanlar=$sonuc->fetchAll(PDO::FETCH_NUM);//tüm satırlar $calisanlar 
                                //isinmli değişkene aktarıldı
                                
    foreach ($calisanlar as $key => $value) {
       echo $value[0].", ".$value["1"]."<br>";//fetch_assoc ile kullanım
       //echo $value->ContactTitle.", ".$value->ContactName."<br>";//fetch_obj ile kullanım
    }


}
catch (PDOException $e){
        echo "Hata oluştu".$e->getMessage();
}
finally{
    $conn=null;
}


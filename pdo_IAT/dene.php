<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
<?php
require "db.php";

////////////////////////////////////////////////////////////
//veriler field isimleri ile getiriliyor
// $baglanti= new db();

// $result=$baglanti->getRecordAll("select * from products",PDO::FETCH_OBJ);
// echo "<pre>";
// //print_r($result);
// //var_dump($result);
 
// echo "<table class='table table-bordered'>
// <tr>
//   <th style='width:50px'>Ürün Adı</th>
//   <th style='width:50px'>Ürün Fiyatı </th>
// </tr>";
// foreach ($result as $key => $value) {
//   echo "<tr style='border 1px solid red'>";
//   echo "<td style='width:50px'>".$value->ProductName."</td>".
//   "<td>".$value->UnitPrice."</td></tr>";
// }
// echo "<tr ><td align=right colspan=2>".count($result)."</td></tr></table>";







////////////////////////////////////////////////////////////
//veriler indis numaraları ile getiriliyor
// echo "<hr><br><br>";
// $baglanti= new db();
// $result=$baglanti->getRecordAll("select * from products",PDO::FETCH_NUM);
// echo "<pre>";
// print_r($result);

/// FETCH_OBJ ile veri getirme 
////////////////////////////////////////////////////////////
    // echo "<hr><br><br>";
    // $baglanti= new db();
    // $result=$baglanti->getRecordAll("select * from products",PDO::FETCH_OBJ);
    // echo "<pre>";
    // print_r($result);

    //tek parametre gönderilen sorgu/CategoryId'si 3 olanları listeler
    ////////////////////////////////////////////////////////////
    // echo "<hr><br><br>";
    // $kategori=array(3,5);
    // try{
    //   $baglanti= new db();
    //   $result=$baglanti->getRecordAll("select * from products
    //   where CategoryID in (?,?) ",PDO::FETCH_OBJ,[3,5]);
    //   echo "<pre>";
    //   print_r($result); 
    // }
    // catch(PDOException $e){
    //     echo "Hata Oluştu...".$e->getMessage();
    // }
    // finally{
    //   $baglanti=null;
    // }
  
    // named parametre kullanımı
    echo "<hr><br><br>";
  //  $cat1=5;
  //  $adet=10;
  //   try{
  //     $baglanti= new db();
  //     $result=$baglanti->getRecordAll("select * from products 
  //     where CategoryID = :cat1 and UnitsInStock >= :adet 
  //     order by UnitsInStock
  //     ",
  //     PDO::FETCH_OBJ,[":cat1"=>$cat1, ":adet"=>$adet]);
  //     echo "<pre>";
  //    // print_r($result); 
  //    foreach ($result as $key => $pr) {
  //       echo $pr->ProductName."--".
  //       $pr->CategoryID."--".
  //       $pr->UnitsInStock."<br>";
  //    }
  //   }
  //   catch(PDOException $e){
  //       echo "Hata Oluştu...".$e->getMessage();
  //   }
  //   finally{
  //     $baglanti=null;
  //   }
  
    //birden fazla parametre gönderilen sorgu/CategoryId'si 1 veya 3 olanları listeler
    ////////////////////////////////////////////////////////////
    // echo "<hr><br><br>";
    //   $baglanti= new db();
    //   $result=$baglanti->getRecordAll("select * from products where CategoryID in (?,?)",PDO::FETCH_ASSOC,[1,3]);
    // echo "Kayıt Sayısı :".$result["rowCount"];
    //  echo "<pre>";
    //   print_r($result);

    //sorgu sonuçlarını City field'ına göre grouplayarak getirir
    ////////////////////////////////////////////////////////////
    // echo "<hr><br><br>";
    // $baglanti= new db();
    // $result=$baglanti->getRecordAll("select City, ContactTitle, ContactName from customers order by ContactTitle",PDO::FETCH_GROUP | PDO::FETCH_OBJ);
    // //echo "<pre>";
    // //print_r($result);
    // foreach ($result as $City => $CityResults) {
    //     echo "<b><i>".$City."</b></i><br>";      //önce group adını(City) yazdırıyoruz. 
    //                             //CityResults ise City'de bulunan kişileri array olarak tuttuğundan ikinci bir foreach kullanıyoruz
    //     foreach ($CityResults as $key => $value) {
    //             echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".($key+1).". ".$value->ContactName."<br>";
    //             // &nbsp; bu karakterler html'de boşluk karekteridir.
    //     }
    //     echo "<br>";
    // }

    //tablodan kayıt aramak tek satırlık veri aranacak--
   //Örn. kullanıcı adı ve şifresi gönderilen parametrelere uygun olanı getir
    //  echo "<hr><br><br>";
    //  $baglanti= new db();
    //  $txtUsername="senol";//$_GET["txtUsername"];
    //  $txtPassword="123d";//$_GET["txtPassword"];
    //  $result=$baglanti->getRecord("select * from users where username=? and
    //   password=?",
    //  PDO::FETCH_OBJ,[$txtUsername, $txtPassword ]);
    //   echo "Kayıt Sayısı :".$result->rowCount."<br>" ;
    //  //Not: sorgudan tek satır döneceğini bildiğimiz için foreach yada for döngüsüne gerek kalmadı.
    //  //doğrudan $result değişkeninin elemanlarına erişebiliriz. Aşağıdaki gibi

    //  echo $result->fullname."<br>";
    //  echo $result->username."<br>";
    //  echo $result->password."<br>";
     



  //echo "<hr><br><br>";
  //     $baglanti= new db();
  //     $htmlContent=$baglanti->getHtmlTable("select * from products where CategoryID = (?)",PDO::FETCH_OBJ ,[3]);
  //   //  $result=$baglanti->getRecordAll("select * from products where CategoryID = (?)",PDO::FETCH_OBJ,[3]);
  //     echo $htmlContent;
  //    // echo "<pre>";
  //  //   print_r($result);
   
   
   /////  belirtilen bir veritabanındaki bir tablo'nun field'larını listelemek
//   $baglanti= new db();
//   $result=$baglanti->getRecordAll(" SELECT COLUMN_NAME
//    FROM INFORMATION_SCHEMA.COLUMNS
//    WHERE TABLE_SCHEMA = 'northwind' AND TABLE_NAME = 'products'",PDO::FETCH_ASSOC);
//  echo "<pre>";
//   print_r($result);

 


  // $baglanti= new db();
  // $artis=1.10;
  // try{
  //   $update=$baglanti->updateRecord("update products set UnitPrice=UnitPrice+(UnitPrice * 0.10) 
  //   where CategoryID=?", [1]);
  //   if($update>0)
  //     {
  //       echo "<pre>";
  //       echo "Etkilenen kayıt sayısı :".$update;
  //   }
  //   else
  //   {echo "Kayıt güncellenmedi";}
  // }
  // catch(PDOException $e)
  // {echo $e->getMessage(); }
  //  finally{$db=null;}
 

/*
  $username="can";
  $password = "444";
  $fullname="Can Canan";
  $department=5;
  $baglanti= new db();
  try{
    //paremetresiz insert sorgusu
    // $insert=$baglanti->insertRecord("
    // insert into users (username, password, fullname,department)
    //         VALUES(\"Ali\",\"999\",\"Ali Güler\",2);
    // ");
    //paremetreLİ insert sorgusu
    $insert=$baglanti->insertRecord("insert into users
         (username, password, fullname,department)
  values (?,?,?,?) ",[$username,$password,$fullname,$department]);

    if($insert>0)
      {
        echo "<pre>";
        echo "Son eklenen kayıt ID :".$insert;
    }
    else
    {echo "Kayıt eklenmedi";}
  }
  catch(PDOException $e){echo $e->getMessage();}
  finally{$db=null;}
  */
 ?>
</body>
</html>
<?php
require "db.php";
$cat1=5;
$adet=10;
 try{
   $baglanti= new db();
   $result=$baglanti->getRecordAll("select * from products 
   where CategoryID = :cat1 and UnitsInStock >= :adet 
   order by UnitsInStock
   ",
   PDO::FETCH_OBJ,[":cat1"=>$cat1, ":adet"=>$adet]);
echo "<table  cellpadding=5 border=1>";
echo "<tr><th>Ürün Adı </th><th>Kategori ID</th><th>Stok Adedi</th></tr>";
  foreach ($result as $key => $pr) {
     echo "<tr>";
     echo "<td>".$pr->ProductName."</td>";
     echo "<td align=right >".$pr->CategoryID."</td>";
     echo "<td align=right >".$pr->UnitsInStock."</td>";
  }
  echo "<tr><td colspan=3 align=right>Listelenen :". count($result) ."</td></tr></table>";
 }
 catch(PDOException $e){
     echo "Hata Oluştu...".$e->getMessage();
 }
 finally{
   $baglanti=null;
 }
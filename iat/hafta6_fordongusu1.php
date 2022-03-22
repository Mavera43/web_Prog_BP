<?php 
echo "<table border =1>";
echo "<tr><td>Tek Sayılar</td><td>Çift Sayılar</td></tr>";
for ($i=1;$i<100;$i++)
{
    $sayi=rand(100,450);  // 100 ile 450 arasında rastgele sayı üretir.
    echo "<tr>";   
      echo "<td>".(($sayi % 2 !=0)?$sayi:"")."</td>"; echo "<td>".(($sayi % 2 ==0)?$sayi:"")."</td>";
      echo "</tr>";
    }
    

<?php
class db{
    public $conn;
    public $host="localhost";
    public $database="northwind";
    private $user="root";
    private $password="";
    public $dsn="";
    function __construct()
    {
        $this->dsn = "mysql:host=".$this->host."; dbname=". $this->database."; charset=UTF8";
        try {
                $this->conn = new PDO($this->dsn, $this->user, $this->password);
            }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function getRecordAll($sqlString, $method="PDO::FETCH_ASSOC", $sqlParams=[]){
        try {
            $sorgu = $this->conn->prepare($sqlString);
            $sorgu->execute($sqlParams);
            $result=$sorgu->fetchAll($method );
            return $result;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }      
    }
    function updateRecord($sqlString,  $sqlParams=[]){
        try {
            $sorgu = $this->conn->prepare($sqlString);
            $sorgu->execute($sqlParams);
            $count=$sorgu->rowCount();
            return $count;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }     
    }

    function insertRecord($sqlString, $sqlParams=[]){
       // try {
            $sorgu = $this->conn->prepare($sqlString);
            $sorgu->execute();
            //$lastInsertId=$this->conn->lastInsertId();
            //return $lastInsertId;
             if($sorgu)
                return true;
            else
                return false; 
      //  } catch (PDOException $e) {
     //       echo ("classdan hata : ".$e->getMessage());
     //   }     
    }

    function getRecord($sqlString, $method="PDO::FETCH_ASSOC", $sqlParams=[]){
        try {
            $sorgu = $this->conn->prepare($sqlString);
            $sorgu->execute($sqlParams);
            $result=$sorgu->fetch($method);
            $result->rowCount  = $sorgu->rowCount();    //bulunan kayıt sayısını result dizisine ekle
            return $result;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }        
    }
    function getHtmlTable($sqlString, $method="PDO::FETCH_ASSOC", $sqlParams=[]){
       $result = $this->getRecordAll($sqlString, $method, $sqlParams);
        $htmlContent='  <table class="table">
        <thead>
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category ID</th>
          </tr>
        </thead>
        <tbody>
    ';
    foreach ($result as $key => $value) {
        $htmlContent .= "    
            <tr>
            <th scope=row>".$value->ProductID."</th>
            <td>".$value->ProductName."</td>
            <td>".$value->CategoryID."</td>
            <td></td>
            </tr>
        ";    
    }
$htmlContent .= "</tbody>
</table>";
return $htmlContent;
    }
}

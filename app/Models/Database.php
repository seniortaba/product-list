<?php
namespace App\Models;

use PDO;
use PDOException;

class Database
{
    private $host = "Localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "product_list";
    private $connection;
    private $stmt;
    public $id;

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
        try {
            $this->connection = new PDO($dsn, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage() . "</br>";
        }
    }

    public function prepare($sql)
    {
       $this->stmt = $this->connection->prepare($sql);
       return $this->stmt;
    }

    public function bindParam($array)
    {
        foreach($array as $key => &$value){
            $this->stmt->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        $this->stmt->execute();
        $this->id = $this->connection->lastInsertId();
        return $this->id;
    }

}

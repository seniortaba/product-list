<?php

namespace App\Models;

use App\Models\Database;
use App\Classes\Template;

class Product extends Template
{

    public function __construct()
    {
        $this->dbh = new Database;
    }

    public function fieldsCheck()
    {
        if (!empty($_POST['SKU']) && !empty($_POST['name']) && !empty($_POST['price'])) {
            $this->insertData('product', null);
        } else {
            header('Location:Product/new.php?error=PleaseFillAllFields');
        }

    }

    public function insertData($table, $productID)
    {
        $sql = "INSERT INTO $table(SKU, name, price)
              VALUES(:SKU, :name, :price)";

        $this->dbh->prepare($sql);
        $this->dbh->bindParam([
            'SKU' => $_POST['SKU'],
            'name' => $_POST['name'],
            'price' => $_POST['price']
        ]);
    }

}
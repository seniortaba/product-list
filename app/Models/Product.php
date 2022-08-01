<?php

namespace App\Models;

use App\Classes\Template;

class Product extends Template
{
    public function insertData($database, $table)
    {
        if ($this->fieldsCheck() === ture) {
            $sql = "INSERT INTO $table(SKU, name, price)
              VALUES(:SKU, :name, :price)";

            $database->prepare($sql);
            $database->bindParam([
                'SKU' => $_POST['SKU'],
                'name' => $_POST['name'],
                'price' => $_POST['price']
            ]);
        }
    }

    public function fieldsCheck()
    {
        if (!empty($_POST['SKU']) && !empty($_POST['name']) && !empty($_POST['price'])) {
            return true;
        } else {
            header('Location:Product/new.php?error=PleaseFillAllFields');
        }
    }
}
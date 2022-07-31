<?php

namespace App\Models;

use App\Models\Database;
use App\Classes\Template;

class Size extends Database
{
    public function __construct()
    {
        $this->dbh = new Database();
    }

    public function fieldsCheck()
    {
        if (isset($_POST['size']) && !empty($_POST['size'])) {
            $this->insertData('size',  $this->dbh->id);
        } else {
            header('Location:Product/new.php?error=PleaseFillSizeField');
        }
    }

    public function insertData($table, $productID)
    {
        $sql = "INSERT INTO $table(product_id, size) VALUES(:product_id, :size)";
        $this->dbh->prepare($sql);
        $this->dbh->bindParam([
            'product_id' => $productID,
            'size' => $_POST['size']
        ]);

    }
}
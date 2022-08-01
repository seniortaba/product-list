<?php

namespace App\Models;

use App\Classes\Template;

class Size extends Template
{
    public function insertData($database, $table)
    {
        if ($this->fieldsCheck() === true) {
            $sql = "INSERT INTO $table(product_id, size) VALUES(:product_id, :size)";
            $database->prepare($sql);
            $database->bindParam([
                'product_id' => $database->id,
                'size' => $_POST['size']
            ]);
        }
    }

    public function fieldsCheck()
    {
        if (isset($_POST['size']) && !empty($_POST['size'])) {
            return true;
        } else {
            header('Location:Product/new.php?error=PleaseFillSizeField');
        }
    }

}
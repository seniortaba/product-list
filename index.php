<?php

use App\Models\Product;
use App\Models\Size;
use App\Models\Weight;

require __DIR__ . '/vendor/autoload.php';
//require_once 'Classes\Product.php';

    $product = new Product();
    $size = new Size();
    $weight = new Weight();

    if (isset($_POST['submit'])) {
        $product->fieldsCheck();
        if(isset($_POST['size']) && !empty($_POST['size']))
        $size->fieldsCheck();
        if(isset($_POST['weight']) && !empty($_POST['weight']))
        $weight->fieldsCheck();

        header('Location:Product/list.php?success=true');
    }

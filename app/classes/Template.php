<?php

namespace App\classes;

abstract class Template
{
    abstract public function fieldsCheck();
    abstract public function InsertData($table, $productID);
}
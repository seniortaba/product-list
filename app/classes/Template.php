<?php

namespace App\classes;

use App\Models\Database;

abstract class Template extends Database
{
    abstract public function fieldsCheck();
    abstract public function InsertData(Database $database, $table);
}
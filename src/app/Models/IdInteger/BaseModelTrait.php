<?php

namespace App\Models\IdInteger;

use App\Models\TableNameTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait BaseModelTrait
{
    use HasFactory;
    use TableNameTrait;

    protected string $prefix = 'id_integer';
}

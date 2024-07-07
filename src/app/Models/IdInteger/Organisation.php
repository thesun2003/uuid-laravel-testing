<?php

namespace App\Models\IdInteger;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use BaseModelTrait;

    protected $fillable = [
        'name',
    ];
}

<?php

namespace App\Models\UuidString;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use BaseModelTrait;

    protected $fillable = [
        'name',
    ];
}

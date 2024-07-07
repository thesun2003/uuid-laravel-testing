<?php

namespace App\Models\UuidString;

use App\Models\TableNameTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait BaseModelTrait
{
    use HasFactory;
    use HasUuids;
    use TableNameTrait;

    protected string $prefix = 'uuid_string';
}

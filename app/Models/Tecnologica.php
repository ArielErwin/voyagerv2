<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tecnologica extends Model
{
    protected $table = 'tecnologica';
    use SoftDeletes;
}

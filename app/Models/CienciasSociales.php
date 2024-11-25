<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CienciasSociales extends Model
{
    protected $table = 'cienciassociales';
    use SoftDeletes;
}

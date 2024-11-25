<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Uyuni extends Model
{
    protected $table = 'uyuni';
    use SoftDeletes;
}

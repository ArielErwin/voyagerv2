<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Vicerrectorado extends Model
{
    protected $table = 'vicerrectorado';
    use SoftDeletes;
}

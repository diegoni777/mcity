<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['id','producto','cantidad','precio','fotop','sub_total','total'];
}

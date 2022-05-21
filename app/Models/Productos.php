<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $primaryKey = 'idp';
    protected $fillable = ['idp','producto','codigo','cantidad','tipo','precio','fotop'];
}

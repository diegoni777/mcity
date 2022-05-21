<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function ver_cuenta(){
    return view('cuenta');
    }
}

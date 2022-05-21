<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    public function ver_accesorios(){
    

        $consulta= Productos::SELECT ('Productos.producto','Productos.precio','Productos.fotop','Productos.tipo')
        ->WHERE('tipo','accesorios')->get()
        ;

        return view('/accesorios')
        ->with('accesorios',$consulta);
    }

}
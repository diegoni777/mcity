<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class TecnologiaController extends Controller
{
    public function ver_tecnologia(){
    

        $consulta= Productos::SELECT ('Productos.producto','Productos.precio','Productos.fotop','Productos.tipo')
        ->WHERE('tipo','tecnologia')->get()
        ;

        return view('/tecnologia')
        ->with('consulta',$consulta);
    }

    
}
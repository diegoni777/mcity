<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class RopaController extends Controller
{
    public function ver_ropa(){
    

        $consulta= Productos::SELECT ('Productos.producto','Productos.precio','Productos.fotop','Productos.tipo')
        ->WHERE('tipo','ropa')->get()
        ;

        return view('/ropa')
        ->with('consulta',$consulta);
    }

    
}

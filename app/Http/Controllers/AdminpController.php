<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class AdminpController extends Controller
{
    //---------------tabla-------------//
    public function lista(){
        $productos = productos::all();
        return view("admin")
        ->with(['productos' => $productos]);
    }

//---------------borrar producto--------------///
    public function borrar1(){
        $productos = productos::all();
        return view("adminp")
        ->with(['productos' => $productos]);
   
}
//--------------vista detalle--------------//
public function detalle($idp){
    $productos = Productos::find($idp);
    return view("detalle")
    ->with(['productos' => $productos]);
}

//------------actualizar producto----------//
public function editar_producto($idp){
    $productos = Productos::find($idp);
    return view("editar_producto")
    ->with(['productos' => $productos]);
}
///----------guardar actualizacion--------//
public function salvar(Productos $idp, Request $request){
    if($request->file('fotop1') != ''){
     //---------------------------------Foto, videos, archivos, etc-------------
       $file = $request->file('fotop1');
       $foto = $file->getClientOriginalName();
      
       $date = date('Ymd_His_');
       $fotop = $date . $foto;
       \Storage::disk('local')->put($fotop, \File::get($file));
        }
         else{
          $fotop = $request->fotop;
  }
       $query = Productos::find($idp->idp);
         $query->idp = $request->idp;
         $query->producto = $request->producto;
         $query->codigo = $request->codigo;
         $query->precio = $request->precio;
         $query->fotop = $fotop;
         $query->save();
         return redirect()->route('detalle', ['idp' => $idp->idp]);
  }


}
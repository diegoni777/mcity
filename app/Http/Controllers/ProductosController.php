<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Illuminate\Support\Facades\Crypt;

class ProductosController extends Controller
{
    public function alta_productos(){
        $consulta = Productos::orderBy('idp','DESC')
            ->take(1)->get();

        $cuantos = count($consulta);
        if ($cuantos==0) {
            $iddespues = 1;
        } else {
            $iddespues = $consulta[0]->idp + 1;
        }

        return view('/registerP')
            ->with('iddespues',$iddespues);

    }

    //Guardar Productos//
    public function guarda_productos(Request $request){
        
        $file = $request->file('fotop');
        if($file<>""){
          $img = $file->getClientOriginalName();
          $img2 = $request->idp . $img;
          \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
          $img2 = "sinfoto.png";
        }


        $this->validate($request,[
            'producto'=>'required',
            'codigo'=>'required',
            'tipo'=>'required',
            'precio'=>'required',
            'fotop'=>'required',
            
        ]);
    
        $productos = new Productos;
        $productos->idp = $request->idp;
        $productos->producto = $request->producto;
        $productos->codigo = $request->codigo;
        $productos->tipo = $request->tipo;
        $productos->cantidad = 0;
        $productos->precio = $request->precio;
        $productos->fotop = $img2;
        $productos->save();
        return view('/adminp');
    }


    //--------------------------------------------------->


    public function productos(){
        $productos= Productos::all();
        return view('/tablap', compact('productos'));
    }

    public function carrito (){
        return view('carrito');
    }

    public function agregar($idp){
        $productos = Productos::find($idp); //consulta a un solo producto//
        if(!$productos){abort('404');}

        $carrito = session()->get('carrito');

        if(!$carrito){
            $carrito = [
                $idp => [
                    "producto" => $productos->producto,
                    "tipo" => $productos->tipo,
                    "precio" => $productos->precio,
                    "cantidad" => 1,
                    "fotop" => $productos->fotop,

                ]
                ];
                session()->put('carrito', $carrito);
                return redirect()->back()->with('success','Producto añadido al carrito correctamente');

        }

        if(isset($carrito[$idp])){
            $carrito[$idp]['cantidad']++;
            session()->put('carrito', $carrito);
            return redirect()->back()->with('success','Producto añadido al carrito correctamente');
        }

        $carrito[$idp] = [
                "producto" => $productos->producto,
                "tipo" => $productos->tipo,
                "precio" => $productos->precio,
                "cantidad" => 1,
                "fotop" => $productos->fotop,
        ];
        session()->put('carrito', $carrito);
        return redirect()->back()->with('success','Producto añadido al carrito correctamente');

    }

    public function actualizar(Request $request){
        $carrito = session()->get('carrito');
        $carrito[$request->idp]['cantidad'] = $request->cantidad;
        session()->flash('success', 'El carrito se actualizo con exito');
    }

    public function borrar(Request $request){
        if ($request->idp){
            $carrito = session()->get('carrito');
            if(isset($carrito[$request->idp]));
            unset($carrito[$request->idp]);
            session()->put('carrito',$carrito);
        }
        session()->flash('success','Producto borrado con exito');
    }

}
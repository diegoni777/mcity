<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TecnologiaController;
use App\Http\Controllers\RopaController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AccesoriosController;
use App\Http\Controllers\TablapController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\AdminpController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/adminP', function () {
    return view('adminP');
});

Route::get('/adminV', function () {
    return view('adminV');
});


Route::get('/listapro', function () {
    return view('listapro');
});

Route::get('/listade', function () {
    return view('listade');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/cuenta', function () {
    return view('cuenta');
});



Route::get('/compu', function () {
    return view('compu');
});

Route::get('/productosn', function () {
    return view('productosn');
});
//----
//-----------login-----------//
    //ruta que manda a vista login//
    Route::get('/',[LoginController::class,'login'])->name('/');

    //ruta validación de login//
    Route::post('valida',[LoginController::class,'valida'])->name('valida');
    
    //Ruta principal del sistema//
    Route::get('principal',[LoginController::class, 'principal'])->name('principal');
    Route::get('admin',[LoginController::class, 'admin'])->name('admin');

    //Alta nuevo usuario//
    Route::get('alta_usuarios',[UsuariosController::class,'alta_usuarios'])->name('alta_usuarios');
    Route::post('guarda_usuarios',[UsuariosController::class,'guarda_usuarios'])->name('guarda_usuarios');



//.......................productos.....................................//

Route::get('registerP',[ProductosController::class,'alta_productos'])->name('registerP');

Route::get('alta_productos',[ProductosController::class,'alta_productos'])->name('alta_productos');
Route::post('guarda_productos',[ProductosController::class,'guarda_productos'])->name('guarda_productos');


Route::name('tablap')->get('tablap',[ProductosController::class,'productos']);
Route::name('carrito')->get('carrito',[ProductosController::class,'carrito']);
Route::name('agregar')->get('agregar/{id}',[ProductosController::class,'agregar']);


//-------------------------Compras-------------------------------------------//
Route::name('guardar_compra')->post('guardar_compra',[ComprasController::class, 'guardar_compra']);

//--------------------------ropa----------------------//
Route::get('ropa',[RopaController::class,'ver_ropa'])->name('ropa');

//---------------------tecnologia-----------------//
Route::get('tecnologia',[TecnologiaController::class,'ver_tecnologia'])->name('tecnologia');

//-----------------accesorios---------------------//
Route::get('accesorios',[AccesoriosController::class,'ver_accesorios'])->name('accesorios');

//----------------------------Cuenta-------------------//
Route::get('cuenta',[CuentaController::class,'ver_cuenta'])->name('cuenta');

//---------------------------TablaProductos----------------------///
//Route::get('tablap',[TablapController::class,'ver_tablap'])->name('tablap');
//Route::get('carrito',[CarritoController::class,'carrito'])->name('carrito');

//-------------------------consultas----------------------------//
Route::get('admin',[AdminController::class,'lista'])->name('admin');
Route::get('adminp',[AdminpController::class,'lista'])->name('adminp');


//-----------------------productos---------------------------//
//------------------------borrar------------------------------//
Route::delete('borrar1',[AdminpController::class,'borrar1'])->name('borrar1');

//------------------------detalle------------------------------//
Route::name('detalle')->get('/detalle/{idp}',[AdminpController::class, 'detalle']);

//-------------------------actualizar------------------------//
Route::name('editar_producto')->get('/editar_producto/{idp}',[AdminpController::class, 'editar_producto']);
Route::name('salvar')->put('/salvar/{idp}',[AdminpController::class, 'salvar']);


//-------------------------usuarios-------------------------//
//------------------------borrar------------------------------//
Route::delete('borrar1u',[AdminController::class,'borrar1u'])->name('borrar1');

//------------------------detalle------------------------------//
Route::name('detalleusu')->get('/detalleusu/{idu}',[AdminController::class, 'detalleusu']);

//-------------------------actualizar------------------------//
Route::name('editar_usuario')->get('/editar_usuario/{idu}',[AdminController::class, 'editar_usuario']);
Route::name('salvarusu')->put('/salvarusu/{idu}',[AdminController::class, 'salvarusu']);


//------------------------carrito---------------------------//
//Route::name('formulario')->put('/formulario/{idp}',[CarritoController::class, 'formulario']);

//Route::name('productos')->get('productos',[CarritoController::class,'index']);
//Route::name('carrito')->get('carrito',[CarritoController::class,'carrito']);
//Route::name('agregar')->get('agregar/{idp}',[CarritoController::class,'agregar']);
//Route::name('actualizar')->patch('actualizar',[CarritoController::class,'actualizar']);
//Route::name('borrar')->delete('borrar/',[CarritoController::class,'borrar']);
Route::name('guardar_compra')->get('guardar_compra',[ComprasController::class,'guardar_compra']);
Route::name('adminv')->get('adminv',[ComprasController::class,'vista_ventas']);
Route::name('vista_compras')->get('vista_compras',[ComprasController::class,'vista_compras']);

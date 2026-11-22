<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    $userActual= \Auth::user();   
    if (isset($userActual->user_person)) {
        return view('admin.layout.principal');
    }

    else {
        return view('admin.pages.registro.registro');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('landing.pages.inicio');
});

Route::group(['prefix' => 'Tlamachtili'], function (){
    Route::get('/inicio',[App\Http\Controllers\Landing\SitioController::class, 'inicio'])->name('inicio');
    
    Route::get('/nosotros',[App\Http\Controllers\Landing\SitioController::class, 'nosotros'])->name('nosotros');

    Route::get('/servicios',[App\Http\Controllers\Landing\SitioController::class, 'servicios'])->name('servicios');

    Route::get('/contacto',[App\Http\Controllers\Landing\SitioController::class, 'contacto'])->name('contacto');

    Route::get('/productos',[App\Http\Controllers\Landing\SitioController::class, 'productos'])->name('productos');

    Route::get('/proyectos',[App\Http\Controllers\Landing\SitioController::class, 'proyectos'])->name('proyectos');

    Route::get('/privacidad',[App\Http\Controllers\Landing\SitioController::class, 'privacidad'])->name('privacidad');
     Route::get('/avisos',[App\Http\Controllers\Landing\SitioController::class, 'avisos'])->name('avisos');
    Route::post('/send', [App\Http\Controllers\Landing\SitioController::class, 'sendmessage'])->name('sendmessage');
    
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::group(['prefix' => 'user'], function (){
        Route::post('/store', [App\Http\Controllers\Admin\AdminController::class, 'store'])->name('user.store');
    });
    Route::group(['prefix' => 'mensajes'], function (){
        Route::get('/index', [App\Http\Controllers\Admin\MensajeController::class, 'index'])->name('mensajes.index');
    });

    Route::group(['prefix' => 'marca'], function (){
        Route::get('/index', [App\Http\Controllers\Admin\MarcaController::class, 'index'])->name('marca.index');
        Route::get('/create', [App\Http\Controllers\Admin\MarcaController::class, 'create'])->name('marca.create');
    Route::post('/store', [App\Http\Controllers\Admin\MarcaController::class, 'store'])->name('marca.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\MarcaController::class, 'edit'])->name('marca.edit');
    Route::put('/{id}', [App\Http\Controllers\Admin\MarcaController::class, 'update'])->name('marca.update');
    Route::get('/show/{id}', [App\Http\Controllers\Admin\MarcaController::class, 'show'])->name('marca.show');
    Route::get('/delete/{id}', [App\Http\Controllers\Admin\MarcaController::class, 'delete'])->name('marca.delete');
    Route::get('{id}/destroy', [App\Http\Controllers\Admin\MarcaController::class, 'destroy'])->name('marca.destroy');
    });

    Route::group(['prefix' => 'categoria'], function (){
        Route::get('/index', [App\Http\Controllers\Admin\CategoriaController::class, 'index'])->name('categoria.index');
        Route::get('/create', [App\Http\Controllers\Admin\CategoriaController::class, 'create'])->name('categoria.create');
        Route::post('/store', [App\Http\Controllers\Admin\CategoriaController::class, 'store'])->name('categoria.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CategoriaController::class, 'edit'])->name('categoria.edit');
        Route::put('/{id}', [App\Http\Controllers\Admin\CategoriaController::class, 'update'])->name('categoria.update');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\CategoriaController::class, 'show'])->name('categoria.show');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\CategoriaController::class, 'delete'])->name('categoria.delete');
        Route::get('{id}/destroy', [App\Http\Controllers\Admin\CategoriaController::class, 'destroy'])->name('categoria.destroy');
    });

    Route::group(['prefix' => 'producto'], function (){
        Route::get('/index', [App\Http\Controllers\Admin\ProductoController::class, 'index'])->name('producto.index');
        Route::get('/create', [App\Http\Controllers\Admin\ProductoController::class, 'create'])->name('producto.create');
        Route::post('/store', [App\Http\Controllers\Admin\ProductoController::class, 'store'])->name('producto.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ProductoController::class, 'edit'])->name('producto.edit');
        Route::put('/{id}', [App\Http\Controllers\Admin\ProductoController::class, 'update'])->name('producto.update');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\ProductoController::class, 'show'])->name('producto.show');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\ProductoController::class, 'delete'])->name('producto.delete');
        Route::delete('/producto/{id}/destroy', [App\Http\Controllers\Admin\ProductoController::class, 'destroy'])->name('producto.destroy');
    });

      Route::group(['prefix' => 'aviso'], function () {
    Route::get('/index', [App\Http\Controllers\Admin\AvisoController::class, 'index'])->name('aviso.index');
    Route::get('/create', [App\Http\Controllers\Admin\AvisoController::class, 'create'])->name('aviso.create');
    Route::post('/store', [App\Http\Controllers\Admin\AvisoController::class, 'store'])->name('aviso.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\AvisoController::class, 'edit'])->name('aviso.edit');
    Route::put('/{id}', [App\Http\Controllers\Admin\AvisoController::class, 'update'])->name('aviso.update');
    Route::get('/show/{id}', [App\Http\Controllers\Admin\AvisoController::class, 'show'])->name('aviso.show');
    Route::get('/delete/{id}', [App\Http\Controllers\Admin\AvisoController::class, 'delete'])->name('aviso.delete');
    Route::delete('/aviso/{id}/destroy', [App\Http\Controllers\Admin\AvisoController::class, 'destroy'])->name('aviso.destroy');
});

  



    Route::group(['prefix' => 'usuario'], function (){
        Route::get('/index', [App\Http\Controllers\Admin\UsuarioController::class, 'index'])->name('usuario.index');
        Route::get('/create', [App\Http\Controllers\Admin\UsuarioController::class, 'create'])->name('usuario.create');
        Route::post('/store', [App\Http\Controllers\Admin\UsuarioController::class, 'store'])->name('usuario.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\UsuarioController::class, 'edit'])->name('usuario.edit');
        Route::put('/{id}', [App\Http\Controllers\Admin\UsuarioController::class, 'update'])->name('usuario.update');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\UsuarioController::class, 'show'])->name('usuario.show');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\UsuarioController::class, 'delete'])->name('usuario.delete');
        Route::delete('/usuario{id}/destroy', [App\Http\Controllers\Admin\UsuarioController::class, 'destroy'])->name('usuario.destroy');

    });
    
    Route::group(['prefix' => 'cliente'], function () {
        Route::get('/index', [App\Http\Controllers\Admin\ClienteController::class, 'index'])->name('cliente.index');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\ClienteController::class, 'show'])->name('cliente.show');
    });
   
    Route::group(['prefix' => 'carrito'], function (){
        Route::get('/index', [App\Http\Controllers\Admin\CarritoController::class, 'index'])->name('carrito.index');
        Route::get('/add/{id}', [App\Http\Controllers\Admin\CarritoController::class, 'add'])->name('carrito.add');
        Route::get('/buy', [App\Http\Controllers\Admin\CarritoController::class, 'buy'])->name('carrito.buy');
        Route::post('/store', [App\Http\Controllers\Admin\CarritoController::class, 'store'])->name('carrito.store');
        Route::get('/list', [App\Http\Controllers\Admin\CarritoController::class, 'listar'])->name('carrito.list');
        Route::delete('/carrito/vaciar', [App\Http\Controllers\Admin\CarritoController::class, 'vaciar'])->name('carrito.vaciar');
        Route::delete('/carrito/eliminar/{id}', [App\Http\Controllers\Admin\CarritoController::class, 'destroy'])->name('carrito.eliminar');
        Route::post('/comprar', [App\Http\Controllers\Admin\CarritoController::class, 'comprar'])->name('carrito.comprar');
        Route::post('/carrito/comprar-finalizar', [App\Http\Controllers\Admin\CarritoController::class, 'finalizarCompra'])->name('carrito.finalizarCompra');
    });
    

    



 
    

    
});

require __DIR__.'/auth.php';

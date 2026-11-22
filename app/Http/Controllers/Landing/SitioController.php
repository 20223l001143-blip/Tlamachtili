<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Mensajes;
use App\Models\Producto;
use App\Models\Aviso; 
use Illuminate\Http\Request;
use DB;
use Session;

class SitioController extends Controller
{
    public function inicio()
    {
        return view('landing.pages.inicio');
    }

    public function nosotros()
    {
        return view('landing.pages.nosotros');
    }

    public function servicios()
    {
        return view('landing.pages.servicios');
    }

    public function contacto()
    {
        return view('landing.pages.contacto');
    }
    public function sendmessage(Request $request){
        try{
            if ($request['nombre'] != null && $request['email'] != null
                && $request['telefono'] != null && $request['mensaje'] != null){
                DB::beginTransaction();

                $data = [
                    'nombre' => $request['nombre'],
                    'email' => $request['email'],
                    'telefono' => $request['telefono'],
                    'mensaje' => $request['mensaje'],
                    'estatus' => 'No',
                ];
                $newmensaje = new Mensajes($data);
                $newmensaje->save();
                DB::commit();
                Session::flash('status', "Se ha agregado correctamente el registro. En breve nos contactaremos con usted.");
                Session::flash('status_type', 'success');
                return redirect(route('contacto'));
            } else {
                Session::flash('status', 'Faltan datos obligatorios para el registro');
                Session::flash('status_type', 'warning');
                return back()->withInput();
            }
        }catch(\Illuminate\Database\QueryException $ex){
            DB::rollBack();
            Session::flash('status', $ex->getMessage());
            Session::flash('status_type', 'error-Query');
            return back();
        }catch(\Exception $e)
        {
            DB::rollBack();
            Session::flash('status', $e->getMessage());
            Session::flash('status_type', 'error');
            return back();
        }
    }

    public function productos()
    {   
        $productos = Producto::all();
        
        return view('landing.pages.productos',['data' => $productos]);
    }

    public function proyectos()
    {
        return view('landing.pages.proyectos'); 
    }

  

    
  

     
    public function privacidad()
    {
        return view('landing.pages.privacidad');
    }
public function avisos()
{
    $avisos = Aviso::all(); // o el nombre que uses para el modelo de avisos
    return view('landing.pages.avisos', ['data' => $avisos]);
}
    
}

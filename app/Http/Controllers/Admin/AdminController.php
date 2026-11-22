<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estatus;
use App\Models\Persona;
use Illuminate\Http\Request;
use DB; 
use Session;
use Log;


class AdminController extends Controller
{
    public function store(Request $request){
        try{
            if ($request['nombre'] != null && $request['pApellido'] != null && $request['nacimiento'] != null &&
                $request['genero'] != null && $request['celular'] != null ){
                $aux = explode(" / ", $request['nacimiento']);
                $auxpassword = $aux[0].$aux[1].$aux[2];
                if ($request['img'] != null){
                    $namefile =$request['nombre'].'_'.$auxpassword;
                    $ext_file = array('jpg','png','jpeg');
                    $value = $this->loadimage($request,'img',$ext_file,400,400,2000000,$namefile,'admin/uploads/users');
                    if ($value === 'tamano' || $value === 'formato' || $value === 'existencia' || $value === 'dimension') {
                        Session::flash('status', 'La imagen del usuario no pudo ser guardada, ya que representa un problema de :) '.$value);
                        Session::flash('status_type', 'warning');
                        return back()->withInput();
                    }
                } else {
                    $value = null;
                }
                DB::beginTransaction();

                $user= \Auth::user(); //Obtiene el usuario actual
                $roleName = \Auth::user()->getRoleNames()->first();
                $estatus = Estatus::where('nombre','=','Activo')->first();
                $date = \DateTime::createFromFormat('d / m / Y', $request['nacimiento']);
                $datapersona = [
                    'user_id' => $user->id,
                    'estatus_id' => $estatus->id,
                    'nombre' => $request['nombre'],
                    'primerApellido' => $request['pApellido'],
                    'segundoApellido' => $request['sApellido'],
                    'curp' => $request['curp'],
                    'fechaNacimiento' => $date,
                    'genero' => $request['genero'],
                    'email' => $request['email'],
                    'telefono' => $request['telefono'],
                    'movil' => $request['celular'],
                    'tipo_persona' => $roleName,
                    'imagen' => $value,
                ];
                $newPerson = new Persona($datapersona);
                $newPerson->save();
                DB::commit();
                Log::info('AdminController|store|register|ok'.date('Y-m-d H:i:s'));
                Session::flash('status', "Se ha agregado correctamente el registro, Las credenciales se enviarán por correo electrónico al usuario registrado");
                Session::flash('status_type', 'success');
                return redirect(route('dashboard'));
            } else {
                Session::flash('status', 'Faltan datos obligatorios para el registro');
                Session::flash('status_type', 'warning');
                return back()->withInput();
            }
        }catch(\Illuminate\Database\QueryException $ex){
            DB::rollBack();
            Log::error('AdminController|store|QueryException|'.date('Y-m-d H:i:s').'|incidencia:'.$ex->getMessage());
            Session::flash('status', $ex->getMessage());
            Session::flash('status_type', 'error-Query');
            return back();
        }catch(\Exception $e)
        {
            DB::rollBack();
            Log::error('AdminController|store|processException|'.date('Y-m-d H:i:s').'|incidencia:'.$e->getMessage());
            Session::flash('status', $e->getMessage());
            Session::flash('status_type', 'error');
            return back();
        }
    }
    function loadimage($request, $nameimg, $mimearray, $min, $max, $maxweight, $nameimage, $urlimage){
        if ($request->file($nameimg) != null) {
            $extension = strtolower($request->file($nameimg)->getClientOriginalExtension());
            if (in_array($extension, $mimearray)){
                $size = getimagesize($request->file($nameimg));
                if ($size[0] <= $min && $size[1] <=$max){
                    $weight = $_FILES[$nameimg]['size'];
                    if ($weight < $maxweight) {
                        //guardamos la imagen
                        $name = $nameimage . date("d") . date("H") . date("i") . date("s") . '.' . $extension;
                        $path = public_path($urlimage);//obtenemos la ruta del archivo
                        $request->file($nameimg)->move($path, $name);
                        $value = $name;
                        return $value;
                    } else {return 'tamano';}
                }else {return 'dimension';}
            } else {return 'formato';}
        }else {return 'existencia';}
    }
}

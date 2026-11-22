<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\User;
use DB;
use Session;
use Log;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $search = "";
        $limit = 5;

        if($request->has('search'))
        {
            $search = $request->input('search');
            if(trim($search) != '')
            {
                $data = User::where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")->get();
            }
            else
            {
                $data = User::all();
            }
        }
        else
        {
            $data = User::all();
        }

        $currentPage = Paginator::resolveCurrentPage() - 1;
        $perPage = $limit;
        $currentPageSearchResults = $data->slice($currentPage * $perPage, $perPage)->all();
        $data = new LengthAwarePaginator($currentPageSearchResults, count($data), $perPage);

        return view('admin.pages.usuarios.index', ['data' => $data, 'search' => $search, 'page' => $currentPage]);
    }

    public function create()
    {
        return view('admin.pages.usuarios.create');
    }

    public function store(Request $request){
        try{
            DB::beginTransaction();
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $aux =  substr(str_shuffle($caracteres), 0, 8);
           
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($aux),
            ])->assignRole($request->rol);

            Log::info('UserController|store|register|ok'.$user['id'].'-'.$user['email'].'|p-w|'.$aux.'|'.date('Y-m-d H:i:s'));

            DB::commit();
            Session::flash('status', "Se ha agregado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('usuario.index'));

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
    

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.usuarios.update', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        try
        {
            DB::beginTransaction();
            if ($request !== null)
            {
                $updateUser = User::findOrFail($id);
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password ? bcrypt($request->password) : $updateUser->password,  // Actualiza solo si se proporciona una nueva contraseña
                ];
                $updateUser->update($data);

                DB::commit();
                Session::flash('status', "Se ha editado correctamente el registro");
                Session::flash('status_type', 'success');
                return redirect(route('usuario.index'));
            }
            else
            {
                DB::rollBack();
                Session::flash('status', "No se pudo editar el registro");
                Session::flash('status_type', 'error');
                return redirect(route('usuario.index'));
            }
        }
        catch (\Illuminate\Database\QueryException $ex)
        {
            DB::rollBack();
            Session::flash('status', $ex->getMessage());
            Session::flash('status_type', 'error-Query');
            return back();
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            Session::flash('status', $e->getMessage());
            Session::flash('status_type', 'error');
            return back();
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.usuarios.show', ['user' => $user]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.usuarios.delete', ['user' => $user]);
    }

    public function destroy($id)
    {
        try
        {
            DB::beginTransaction();

            $user = User::findOrFail($id);
            $user->delete();

            DB::commit();
            Session::flash('status', "Se ha eliminado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('usuario.index'));
        }
        catch (\Illuminate\Database\QueryException $ex)
        {
            DB::rollBack();
            Session::flash('status', $ex->getMessage());
            Session::flash('status_type', 'error-Query');
            return back();
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            Session::flash('status', $e->getMessage());
            Session::flash('status_type', 'error');
            return back();
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Marca;
use DB;
use Session;

class MarcaController extends Controller
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
                $data = Marca::where('nombre', 'like', "%$search%")
                ->orwhere('descripcion', 'like', "%$search%")->get();
            }else{
                $data = Marca::all();
            }
          
        }else{
            $data = Marca::all();
        }
        
        $currentPage = Paginator::resolveCurrentPage() - 1;
        $perPage =$limit;
        $currentPageSearchResults = $data->slice($currentPage * $perPage, $perPage)-> all();
        $data = new LengthAwarePaginator($currentPageSearchResults, count($data), $perPage);

        return view ('admin.pages.marca.index', ['data' => $data, 'search' => $search, 'page' => $currentPage]);
    }
    public function create(){
           return view ('admin.pages.marca.create');
    }

    public function store(Request $request){
        try{
            DB::beginTransaction();

            $marca = new Marca;
            $marca->nombre = $request->nombre;
            $marca->descripcion = $request->descripcion;
          
            $marca->save();


            DB::commit();
            Session::flash('status', "Se ha agregado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('marca.index'));

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

    public function edit($id){
        $marca = Marca::findOrFail($id);
        return view ('admin.pages.marca.update',['marca'=>$marca]);
    }

    public function update(Request $request, $id){  
        try
        {
            DB::beginTransaction();
            if($request !== null)
            {
                $updatemarca = Marca::findOrFail($id);
                $data=[
                    'nombre'=> $request->nombre,
                    'descripcion'=> $request->descripcion
                ];
                $updatemarca->update($data);

                DB::commit();
                Session::flash('status', "Se ha editado correctamente el registro");
                Session::flash('status_type', 'success');
                return redirect(route('marca.index'));
            }else{
                DB::rollback();
                Session::flash('status', "No se pudo editar el registro");
                Session::flash('status_type', 'error');
                return redirect(route('marca.index'));
            }

        } catch(\Illuminate\Database\QueryException $ex)
        {
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

    public function show($id){
        $marca = Marca::findOrFail($id);
        return view('admin.pages.marca.show', ['marca'=>$marca]);
    }

    public function delete($id){
        $marca = Marca::findOrFail($id);
        return view('admin.pages.marca.delete', ['marca'=>$marca]);
      
    }

    public function destroy($id){
        try
        {
            DB::beginTransaction();

            $marca = Marca::findOrFail($id);
            $marca->delete();

            DB::commit();
            Session::flash('status', "Se ha eliminado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('marca.index'));
            

        } catch(\Illuminate\Database\QueryException $ex)
        {
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

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Categoria;
use DB;
use Session;

class CategoriaController extends Controller
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
                $data = Categoria::where('nombre', 'like', "%$search%")
                ->orwhere('descripcion', 'like', "%$search%")->get();
            } else {
                $data = Categoria::all();
            }
        } else {
            $data = Categoria::all();
        }
        
        $currentPage = Paginator::resolveCurrentPage() - 1;
        $perPage = $limit;
        $currentPageSearchResults = $data->slice($currentPage * $perPage, $perPage)->all();
        $data = new LengthAwarePaginator($currentPageSearchResults, count($data), $perPage);

        return view('admin.pages.categoria.index', ['data' => $data, 'search' => $search, 'page' => $currentPage]);
    }

    public function create(){
        return view('admin.pages.categoria.create');
    }

    public function store(Request $request){
        try {
            DB::beginTransaction();

            $categoria = new Categoria;
            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->save();

            DB::commit();
            Session::flash('status', "Se ha agregado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('categoria.index'));

        } catch (\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            Session::flash('status', $ex->getMessage());
            Session::flash('status_type', 'error-Query');
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('status', $e->getMessage());
            Session::flash('status_type', 'error');
            return back();
        }
    }

    public function edit($id){
        $categoria = Categoria::findOrFail($id);
        return view('admin.pages.categoria.update', ['categoria' => $categoria]);
    }

    public function update(Request $request, $id){  
        try {
            DB::beginTransaction();
            if($request !== null) {
                $updateCategoria = Categoria::findOrFail($id);
                $data = [
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion
                ];
                $updateCategoria->update($data);

                DB::commit();
                Session::flash('status', "Se ha editado correctamente el registro");
                Session::flash('status_type', 'success');
                return redirect(route('categoria.index'));
            } else {
                DB::rollback();
                Session::flash('status', "No se pudo editar el registro");
                Session::flash('status_type', 'error');
                return redirect(route('categoria.index'));
            }

        } catch (\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            Session::flash('status', $ex->getMessage());
            Session::flash('status_type', 'error-Query');
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('status', $e->getMessage());
            Session::flash('status_type', 'error');
            return back();
        }
    }

    public function show($id){
        $categoria = Categoria::findOrFail($id);
        return view('admin.pages.categoria.show', ['categoria' => $categoria]);
    }

    public function delete($id){
        $categoria = Categoria::findOrFail($id);
        return view('admin.pages.categoria.delete', ['categoria' => $categoria]);
    }

    public function destroy($id){
        try {
            DB::beginTransaction();

            $categoria = Categoria::findOrFail($id);
            $categoria->delete();

            DB::commit();
            Session::flash('status', "Se ha eliminado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('categoria.index'));

        } catch (\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            Session::flash('status', $ex->getMessage());
            Session::flash('status_type', 'error-Query');
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('status', $e->getMessage());
            Session::flash('status_type', 'error');
            return back();
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use DB;
use Session;

class ProductoController extends Controller
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
                $data = Producto::where('nombre', 'like', "%$search%")
                ->orwhere('presentacion', 'like', "%$search%")
                ->orwhere('descripcion', 'like', "%$search%")
                ->orwhere('precioPublico', 'like', "%$search%")->get();
            }else{
                $data = Producto::all();
            }
          
        }else{
            $data = Producto::all();
        }
        
        $currentPage = Paginator::resolveCurrentPage() - 1;
        $perPage = $limit;
        $currentPageSearchResults = $data->slice($currentPage * $perPage, $perPage)-> all();
        $data = new LengthAwarePaginator($currentPageSearchResults, count($data), $perPage);

        return view ('admin.pages.productos.index', ['data' => $data, 'search' => $search, 'page' => $currentPage]);
    }

    public function create(){
        $categoria = Categoria::pluck('nombre','id');
        $marca = Marca::pluck('nombre', 'id');
        return view ('admin.pages.productos.create',['categoria'=> $categoria,'marca'=>$marca]);
    }

    public function store(Request $request){
        try{
            DB::beginTransaction();

            $namefile =$request['nombre'].'_';
            $ext_file = array('jpg','png','jpeg');

            $value = $this->loadimage($request,'img',$ext_file,1000,1000,2000000,$namefile,'admin/uploads/productos');
            if ($value === 'tamano' || $value === 'formato' || $value === 'existencia' || $value === 'dimension') {
                Session::flash('status', 'La imagen del producto no pudo ser guardada, ya que representa un problema de :) '.$value);
                Session::flash('status_type', 'warning');
                return back()->withInput();
            }

            $dataproducto = [
                'categoria_id' => $request['categoria'],
                'marca_id' => $request['marca'],
                'nombre' => $request['nombre'],
                'presentacion' => $request['pres'],
                'descripcion' => $request['descrip'],
                'precioPublico' => $request['precio_p'],
                'precioCompra' => 0,
                'precioMayorista' => $request['precio_m'],
                'cantidadMayorista' => $request['cant_m'],
                'cantidadDisponible' => $request['stock'],
                'cantidadMinima' => $request['cminima'],
                'cantidadMaxima' => $request['cmaxima'],
                'codigoBarras' => $request['codigo'],
                'imagen' => $value,
            ];
            $producto = new Producto($dataproducto);
            $producto->save();

            DB::commit();
            Session::flash('status', "Se ha agregado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('producto.index'));

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
        $categoria = Categoria::pluck('nombre','id');
        $marca = Marca::pluck('nombre', 'id');

        $producto = Producto::findOrFail($id);
        return view ('admin.pages.productos.update',['producto'=>$producto, 'categoria'=>$categoria, 'marca'=>$marca]);
    }

    public function update(Request $request, $id){
        try
        {
            DB::beginTransaction();
            if($request !== null)
            {
                if($request->file('img') != null){
                    $namefile =$request['nombre'].'_';
                    $ext_file = array('jpg','png','jpeg');
    
                    $value = $this->loadimage($request,'img',$ext_file,1000,1000,2000000,$namefile,'admin/uploads/productos');
                    if ($value === 'tamano' || $value === 'formato' || $value === 'existencia' || $value === 'dimension') {
                        Session::flash('status', 'La imagen del producto no pudo ser guardada ya que representa un problema de '.$value);
                        Session::flash('status_type', 'warning');
                        return back()->withInput();
                    }
    
                    $dataproducto = [
                        'categoria_id' => $request['categoria'],
                        'marca_id' => $request['marca'],
                        'nombre' => $request['nombre'],
                        'presentacion' => $request['pres'],
                        'descripcion' => $request['descrip'],
                        'precioPublico' => $request['precio_p'],
                        'precioMayorista' => $request['precio_m'],
                        'cantidadMayorista' => $request['cant_m'],
                        'cantidadDisponible' => $request['stock'],
                        'cantidadMinima' => $request['cminima'],
                        'cantidadMaxima' => $request['cmaxima'],
                        'codigoBarras' => $request['codigo'],
                        'imagen' => $value,
                    ];
                } else {
                    $dataproducto = [
                        'categoria_id' => $request['categoria'],
                        'marca_id' => $request['marca'],
                        'nombre' => $request['nombre'],
                        'presentacion' => $request['pres'],
                        'descripcion' => $request['descrip'],
                        'precioPublico' => $request['precio_p'],
                        'precioMayorista' => $request['precio_m'],
                        'cantidadMayorista' => $request['cant_m'],
                        'cantidadDisponible' => $request['stock'],
                        'cantidadMinima' => $request['cminima'],
                        'cantidadMaxima' => $request['cmaxima'],
                        'codigoBarras' => $request['codigo'],
                    ];
                }
                $editproducto = Producto::findOrFail($id);
                $editproducto->update($dataproducto);

                DB::commit();
                Session::flash('status', "Se ha editado correctamente el registro");
                Session::flash('status_type', 'success');
                return redirect(route('producto.index'));
            }else{
                DB::rollback();
                Session::flash('status', "No se pudo editar el registro");
                Session::flash('status_type', 'error');
                return redirect(route('producto.index'));
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
        $producto = Producto::findOrFail($id);
        return view('admin.pages.productos.show', ['producto'=>$producto]);
    }

    public function delete($id){
        $producto = Producto::findOrFail($id);
        return view('admin.pages.productos.delete', ['producto'=>$producto]);
    }

    public function destroy($id){
        try
        {
            DB::beginTransaction();

            $producto = Producto::findOrFail($id);
            $producto->delete();

            DB::commit();
            Session::flash('status', "Se ha eliminado correctamente el registro");
            Session::flash('status_type', 'success');
            return redirect(route('producto.index'));
            

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

    function loadimage($request, $nameimg, $mimearray, $min, $max, $maxweight, $nameimage, $urlimage){
        if ($request->file($nameimg) != null) {
            $extension = strtolower($request->file($nameimg)->getClientOriginalExtension());
            if (in_array($extension, $mimearray)){
                $size = getimagesize($request->file($nameimg));
                if ($size[0] <= $min && $size[1] <=$max){
                    $weight = $_FILES[$nameimg]["size"];
                    if($weight <= $maxweight){
                        $file = $request->file($nameimg);
                        $imagen = time().$nameimage.rand(0, 1000000).".".$extension;
                        $destinationPath = public_path($urlimage);
                        $file->move($destinationPath, $imagen);
                        return $imagen;
                    }else{
                        return 'peso';
                    }
                }else{
                    return 'dimension';
                }
            }else{
                return 'formato';
            }
        }else{
            return 'existencia';
        }
    }
}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Carrito;
use DB;
use Session;

class CarritoController extends Controller
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

        return view ('admin.pages.carrito.index', ['data' => $data, 'search' => $search, 'page' => $currentPage]);
    }

    public function add($id) {
        $producto = Producto::findOrFail($id);
        return view ('admin.pages.carrito.agregar',['pro'=>$producto]);
    }

    public function store(Request $request){
        //dd($request);
        try{
            DB::beginTransaction();
            if($request->cantidad_compra > 0) {

                $user = auth()->user();
                //dd($user->user_person->person_cliente->id);
                $carrito = new Carrito;
                $carrito->cliente_id = $user->user_person->person_cliente->id;
                $carrito->producto_id = $request->producto;
                $carrito->cantidad = $request->cantidad_compra;
                $carrito->precioUnitario = $request->precio;
                $carrito->estatus = 'Pendiente';
                $carrito->save();
                
                $producto = Producto::findOrFail($request->producto);
                $nuevoValor = $producto->cantidadDisponible - $request->cantidad_compra;
                $producto->update(['cantidadDisponible'=>$nuevoValor]); 

                DB::commit();
                Session::flash('status', "Se ha agregado correctamente el registro");
                Session::flash('status_type', 'success');
                return redirect(route('carrito.index'));
            } 
            else{
            Session::flash('status', "La cantidad debe ser minimo 1");
            Session::flash('status_type', 'warning');
            return back();
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
    public function listar(){
        $user = auth()->user();
        $carrito = Carrito::where('cliente_id', '=', $user->user_person->person_cliente->id)->get();
        //dd($carrito[0]->carrito_producto);
        return view('admin.pages.carrito.pagar', ['lista'=>$carrito]);
    }

    public function vaciar()
{
    try {
        DB::beginTransaction();

        $user = auth()->user();
        $carrito = Carrito::where('cliente_id', '=', $user->user_person->person_cliente->id)->get();

        foreach ($carrito as $item) {
            // Devolver la cantidad eliminada al stock del producto
            $producto = Producto::findOrFail($item->producto_id);
            $producto->cantidadDisponible += $item->cantidad;
            $producto->save();

            // Eliminar el producto del carrito
            $item->delete();
        }

        DB::commit();
        Session::flash('status', "Carrito vaciado correctamente");
        Session::flash('status_type', 'success');
    } catch (\Exception $e) {
        DB::rollBack();
        Session::flash('status', "Error al vaciar el carrito: " . $e->getMessage());
        Session::flash('status_type', 'error');
    }

    return back();
}

public function destroy($id)
{
    try {
        DB::beginTransaction();

        $carrito = Carrito::findOrFail($id);

        // Devolver la cantidad eliminada al stock del producto
        $producto = Producto::findOrFail($carrito->producto_id);
        $producto->cantidadDisponible += $carrito->cantidad;
        $producto->save();

        // Eliminar el producto del carrito
        $carrito->delete();

        DB::commit();
        Session::flash('status', "Producto eliminado del carrito correctamente");
        Session::flash('status_type', 'success');
    } catch (\Exception $e) {
        DB::rollBack();
        Session::flash('status', "Error al eliminar el producto: " . $e->getMessage());
        Session::flash('status_type', 'error');
    }

    return back();
}

public function comprar(Request $request) {
    //dd($request);
    $productosIds = json_decode($request->productos_seleccionados, true); 
    //dd($productosIds);
    $total = $request->total;
    if(empty($productosIds)) {
        Session::flash('status', "No se selecciono ningun producto ");
        Session::flash('status_type', 'warning');
        return back();
    }
    $producto = Carrito::whereIn('id', $productosIds)->get();
    return view('admin.pages.carrito.paypal', ['productos'=>$producto, 'total'=>$total]);
}

public function finalizarCompra(Request $request)
{
    try {
        DB::beginTransaction();

        $user = auth()->user();
        $productosIds = json_decode($request->productos_seleccionados, true);

        if(empty($productosIds)) {
            return response()->json(['error' => 'No hay productos seleccionados'], 400);
        }

        Carrito::where('cliente_id', $user->user_person->person_cliente->id)
            ->whereIn('id', $productosIds)
            ->delete();

        DB::commit();

        return response()->json(['success' => 'Compra finalizada y productos eliminados del carrito'], 200);
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => 'Error al procesar la compra: ' . $e->getMessage()], 500);
    }
}

}
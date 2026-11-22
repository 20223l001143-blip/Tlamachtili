<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Aviso;
use DB;
use Session;

class AvisoController extends Controller
{
    public function index(Request $request)
    {
        $search = "";
        $limit = 5;

        if ($request->has('search')) {
            $search = $request->input('search');
            if (trim($search) != '') {
                $data = Aviso::where('titulo', 'like', "%$search%")
                    ->orWhere('descripcion', 'like', "%$search%")
                    ->get();
            } else {
                $data = Aviso::all();
            }
        } else {
            $data = Aviso::all();
        }

        $currentPage = Paginator::resolveCurrentPage() - 1;
        $perPage = $limit;
        $currentPageSearchResults = $data->slice($currentPage * $perPage, $perPage)->all();
        $data = new LengthAwarePaginator($currentPageSearchResults, count($data), $perPage);

        return view('admin.pages.aviso.index', ['data' => $data, 'search' => $search, 'page' => $currentPage]);
    }

    public function create()
    {
        return view('admin.pages.aviso.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $namefile = $request['titulo'] . '_';
            $ext_file = ['jpg', 'png', 'jpeg'];

            $value = $this->loadimage($request, 'imagen', $ext_file, 400, 400, 200000, $namefile, 'admin/uploads/avisos');

            if (in_array($value, ['peso', 'formato', 'existencia', 'dimension'])) {
                Session::flash('status', 'La imagen del aviso no pudo ser guardada, problema de: ' . $value);
                Session::flash('status_type', 'warning');
                return back()->withInput();
            }

            $dataaviso = [
                'titulo' => $request['titulo'],
                'descripcion' => $request['descripcion'],
                'fecha_publicacion' => $request['fecha_publicacion'],
                'fecha_expiracion' => $request['fecha_expiracion'] ?? null,
                'imagen' => $value,
            ];

            $aviso = new Aviso($dataaviso);
            $aviso->save();

            DB::commit();

            Session::flash('status', "Aviso creado correctamente");
            Session::flash('status_type', 'success');

            return redirect(route('aviso.index'));

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

    public function edit($id)
    {
        $aviso = Aviso::findOrFail($id);
        return view('admin.pages.aviso.update', ['aviso' => $aviso]);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $aviso = Aviso::findOrFail($id);

            if ($request->file('imagen') != null) {
                $namefile = $request['titulo'] . '_';
                $ext_file = ['jpg', 'png', 'jpeg'];

                $value = $this->loadimage($request, 'imagen', $ext_file, 400, 400, 200000, $namefile, 'admin/uploads/avisos');

                if (in_array($value, ['peso', 'formato', 'existencia', 'dimension'])) {
                    Session::flash('status', 'La imagen del aviso no pudo ser guardada, problema de: ' . $value);
                    Session::flash('status_type', 'warning');
                    return back()->withInput();
                }

                // Eliminar imagen anterior si existe
                if ($aviso->imagen && file_exists(public_path('admin/uploads/avisos/' . $aviso->imagen))) {
                    unlink(public_path('admin/uploads/avisos/' . $aviso->imagen));
                }

                $aviso->imagen = $value;
            }

            $aviso->titulo = $request['titulo'];
            $aviso->descripcion = $request['descripcion'];
            $aviso->fecha_publicacion = $request['fecha_publicacion'];
            $aviso->fecha_expiracion = $request['fecha_expiracion'] ?? null;

            $aviso->save();

            DB::commit();

            Session::flash('status', "Aviso actualizado correctamente");
            Session::flash('status_type', 'success');

            return redirect(route('aviso.index'));

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

    public function delete($id)
    {
        $aviso = Aviso::findOrFail($id);
        return view('admin.pages.aviso.delete', ['aviso' => $aviso]);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $aviso = Aviso::findOrFail($id);

            if ($aviso->imagen && file_exists(public_path('admin/uploads/avisos/' . $aviso->imagen))) {
                unlink(public_path('admin/uploads/avisos/' . $aviso->imagen));
            }

            $aviso->delete();

            DB::commit();

            Session::flash('status', "Aviso eliminado correctamente");
            Session::flash('status_type', 'success');

            return redirect(route('aviso.index'));

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

    // Método para cargar imagen (igual que en productos)
    function loadimage($request, $nameimg, $mimearray, $min, $max, $maxweight, $nameimage, $urlimage)
    {
        if ($request->file($nameimg) != null) {
            $extension = strtolower($request->file($nameimg)->getClientOriginalExtension());
            if (in_array($extension, $mimearray)) {
                $size = getimagesize($request->file($nameimg));
                if ($size[0] <= $min && $size[1] <= $max) {
                    $weight = $_FILES[$nameimg]["size"];
                    if ($weight <= $maxweight) {
                        $file = $request->file($nameimg);
                        $imagen = time() . $nameimage . rand(0, 1000000) . "." . $extension;
                        $destinationPath = public_path($urlimage);
                        $file->move($destinationPath, $imagen);
                        return $imagen;
                    } else {
                        return 'peso';
                    }
                } else {
                    return 'dimension';
                }
            } else {
                return 'formato';
            }
        } else {
            return 'existencia';
        }
    }
}

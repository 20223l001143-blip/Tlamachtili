<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona; // Modelo Persona

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', ''); // Obtener el término de búsqueda
        $limit = 5; // Registros por página

        // Crear consulta base con filtro de tipo_persona
        $query = Persona::where('tipo_persona', 'cliente');

        // Aplicar búsqueda si hay un término
        if (!empty(trim($search))) {
            $query->where(function($q) use ($search) {
                $q->where('nombre', 'like', "%$search%")
                  ->orWhere('apellido', 'like', "%$search%") // Ajusta si tienes campos separados para apellidos
                  ->orWhere('email', 'like', "%$search%");
            });
        }

        // Obtener los resultados paginados
        $data = $query->paginate($limit)->appends($request->except('page'));

        // Retornar la vista con datos
        return view('admin.pages.cliente.index', [
            'data' => $data,
            'search' => $search,
        ]);
    }

    public function show($id)
    {
        // Buscar la persona por ID asegurando el filtro por tipo_persona
        $persona = Persona::where('tipo_persona', 'cliente')->findOrFail($id);

        // Retornar la vista del cliente
        return view('admin.pages.cliente.show', ['persona' => $persona]);
    }
}
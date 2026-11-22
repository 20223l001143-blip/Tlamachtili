<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mensajes;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class MensajeController extends Controller
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
                $data = Mensajes::where('nombre', 'like', "%$search%")
                    ->orwhere('email', 'like', "%$search%")
                    ->orwhere('telefono', 'like', "%$search%")->get();
            }else{
                $data = Mensajes::all();
            }

        }else{
            $data = Mensajes::all();
        }

        $currentPage = Paginator::resolveCurrentPage() - 1;
        $perPage =$limit;
        $currentPageSearchResults = $data->slice($currentPage * $perPage, $perPage)-> all();
        $data = new LengthAwarePaginator($currentPageSearchResults, count($data), $perPage);

        return view ('admin.pages.mensajes.index', ['data' => $data, 'search' => $search, 'page' => $currentPage]);
    }
}

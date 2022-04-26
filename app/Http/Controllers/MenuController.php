<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dato;

class MenuController extends Controller
{
    //
    public function index()
    {
        $datos = Dato::paginate();

        return view('dato.index', compact('datos'))
            ->with('i', (request()->input('page', 1) - 1) * $datos->perPage());
    }
}

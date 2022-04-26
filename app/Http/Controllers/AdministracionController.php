<?php

namespace App\Http\Controllers;

use App\Models\Administracion;
use Illuminate\Http\Request;

/**
 * Class AdministracionController
 * @package App\Http\Controllers
 */
class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administracions = Administracion::paginate();

        return view('administracion.index', compact('administracion'))
            ->with('i', (request()->input('page', 1) - 1) * $administracions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administracion = new Administracion();
        return view('administracion.create', compact('administracion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Administracion::$rules);

        $administracion = Administracion::create($request->all());

        return redirect()->route('administracion.index')
            ->with('success', 'Administracion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administracion = Administracion::find($id);

        return view('administracion.show', compact('administracion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administracion = Administracion::find($id);

        return view('administracion.edit', compact('administracion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Administracion $administracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administracion $administracion)
    {
        request()->validate(Administracion::$rules);

        $administracion->update($request->all());

        return redirect()->route('administracions.index')
            ->with('success', 'Administracion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $administracion = Administracion::find($id)->delete();

        return redirect()->route('administracion.index')
            ->with('success', 'Administracion deleted successfully');
    }
}

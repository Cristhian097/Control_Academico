<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;

/**
 * Class FacultadController
 * @package App\Http\Controllers
 */
class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultads = Facultad::paginate();

        return view('facultad.index', compact('facultads'))
            ->with('i', (request()->input('page', 1) - 1) * $facultads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultad = new Facultad();
        return view('facultad.create', compact('facultad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Facultad::$rules);

        $facultad = Facultad::create($request->all());

        return redirect()->route('facultads.index')
            ->with('success', 'Facultad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultad = Facultad::find($id);

        return view('facultad.show', compact('facultad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facultad = Facultad::find($id);

        return view('facultad.edit', compact('facultad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Facultad $facultad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facultad $facultad)
    {
        request()->validate(Facultad::$rules);

        $facultad->update($request->all());

        return redirect()->route('facultads.index')
            ->with('success', 'Facultad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facultad = Facultad::find($id)->delete();

        return redirect()->route('facultads.index')
            ->with('success', 'Facultad deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class DocenteController
 * @package App\Http\Controllers
 */
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::paginate();

        return view('docente.index', compact('docentes'))
            ->with('i', (request()->input('page', 1) - 1) * $docentes->perPage());
    }

    public function menu()
    {
       // $docentes = Docente::paginate();

        return view('docente.menu');
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = new Docente();
        return view('docente.create', compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Docente::$rules);
        $docente = request()->except('_token');

        if($request->hasFile('Foto')){
            $docente['Foto']=$request->file('Foto')->store('uploads','public');
        }
        
        Docente::insert($docente);

        return redirect()->route('docentes.index')
            ->with('success', 'Docente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::find($id);

        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);

        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Docente $docente
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(Docente::$rules);
        $docente = request()->except('_token','_method');
        if($request->hasFile('Foto')){
            $docentes=Docente::findOrFail($id);
            Storage::delete('public/'.$docentes->Foto);
            $docente['Foto']=$request->file('Foto')->store('uploads','public');
        }//$docente->update($request->all());
        Docente::where('id','=',$id)->update($docente); 
        return redirect()->route('docentes.index')
            ->with('success', 'Docente updated successfully');
            
             

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docente = Docente::findOrFail($id);
        if(Storage::delete('public/'.$docente->Foto)){
            $docente = Docente::find($id)->delete();
        }
        

        return redirect()->route('docentes.index')
            ->with('success', 'Docente deleted successfully');
    }
}

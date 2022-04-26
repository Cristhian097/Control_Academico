<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


/**
 * Class DatoController
 * @package App\Http\Controllers
 */
class DatoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        
        
        $texto = trim($request->get('texto'));
        

        $datos = Dato::paginate();
        if(isset($request->texto))
        {
            $texto=$datos->where('id','LIKE','$'.$request->texto.'$');
                        //->orWhere('facultad','LIKE','$'.$request->texto.'$');
        }
        //Dato::where('id','LIKE','$'.$texto.'$');  
        /*$datos= DB::table('datos')->select('id','facultad')
                                ->where('facultad','LIKE','$'.$texto.'$')
                                ->orWhere('id','LIKE','$'.$texto.'$')
                                ->orderBy('facultad','asc')
                                ->paginate(10);*/
        //$texto = where('facultad','LIKE','$'.$texto.'$');
                    /*->orWhere('id','LIKE','$'.$texto.'$')
                    ->orderBy('facultad','asc')
                    ->paginate(10);*/
        //$texto = Dato::where('id','LIKE','$'.$texto.'$')->paginate(10);
                                                       // ->orderBy('facultad','asc')
                                                       // ->get();
    

        return view('dato.index', compact('datos'))
            ->with('i', (request()->input('page', 1) - 1) * $datos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato = new Dato();
        return view('dato.create', compact('dato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dato::$rules);
        $dato = request()->except('_token');

        if($request->hasFile('correo')){
            $dato['correo']=$request->file('correo')->store('uploads','public');
        }
         Dato::create($dato);

        return redirect()->route('datos.index')
            ->with('success', 'Dato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato = Dato::find($id);

        return view('dato.show', compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Dato::find($id);

        return view('dato.edit', compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dato $dato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Dato::$rules);
        $datos = request()->except('_token','_method');
        if($request->hasFile('correo')){
            $dato=Dato::findOrFail($id);
            Storage::delete('public/'.$dato->correo);
            $datos['correo']=$request->file('correo')->store('uploads','public');
        }  

            Dato::where('id','=',$id)->update($datos);
          return redirect()->route('datos.index')
            ->with('success', 'Dato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dato = Dato::findOrFail($id);
        if(Storage::delete('public/'.$dato->correo)){
            $dato = Dato::find($id)->delete();
        }
       

        return redirect()->route('datos.index')
            ->with('success', 'Dato deleted successfully');
    }
}

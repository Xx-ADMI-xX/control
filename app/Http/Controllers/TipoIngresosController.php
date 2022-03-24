<?php

namespace App\Http\Controllers;
use App\TipoIngresos;
use Illuminate\Http\Request;

class TipoIngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoingresos=TipoIngresos::all();        
        return view('tipoI.index')
        ->with('tipoI',$tipoingresos)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoI.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        TipoIngresos::create($data);
        return redirect(route('tipoI'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoingresos=TipoIngresos::find($id);
        return view('tipoI.edit')
        ->with('tipoI',$tipoingresos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $TpI=TipoIngresos::find($id);
        $TpI->update($request->all());
        return redirect(route('tipoI'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoIngresos::destroy($id);
        return redirect(route('tipoI'));
    }
}

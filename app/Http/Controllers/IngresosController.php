<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoIngresos;
use App\Ingresos;
use Auth;
use DB;
use PDF;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $data=[
        //     'fecha'=>date('Y-m-d'),
        //     'usuarios'=>Auth::user()->usu_Nombre
        // ];
        // $pdf=PDF::loadview('ingresos.reporte',$data);
        // // $pdf=setPaper('a5,landscapes')
        // return $pdf->stream('invoice.pdf');

        $data=$request->all();
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');
        if(isset($data['desde'])){
        $desde=$data['desde'];
        $hasta=$data['hasta'];
        }

            

            $ingresos=DB::select("
                SELECT * FROM ingresos i 
                JOIN users u ON i.usu_id=u.usu_id
                JOIN tipoingresos tpI ON i.tpI_id=tpI.tpI_id
                WHERE i.ing_fecha BETWEEN '$desde' AND '$hasta'
                ");

            if (isset($data['btn_pdf'])) {
            // dd('click document');

            $data=['ingresos'=>$ingresos];
            $pdf=PDF::loadview('ingresos.reporte',$data);
            return $pdf->stream('reporte-del-ingreso.pdf');
                        
        }
        
            return view('ingresos.index')
            ->with('ingresos',$ingresos)
            ->with('desde',$desde)
            ->with('hasta',$hasta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoingresos=TipoIngresos::all();
        return view('ingresos.create')
        ->with('tipoingresos',$tipoingresos);
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
        $data['usu_id']=Auth::User()->usu_id;
        Ingresos::create($data);
        return redirect(route('ingresos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresos=Ingresos::find($id);
        return view('ingresos.edit')
        ->with('ingresos',$ingresos);
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
        $Ing=Ingresos::find($id);
        $Ing->update($request->all());
        return redirect(route('ingresos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ingresos::destroy($id);
        return redirect(route('ingresos'));
    }

}

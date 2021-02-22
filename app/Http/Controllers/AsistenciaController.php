<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;
use App\Http\Requests\AsisRequest;


 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.gtg
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Asistencia::get();
    }

   
    
    public function store(Request $request)
    {
        $asistencia = new Asistencia;
        $asistencia->create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        return $asistencia;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        $asistencia->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $asistencia = Asistencia::find($id);
        $asistencia->delete();

        return response()->json('The book successfully deleted');

    }
    

}

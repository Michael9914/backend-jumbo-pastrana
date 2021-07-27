<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionsLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = ['Yone', 'Katarina', 'Ekko', 'Lux'];
    return response()->json(
        [
            'data' => $champions,
            'msg' => [
                'summary' => 'Consulta correcta',
                'detail' => 'La consulta de los campeones está correcta',
                'code' => '201'
            ]
        ], 201
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $champions = ['Yone', 'Katarina', 'Ekko', 'Lux']; 
    return response() ->json(
        [
            'data' => null,
            'msg' => [
                'summary' => 'Creación correcta',
                'detail' => 'El dato ha sido creado',
                'code' => '201'
            ]
        ],201
    );        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $champion ='Katarina';
    return response()->json(
        [
            'data' => $champion,
            'msg' => [
                'summary' => 'Consulta correcta',
                'detail' => 'La consulta del campeon es correcta',
                'code' => '200'
            ]
        ], 200
    );
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
        $champions = ['Yone', 'Katarina', 'Ekko', 'Lux']; 
    return response() ->json(
        [
            'data' => null,
            'msg' => [
                'summary' => 'Actualización correcta',
                'detail' => 'Los datos se han actualizado',
                'code' => '201'
            ]
        ],201 
     );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $champions = ['Yone', 'Katarina', 'Ekko', 'Lux'];
    return response()->json(
        [
            'data' => $champions,
            'msg' => [
                'summary' => 'Eliminado correctamente',
                'detail' => 'EL dato se eliminó correctamente',
                'code' => '201'
            ]
        ], 201
    );
    }

    public function updateState()
    {
    return response()->json(
        [
            'data' => null,
            'msg' => [
                'summary' => 'Actualizado correctamente',
                'detail' => 'EL dato se actualizo correctamente',
                'code' => '201'
            ]
        ], 201
    );
    }
}



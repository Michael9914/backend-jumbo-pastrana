<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Line;

class LinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // ELOQUENT
         $lines = Line::get();
         return response()->json(
             [
                 'data' => $lines,
                 'msg' => [
                     'summary' => 'consulta correcta',
                     'detail' => 'la consulta de la linea es correcta',
                     'age' => '200'
                 ]
 
             ],200
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
        $line = new Line();
        $nationality = Nationality::find($request->nationality['id']);
        $line->names = $request->names;
        $line->email = $request->email;
        $line->age = $request->age;
        $line->identification = $request->identification;
        $line->save();

        return response() ->json(
            [
                'data' => $line,
                'msg' => [
                    'summary' => 'Creación correcta',
                    'detail' => 'El dato ha sido creado',
                    'age' => '201'
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
        $line = Line::find($line);
        return response()->json(
            [
                'data' => $line,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de la linea es correcta',
                    'age' => '200'
                ]

            ],200
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
        $line = Line::find($line);
        $line->age = $request->age;
        $line->names = $request->names;
        $line->email = $request->email;
        $line->identification = $request->identification;
        $line->save();

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'los datos se han actualizado',
                    'age' => '201'
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
        $line = Line::find($line);
        $line->delete();
        return response()->json(
            [
                'data' => $line,
                'msg' => [
                    'summary' => 'eliminacion correcta',
                    'detail' => 'dato eliminado',
                    'code' => '201'
                ]

            ],201
        );
    }

    public function updateState()
    {
        $line = 'line';
        return response()->json(
            [
                'data' => $line,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'el estado de la linea se actualizo ',
                    'code' => '201'
                ]

            ],201
        );
    }

}

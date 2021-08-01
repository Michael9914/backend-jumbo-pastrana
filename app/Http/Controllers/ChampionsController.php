<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SQL
        // $champions = DB::select('select * from app.champion');

        // QUERY BUILDER
        // $champions = DB::table('app.champion')->get();

        // ELOQUENT
        $champions = Champion::get();
        return response()->json(
            [
                'data' => $champions,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de la computadora y la empresa es correcta',
                    'code' => '200'
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
        $champion = new Champion();
        $champion->code = $request->code;
        $champion->description = $request->description;
        $champion->date = $request->date;
        $champion->approved = $request->approved;
        $champion->title = $request->title;
        $champion->save();

        return response()->json(
        [
            'data' => $champions,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta de la computadora y la empresa es correcta',
                'code' => '200'
            ]

        ],200
    );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($champion)
    {
        $champion = Champion::find($champion);
        return response()->json(
            [
                'data' => $champion,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del campeon es correcta',
                    'code' => '200'
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
    public function update(Request $request, $champion)
    {
        $champion = Champion::find($champion);
        $champion->code = $request->code;
        $champion->description = $request->description;
        $champion->date = $request->date;
        $champion->approved = $request->approved;
        $champion->title = $request->title;
        $champion->save();

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'los datos se han actualizado',
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
    public function destroy($champion)
    {
        $champion = Champion::find($champion);
        $champion->delete();
        return response()->json(
            [
                'data' => $champion,
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
        $champion = 'champion';
        return response()->json(
            [
                'data' => $champion,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'el estado del proyecto se actualizo ',
                    'code' => '201'
                ]

            ],201
        );
    }
}

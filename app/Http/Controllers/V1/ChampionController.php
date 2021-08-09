<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Champion;
use Illuminate\Http\Request;
use App\Http\Resources\V1\Champions\ChampionResource;
use App\Http\Resources\V1\Champions\ChampionCollection;
use App\Http\Resources\V1\Champions\StoreChampionRequest;
use App\Http\Resources\V1\Champions\UpdateChampionRequest;
use App\Http\Resources\V1\Champions\DestroysChampionRequest;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ChampionCollection(Champion::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChampionRequest $request)
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
            'data' => $champion,
            'msg' => [
                'summary' => 'Campeón creado',
                'detail' => '',
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
    public function show(Champion $champion)
    {
        return new ChampionResource($champion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChampionRequest $request, Champion $champion)
    {
        $champion->username = $request->input('username');
        $champion->name = $request->input('name');
        $champion->lastname = $request->input('lastname');
        $champion->avatar = $request->input('avatar');
        $champion->username = $request->input('username');
        $champion->birthdate = $request->input('birthdate');
        $champion->email = $request->input('email');
        $champion->email_verified_at = $request->input('email_verified_at');
        $champion->password_changed = $request->input('password_changed');
        $champion->save();
        return response()->json(
            [
                'data' => $champion,
                'msg' => [
                    'summary' => 'Campeón Modificado',
                    'detail' => '',
                    'code' => '201'
                ]
            ], 201
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
        $champion->delete();

        return response()->json(
            [
                'data' => $champion,
                'msg' => [
                    'summary' => 'Campeón Eliminado',
                    'detail' => '',
                    'code' => '201'
                ]
            ], 201
        );
    }

    public function destroys(DestroysChampionRequest $request)
    {
        Champion::destroy($request->input('ids'));

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Campeón/s Eliminado/s',
                    'detail' => '',
                    'code' => '201'
                ]
            ], 201
        );
    }
}

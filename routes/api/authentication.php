<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ChampionsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::get('champions',function (){
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
}); 
 Route::get('champions/{champion}/lines/{line}',function (){
    $champions = ['Yone', 'Katarina', 'Ekko', 'Lux'];
    return response()->json(
        [
            'data' => $champions,
            'msg' => [
                'summary' => 'Consulta correcta',
                'detail' => 'La consulta del campeon es correcta',
                'code' => '200'
            ]
        ], 200
    );
  });
 
 Route::post('champions/{champion}/lines',function (){
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
 });
 
 Route::put( 'champions/{champion}/lines/{line}',function (){
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
 });
 
 Route::delete( 'champions/{champion}/lines/{line}',function (){
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
 }); */
Route::apiResource('projects',ProjectsController::class);
Route::prefix('project')->group(function (){
    Route::prefix('{project}')->group(function (){
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
    Route::prefix('')->group(function (){
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
});

Route::apiResource('champions.lines',ChampionsController::class);
Route::prefix('champion/{champion}/lines')->group(function () {
    Route::prefix('{line}')->group(function(){
        Route::patch('state',[ChampionsController::class,'updateState']);
    });
});


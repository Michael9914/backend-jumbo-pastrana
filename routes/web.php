<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\VehiclesCopsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('vehicles',function (){
    $vehicles = ['carro', 'moto', 'bus'];
    return response()->json(
        [
            'data' => $vehicles,
            'msg' => [
                'summary' => 'Consulta correcta',
                'detail' => 'La consulta de los vehiculos está correcta',
                'code' => '201'
            ]
        ], 201
    );
}); 
 Route::get('vehicles/{vehicle}/cops/{policeman}',function (){
    $vehicles = ['carro', 'moto', 'bus'];
    return response()->json(
        [
            'data' => $vehicles,
            'msg' => [
                'summary' => 'Consulta correcta',
                'detail' => 'La consulta del vehículo y policia es correcta',
                'code' => '200'
            ]
        ], 200
    );
  });
 
 Route::post('vehicles/{vehicle}/cops',function (){
    $vehicles = ['carro', 'moto', 'bus']; 
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
 
 Route::put( 'vehicles/{vehicle}/cops/{policeman}',function (){
    $vehicles = ['carro', 'moto', 'bus']; 
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
 
 Route::delete( 'vehicles/{vehicle}/cops/{policeman}',function (){
    $vehicles = ['carro', 'moto', 'bus'];
    return response()->json(
        [
            'data' => $vehicles,
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

Route::apiResource('vehicles.cops',VehiclesCopsController::class);
Route::prefix('vehicle/{vehicle}/policeman/{policeman}')->group(function () {
   Route::patch('state',[VehiclesCopsController::class,'updateState']);
});
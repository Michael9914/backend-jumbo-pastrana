<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('champions/{champion}/lines',function (){
   return response()->json(
      [
          'data' => $champion,
          'msg' => [
              'summary' => 'consulta correcta',
              'detail' => 'la consulta de proyectos está correcta',
              'code' => '200'
          ]
      ], 200
  );

 Route::get('champions/{champion}/lines/{line}',function (){
   return response()->json(
      [
          'data' => $champion,
          'msg' => [
              'summary' => 'consulta correcta',
              'detail' => 'la consulta de proyectos está correcta',
              'code' => '200'
          ]
      ], 200
  );
 });

 Route:: post('champions/{champion}/lines',function (){
   return response()->json(
      [
          'data' => $champion,
          'msg' => [
              'summary' => 'Creado correctamente',
              'detail' => 'El proyecto se creo correctamente',
              'code' => '201'
          ]
      ], 201
  );

 Route::put('champions/{champion}/lines/{line}',function (){
   return response()->json(
      [
          'data' => null,
          'msg' => [
              'summary' => 'Actualizado correctamente',
              'detail' => 'EL proyecto se actualizó correctamente',
              'code' => '201'
          ]
      ], 201
  );
  
 Route::delete('champions/{champion}/lines/{line}',function (){
   return response()->json(
      [
          'data' => $champion,
          'msg' => [
              'summary' => 'Eliminado correctamente',
              'detail' => 'EL proyecto se eliminó correctamente',
              'code' => '201'
          ]
      ], 201
  );
    return 'Eliminar el personaje';
 });


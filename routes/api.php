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

<<<<<<< HEAD
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
// });

Route::get('projects',function (){
   return ['proyecto1','proyecto2'];
});

Route::get('projects/{project}',function (){
    return ['proyecto1','proyecto2'];
 });

Route::post('projects',function (){
    return "Creado";
});

Route::put( 'projects/{project}',function (){
    return "Actualizado";
});

Route::delete( 'projects/{project}',function (){
    return "Eliminado";
});
=======
Route::get('projects',function (){
    return ['proyecto1','proyecto2'];
 });

 Route::get('projects/{project}',function (){
    return 'proyecto1';
 });

 Route:: post('projects/',function (){
    return "Creado";
 });

 Route::put('projects/{project}',function (){
    return "Actualizado";
 });
  
 Route::delete('projects/{project}',function (){
    return "Eliminado";
 });
>>>>>>> 0c0d9581db07788db48cd90fe1fdb7e7bee81187

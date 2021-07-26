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

Route::get('personajes',function (){
    return ['Katarina','Yone','Xin Xhao','Irelia'];
 });

 Route::get('personajes/{personaje}/lineas/{linea}',function (){
   return ['Katarina','Yone','Xin Xhao','Irelia'];
 });

 Route:: post('personajes/',function (){
    return 'Personaje Creado';
 });

 Route::put('personajes/{personaje}/lineas/{linea}',function (){
    return 'Actualizacion del personaje';
 });
  
 Route::delete('personajes/{personaje}/lineas/{linea}',function (){
    return 'Eliminar el personaje';
 });

 
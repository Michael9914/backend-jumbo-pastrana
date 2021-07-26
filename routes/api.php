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
    return ['Katarina','Yone','Xin Xhao','Irelia'];
 });

 Route::get('champions/{champion}/lines/{line}',function (){
   return ['Katarina','Yone','Xin Xhao','Irelia'];
 });

 Route:: post('champions/{champion}/lines',function (){
    return 'Personaje Creado';
 });

 Route::put('champions/{champion}/lines/{line}',function (){
    return 'Actualizacion del personaje';
 });
  
 Route::delete('champions/{champion}/lines/{line}',function (){
    return 'Eliminar el personaje';
 });
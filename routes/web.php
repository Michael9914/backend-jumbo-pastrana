<?php

use Illuminate\Support\Facades\Route;

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

Route::get('vehicles',function (){
    return ['carro', 'moto', 'bus'];
 });
 
 Route::get('vehicles/{vehicle}/cops/{policeman}',function (){
     return 'carro';
  });
 
 Route::post('vehicles/{vehicle}/cops/{policeman}',function (){
     return 'Vehiculo creado';
 });
 
 Route::put( 'vehicles/{vehicle}/cops/{policeman}',function (){
     return 'Vehiculo actualizado';
 });
 
 Route::delete( 'vehicles/{vehicle}/cops/{policeman}',function (){
     return 'Vehiculo eliminado';
 });
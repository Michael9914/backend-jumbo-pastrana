<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    //use HasFactory;
    protected $table = 'lines';
    protected $fillable = [
         'age',
         'names',
         'email',
         'phone',
         'identification',
    ];
    //uno a uno 
    /* function lines(){
        return $this->belongsTo(Line::class);
    } */

    //uno a varios
    function lines(){
        return $this->belongsTo(Line::class);
    } 

    // varios a varios
    /* function lines(){
        return $this->belongsToMany(Line::class)->withTimestamps();
    }
 */
}
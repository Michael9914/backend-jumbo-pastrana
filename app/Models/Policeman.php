<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policeman extends Model
{
    // use HasFactory;
    protected $table = 'cops';
    protected $fillable = [
        'email',
        'identification',
        'names',
        'phone',
    ];

    // uno a uno
    /*
    function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
    */

    // uno a varios
    function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
    
    // varios a varios
    /*
    function vehicles(){
        return $this->belongsToMany(vehicle::class)->withTimestamps();
    }
    */
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'app.champions';
    protected $fillable = [
         'code',
         'description',
         'date',
         'approved',
         'title',
    ];

    /*function line(){
        return $this->hasOne(Line::class);
    }*/

    // uno a uno
    /* public function lines(){
        return $this->hasOne(Lines::class);
    } */
    // uno a varios
    function line(){
        return $this->hasMany(Line::class);
    }

    // varios a varios
    /* function line(){
        return $this->belongsToMany(Lines::class)->withTimestamps();
    } */
}

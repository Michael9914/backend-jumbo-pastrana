<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    // use HasFactory;
    protected $table = 'vehicles';

    protected $fillable = [
        'code',
        'date',
        'description',
        'is_approved',
        'title',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'date' => 'datetime:Y-m-d',
    ];
    
    protected $attributes = ['full_name'];
    // uno a uno
    /*
    function policeman(){
        return $this->hasOne(Policeman::class);
    }
    */

    // uno a varios
    function cops()
    {
        return $this->hasMany(Policeman::class);
    }
    

    // varios a varios
    /*
    function cops(){
        return $this->belongsToMany(Policeman::class)->withTimestamps();;
    }
    */

    //Mutators
    function setCodeAttribute($value)
    {
        $this->attributes['code'] = strtoupper($value);
    }

    function setDateAttribute($value)
    {
        $this->attributes['date'] = 'hola';
    }

    // Accessors
    function getFullNameAttribute()
    {
        return $this->attributes['code'].$this->attributes['description'];
    }
}

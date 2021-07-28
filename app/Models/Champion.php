<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    //use HasFactory;

    protected $table = 'champions';
    protected $fillable = [
         'code',
         'description',
         'date',
         'approved',
         'tittle',
    ];

    protected $attributes=['full_name'];

    protected $casts = [
        'is_approved' => 'boolean',
        'date' => 'detetime:Y-m-d',
    ];
    

    // uno a uno
    /* public function champion(){
        return $this->hasOne(Champion::class);
    } */
    // uno a varios
    function champion(){
        return $this->hasMany(Champion::class);
    }

    // varios a varios
    /* function champions(){
        return $this->belongsToMany(Champion::class)->withTimestamps();
    } */

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
        return $this->attributes['code'].strtolower($this->attributes['description']);
    }

}

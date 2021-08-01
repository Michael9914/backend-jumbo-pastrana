<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;
    protected $table = 'app.lines';
    protected $fillable = [
         'age',
         'names',
         'email',
         'identification',
    ];
    protected $casts = [
        'is_approved' => 'boolean',
        'date' => 'detetime:Y-m-d',
    ];

    //protected $attributes=['full_name'];

    //uno a uno 
    /* function champions(){
        return $this->belongsTo(Champion::class);
    } */

    //uno a varios
    function champions(){
        return $this->belongsTo(Champion::class);
    } 

    // varios a varios
    /* function champions(){
        return $this->belongsToMany(Champion::class)->withTimestamps();
    }
 */
}
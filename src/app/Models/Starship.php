<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Starship extends Model
{
    // protected $fillable = [
    //         'name',
    //         'model',
    //         'manufacturer',
    //         'cost_in_credits',
    //         'length',
    //         'max_atmosphering_speed',
    //         'crew',
    //         'passengers',
    //         'cargo_capacity',
    //         'consumables',
    //         'hyperdrive_rating',
    //         'MGLT',
    //         'starship_class',
    //         'pilots',
    //         'films',
    //         'url'
    // ];
    
    protected $guarded = [];
    
    protected $casts = [
        'pilots' => 'array',
        'films' => 'array',
    ];

    public function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }
}

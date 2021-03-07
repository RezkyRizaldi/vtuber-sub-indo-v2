<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $fillable = [
        'name', 'image', 'desc',
    ];

     /**
     * The roles that belong to the Gen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
   
}
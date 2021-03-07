<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    protected $fillable = [
        'name', 'image', 'desc',
    ];
}
<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AffiliationTalent extends Model
{
    protected $fillable = [
        'talent_id', 'affiliation_id',
    ];
}
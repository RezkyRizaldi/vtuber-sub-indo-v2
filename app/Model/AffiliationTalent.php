<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AffiliationTalent extends Model
{
    protected $table = 'affiliations_talent';
    protected $fillable = [
        'talent_id', 'affiliation_id',
    ];
}
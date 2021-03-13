<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AffiliationGen extends Model
{
    public $table = "affiliation_gens";
    protected $fillable = ["affiliation_id", "gen_id"];
}
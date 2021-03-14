<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gen;
use App\Models\AffiliationGen;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Affiliation extends Model
{
  protected $fillable = ["name", "image", "desc"];

  public function affiliationGen(): BelongsToMany
  {
    $pivotTable = AffiliationGen::class;
    $relatedModel = Gen::class;

    return $this->belongsToMany(
      $relatedModel,
      $pivotTable,
      "affiliation_id",
      "gen_id"
    );
  }
}
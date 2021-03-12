<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Talent;
use App\Models\AffiliationTalent;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Affiliation extends Model
{
  protected $fillable = ["name", "image", "desc"];
  public function affiliationTalent(): BelongsToMany
  {
    $pivotTable = AffiliationTalent::class;
    $relatedModel = Talent::class;

    return $this->belongsToMany(
      $relatedModel,
      $pivotTable,
      "affiliation_id",
      "talent_id"
    );
  }
}
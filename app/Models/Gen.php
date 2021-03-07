<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GenTalent;
use App\Models\Talent;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gen extends Model
{
  protected $fillable = ["gen", "type", "branch"];

  public function genTalent(): BelongsToMany
  {
    $pivotTable = GenTalent::class;
    $relatedModel = Talent::class;

    return $this->belongsToMany(
      $relatedModel,
      $pivotTable,
      "gen_id",
      "talent_id"
    );
  }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GenTalent;
use App\Models\Talent;
use App\Models\Group;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gen extends Model
{
  protected $fillable = ["group_id", "gen"];

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

  public function group(){ 
    return $this->belongsTo(Group::class)->groupby('name');        
  }
}
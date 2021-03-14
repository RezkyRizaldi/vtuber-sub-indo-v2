<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GroupBranch;
use App\Models\Group;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Branch extends Model
{
  protected $fillable = ["name", "code"];

  public function branchGroup(): BelongsToMany
  {
    $pivotTable = GroupBranch::class;
    $relatedModel = Group::class;

    return $this->belongsToMany(
      $relatedModel,
      $pivotTable,
      "group_id",
      "branch_id"
    );
  }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GroupBranch;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
  protected $fillable = ["name"];

  public function groupBranch(): BelongsToMany
  {
    $pivotTable = GroupBranch::class;
    $relatedModel = Branch::class;

    return $this->belongsToMany(
      $relatedModel,
      $pivotTable,
      "group_id",
      "branch_id"
    );
  }
}
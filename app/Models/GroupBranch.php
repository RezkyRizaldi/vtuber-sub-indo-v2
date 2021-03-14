<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupBranch extends Model
{
  protected $fillable = ["group_id", "branch_id"];
}
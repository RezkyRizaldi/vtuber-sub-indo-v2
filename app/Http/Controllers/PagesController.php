<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talent;
use App\Models\Gen;
use App\Models\Affiliation;
use App\Models\Group;
use App\Models\Branch;

class PagesController extends Controller
{
  /**
   * Display a list of Talents.
   *
   * @return \Illuminate\Http\Response
   */
  public function virtualpedia()
  {
    $affiliationGen = Affiliation::with("affiliationGen")->get();
    $groupBranches = Group::with("groupBranch")->get();
    $genTalent = Gen::with("genTalent","group.groupBranch")->get(); 
    return view("virtualpedia.index", compact("affiliationGen", "groupBranches", "genTalent"));
  }
}
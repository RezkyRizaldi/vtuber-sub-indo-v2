<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talent;
use App\Models\Gen;
use App\Models\Affiliation;
use App\Models\Group;
use App\Models\Branch;

class LocaleController extends Controller
{
  public function home($locale)
  {
    $local = $locale;
    \App::setLocale($locale);
    return view("home.index", compact("local"));
  }

  public function envirtualpedia($locale)
  {
    $affiliationGen = Affiliation::with("affiliationGen")->get();
    $groupBranches = Group::with("groupBranch")->get();
    $genTalent = Gen::with("genTalent","group.groupBranch")->get();
    return view("virtualpedia.index", compact("local", "affiliationGen", "groupBranches", "genTalent"));
  }
}
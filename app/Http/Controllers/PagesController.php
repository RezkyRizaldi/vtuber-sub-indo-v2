<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talent;
use App\Models\Gen;

class PagesController extends Controller
{
  /**
   * Display a list of Talents.
   *
   * @return \Illuminate\Http\Response
   */
  public function virtualpedia()
  {
    $genTalent = Gen::with("genTalent")->get();
    // dd($genTalent);
    return view("virtualpedia.index", compact("genTalent"));
  }
}
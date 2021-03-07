<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Talent;
use App\Model\Gen;

class PagesController extends Controller
{
    public function virtualpedia() {
        $genTalent = Gen::with('genTalent')->get();
        // dd($genTalent);
        return view('virtualpedia.index', compact('genTalent'));
    }
}
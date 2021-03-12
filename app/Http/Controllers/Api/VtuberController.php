<?php

namespace App\Http\Controllers\Api;

use App\Models\Affiliation;
use App\Models\Talent;
use App\Models\Gen;
use App\Models\GenTalent;
use App\Models\AffliationTalent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VtuberController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
    try {
      $affiliations = Affiliation::with("AffiliationTalent")->get();
      return response()->json(
        ["status" => "sukses", "data" => $affiliations],
        200
      );
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    try {
      $data = $request->all();
      $uniquename = "aff_" . md5($data["name"]);
      $filename =
        $uniquename .
        "." .
        $request->file("image")->getClientOriginalExtension();
      $path = public_path("storage/affiliation");
      $request->image->move($path, $filename);
      $data["image"] = $filename;
      $postData = Affiliation::create($data);
      if (isset($postData["id"])) {
        if (isset($request->talent_id) && $request->talent_id) {
          foreach ($data["talent_id"] as $key => $value) {
            $affiliationTalent = AffiliationTalent::create([
              "affiliation_id" => $postData["id"],
              "talent_id" => $value,
            ]);
          }
        }
        return response()->json(
          [
            "status" => "sukses",
            "data" => $postData,
            "Affiliation" => $affiliationTalent,
          ],
          200
        );
      }
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Model\Affiliation  $affiliation
   * @return \Illuminate\Http\Response
   */
  public function show(Affiliation $affiliation)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Affiliation  $affiliation
   * @return \Illuminate\Http\Response
   */
  public function edit(Affiliation $affiliation)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Affiliation  $affiliation
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Affiliation $affiliation)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Affiliation  $affiliation
   * @return \Illuminate\Http\Response
   */
  public function destroy(Affiliation $affiliation)
  {
    //
  }

  /**
   * Fetch Talents' Gen.
   *
   * @return \Illuminate\Http\Response
   */
  /**
   * Post Talent's data.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function postTalent(Request $request)
  {
    try {
      $data = $request->all();
      $uniquename = "tlnt_" . md5($data["name"]);
      $filename =
        $uniquename .
        "." .
        $request->file("image")->getClientOriginalExtension();
      $path = public_path("storage/talent");
      $request->image->move($path, $filename);
      $data["image"] = $filename;
      $postData = Talent::create($data);
      if (isset($postData["id"])) {
        $gen = GenTalent::create([
          "talent_id" => $postData["id"],
          "gen_id" => $data["gen_id"],
        ]);
        return response()->json(
          [
            "status" => "sukses",
            "data" => $postData,
            "gen" => $gen,
          ],
          200
        );
      }
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }

  public function postGen(Request $request)
  {
    try {
      $data = $request->all();
      $postData = Gen::create($data);

      return response()->json(["status" => "sukses", "data" => $postData], 200);
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }
}
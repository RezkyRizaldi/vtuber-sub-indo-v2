<?php

namespace App\Http\Controllers\Api;

use App\Models\Affiliation;
use App\Models\Talent;
use App\Models\Gen;
use App\Models\GenTalent;
use App\Models\AffliationGen;
use App\Models\Group;
use App\Models\Branch;
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
      $affiliationGen = Affiliation::with("affiliationGen.group.groupBranch","affiliationGen.genTalent")->get();
      return response()->json(
        ["status" => "sukses", "data" => $affiliationGen],
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
        if (isset($request->gen_id) && $request->gen_id) {
          foreach ($data["gen_id"] as $key => $value) {
            $affiliationTalent = AffiliationGen::create([
              "affiliation_id" => $postData["id"],
              "gen_id" => $value,
            ]);
          }
        }
        return response()->json(
          [
            "status" => "sukses",
            "data" => $postData,
            "Affiliation" => $affiliationGen,
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
   * Fetch talents' group data.
   *
   * @return \Illuminate\Http\Response
   */
  public function getGroup()
  {
    try {
      $groups = Group::with("groupBranch")->get();
      return response()->json(["status" => "sukses", "data" => $groups], 200);
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }

  /**
   * Post talent's group data.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function postGroup(Request $request)
  {
    try {
      $data = $request->all();
      $postData = Group::create($data);
      if (isset($postData["id"])) {
        if (isset($request->branch_id) && $request->branch_id) {
          foreach ($data["branch_id"] as $key => $value) {
            $groupBranch = GroupBranch::create([
              "group_id" => $postData["id"],
              "branch_id" => $value,
            ]);
          }
        }
        return response()->json(
          [
            "status" => "sukses",
            "data" => $postData,
            "groups" => $groupBranch,
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
   * Post talent's group branch data.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function postBranch(Request $request)
  {
    try {
      $data = $request->all();
      $postData = Branch::create($data);

      return response()->json(["status" => "sukses", "data" => $postData], 200);
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }

  /**
   * Fetch talents' gen data.
   *
   * @return \Illuminate\Http\Response
   */
  public function getGen()
  {
    try {
      $gens = Gen::all();
      return response()->json(["status" => "sukses", "data" => $gens], 200);
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }

  /**
   * Post talent's gen data.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
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

  /**
   * Fetch talents' data.
   *
   * @return \Illuminate\Http\Response
   */
  public function getTalent()
  {
    try {
      $genTalent = Gen::with("genTalent")->get();
      return response()->json(["status" => "sukses", "data" => $genTalent], 200);
    } catch (Exception $ex) {
      return response()->json([
        "status" => "error",
        "result" => $ex->getMessage(),
        "message" => "Data Tidak Ditemukan",
      ]);
    }
  }

  /**
   * Post talent's data.
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
        if (isset($request->gen_id) && $request->gen_id) {
          foreach ($data["gen_id"] as $key => $value) {
            $genTalent = GenTalent::create([
              "talent_id" => $postData["id"],
              "gen_id" => $value,
            ]);
          }
        }
        return response()->json(
          [
            "status" => "sukses",
            "data" => $postData,
            "gens" => $genTalent,
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
}
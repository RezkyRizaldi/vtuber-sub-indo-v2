<?php

namespace App\Http\Controllers\Api;

use App\Model\Affiliation;
use App\Model\Talent;
use App\Model\Gen;
use App\Model\GenTalent;
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
            $uniquename = 'aff_'.md5($data['name']);
            $filename = $uniquename.'.'.$request->file('image')->getClientOriginalExtension();
            $path = public_path('storage/affiliation');
            $request->image->move($path, $filename);
            $data['image'] = $filename;
            $postData = Affiliation::create($data);

            return response()->json(['status' => 'sukses', 'data' => $postData], 200);          
        } catch (Exception $ex) {
            return response()->json(['status' => 'error', 'result' => $ex->getMessage(),'message' => 'Data Tidak Ditemukan']);
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
     * @param  \App\Model\Affiliation  $affiliation
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
     * @param  \App\Model\Affiliation  $affiliation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affiliation $affiliation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Affiliation  $affiliation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affiliation $affiliation)
    {
        //
    }

    public function getTalent() {

    }

    public function postTalent(Request $request) {
        try {
            $data = $request->all();
            $uniquename = 'tlnt_'.md5($data['name']);
            $filename = $uniquename.'.'.$request->file('image')->getClientOriginalExtension();
            $path = public_path('storage/talent');
            $request->image->move($path, $filename);
            $data['image'] = $filename;
            $postData = Talent::create($data);
            if(isset($postData['id'])){
                $gen = GenTalent::create([
                    'talent_id' => $postData['id'],
                    'gen_id' => $data['gen_id'],
                ]);
                return response()->json(['status' => 'sukses', 'data' => $postData, 'gen' => $gen], 200);      
            }    
        } catch (Exception $ex) {
            return response()->json(['status' => 'error', 'result' => $ex->getMessage(),'message' => 'Data Tidak Ditemukan']);
        }
    }

    public function postGen(Request $request) {
        try {
            $data = $request->all();
            $postData = Gen::create($data);

            return response()->json(['status' => 'sukses', 'data' => $postData], 200);          
        } catch (Exception $ex) {
            return response()->json(['status' => 'error', 'result' => $ex->getMessage(),'message' => 'Data Tidak Ditemukan']);
        }
    }
}
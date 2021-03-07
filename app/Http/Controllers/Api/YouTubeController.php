<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YouTubeController extends Controller
{
  /**
   * Fetch YouTube Clips.
   *
   * @return \Illuminate\Http\Response
   */
  public function YouTubeAPI()
  {
    // $curl = curl_init();
    // curl_setopt_array($curl, array(
    //     CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?key=AIzaSyDeb3HWz_kCLS9gJyjBpOWpHK_LgW2wlcg&channelId=UCLBaYdhowZ25yGbQzP-t3_A&part=snippet,id&order=date&maxResults=20",
    //     CURLOPT_RETURNTRANSFER => true,
    // ));
    // $response = curl_exec($curl);
    // $err = curl_error($curl);
    // curl_close($curl);
    // $result = json_decode($response, true);
    // // dd($result);
    // $ListYoutube = [];
    // $getListYoutube = $result['items'];
    // foreach ($getListYoutube as $key => $value) {
    //     $ListYoutube[$key] = $value['id'];
    //     $ListYoutube[$key] += $value['snippet'];
    // }
    return view("home.index");
  }
}
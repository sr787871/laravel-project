<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchingController extends Controller
{
    public function view(){
        $response = Http::get('https://api.vedicastroapi.com/v3-json/matching/ashtakoot', [
            "api_key" => "0c77ec72-9589-5bf2-834e-3333b06ee087",
            "boy_dob" => "13/03/2001",
            "boy_tob" => "16:51",
            "boy_tz" => 4,
            "girl_dob" => "25/03/2002",
            "girl_tob" => "14:54",
            "girl_tz" => 5.5,
            "lang" => "en"
        ]);
        return $data = json_decode($response);
    }
}

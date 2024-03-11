<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashaController extends Controller
{
    public function view(){
        $response = Http::get('https://api.vedicastroapi.com/v3-json/dashas/antar-dasha', [
            "lang" => "be",
            "api_key" => "0c77ec72-9589-5bf2-834e-3333b06ee087",
            "lat" => "0",
            "lon" => "0",
            "tz" => 7,
            "dob" => "13/03/2005",
        ]);

        return $data = json_decode($response);
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanchangController extends Controller
{
    public function view(){
        $response = Http::get('https://api.vedicastroapi.com/v3-json/panchang/panchang', [
            "lang" => "en",
            "lat" => "3",
            "lon" => "-1",
            "tz" => 5.5,
            "api_key" => "0c77ec72-9589-5bf2-834e-3333b06ee087",
            "date" => date("d/m/Y"),
        ]);

        $data = json_decode($response,true); // by default it is false and is a object ,if we want to convert it into array then we use true.
        
        return view('panchang',compact('data'));
    }
}

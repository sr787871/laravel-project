<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtendedHoroController extends Controller
{
    public function view(){
        $request = Http::get('https://api.vedicastroapi.com/v3-json/extended-horoscope/find-sun-sign',[
            "lang" => "en",
            "tz" => 4,
            "dob" => "13/03/2001",
            "tob" => "15:59",
            "api_key" => "0c77ec72-9589-5bf2-834e-3333b06ee087"
        ]);

        return $data = json_decode($request);
    }
}

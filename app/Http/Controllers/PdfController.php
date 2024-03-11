<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function view(){
        $response = Http::get('https://api.vedicastroapi.com/v3-json/pdf/horoscope',[
            "lang" => "en",
            "api_key" => "0c77ec72-9589-5bf2-834e-3333b06ee087",
            "dob" => "05/03/2004",
            "tob" => "16:13"
        ]);

        return $data = json_decode($response);
    }
}

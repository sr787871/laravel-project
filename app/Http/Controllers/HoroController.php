<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HoroController extends Controller
{
    public function view(){
         $response = Http::get('https://api.vedicastroapi.com/v3-json/prediction/daily-sun', [
            "api_key" => "9b9a890b-a730-577b-b529-f0153a092ff6",
            "date" => date("d/m/Y"),
            "zodiac" => 11,
            "type" => "big",
            "lang" => "en",
            "split" => true,
            "show_same" => true,
        ]);
        $data = json_decode($response,true);
        return view('zodiac_single',compact('data')); 
        
    }
}

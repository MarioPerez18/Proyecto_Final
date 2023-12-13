<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
   

    public function index(){
        
        //$response = Http::connectTimeout(3)->get('http://localhost:8000/api/events');
        $response = Http::timeout(3)->get('http://localhost:8000/api/events');
        $result = response()->json($response);

        return view('home.api')->with('result', $result);
    }
}

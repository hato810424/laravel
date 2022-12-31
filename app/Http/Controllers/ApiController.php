<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function helloworld() {
        return response()->json([
            "message" => "Hello World!"
        ], 200);
    }
}

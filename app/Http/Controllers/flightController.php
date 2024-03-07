<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flightModel;
use Illuminate\Support\Facades\Validator;
class flightController extends Controller
{
    public function flight(Request $request){
        return response()->json()->getStatusCode(200);
    }
}

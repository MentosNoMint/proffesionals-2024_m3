<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\airport;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\airportRes;
class airportController extends Controller
{
   public function search(){
       $query = $_GET['query'] ?? '';

       $airports = DB::select("SELECT * FROM airports WHERE name LIKE '%{$query}%' or iata like '%{$query}%' or city like '%{$query}'");

       return response()->json([
           'data' => [
               'items' => airportRes::Collection($airports)
           ]
       ]);
   }
}

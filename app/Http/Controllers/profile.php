<?php

namespace App\Http\Controllers;

use App\Http\Resources\userInfoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profile extends Controller
{
    public function infoUser()
    {
        return response()->json(new userInfoResource(Auth::user()));
    }
    public function infoUserBooking()
    {
        return response()->json(new userInfoResource(Auth::user()));
    }
}

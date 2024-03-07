<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class booking extends Controller
{
    public function booking(Request $request){
        $validator = Validator::make($request->all() , [
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required|date',
            'document_number' => 'required|numeric|digits:10'

        ]);

        if($validator->fails()){
            return response()->json([
                'error' => [
                    'code' => 422,
                    'message' => 'Validation error',
                    'errors' => [
                        $validator->errors()
                    ]
                ]
            ], 422);
        }
        return response()->json([
            'accept'
        ], 201);
    }
    public function bookingInf($code){
        return response()->json([
            $this->$code
        ], 200);
    }
}

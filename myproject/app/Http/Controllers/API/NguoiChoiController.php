<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;

class NguoiChoiController extends Controller
{
    //
    public function layNguoiChoi()
    {
    	$listNguoiChoi=NguoiChoi::all();
    	$result=[
    		'success' => true,
    		'data' =>$listNguoiChoi
    	];

    	return response()->json($result);
    }
    
}

<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
class CauHoiController extends Controller
{
   /*  public function layCauHoi()
    {
        $listCauHoi=CauHoi::all()->random(4);
        $result=[
            'success' => true,
            'data' =>$listCauHoi
        ];

        return response()->json($result);
    }
    */

     public function layCauHoi($id)
     {
    	$cauHoi=CauHoi::where('linh_vuc_id',$id)->orderBy(DB::raw('RAND()'))->take(1)->get();
    	$result=[
    		'success' => true,
    	    'data' =>$cauHoi
    	];

    	return response()->json($result);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class QuanTriVienController extends Controller
{
	protected $redirectTo= 'linh-vuc';

    public function dangNhap()
    {

    	return view('login\dang-nhap');
    }

    public function xuLyDangNhap(Request $request)
    {
    	$ten_dang_nhap = $request->ten_dang_nhap;
    	$mat_khau = $request->mat_khau;

    	if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap,'password'=>$mat_khau]))
    	{
    		return redirect()->route('trang-chu');
    	}
    	return "Dang nhap that bai";
    	// $qtv=QuanTriVien::where('ten_dang_nhap',$ten_dang_nhap)->first();
    	// if($qtv==null)
    	// {
    	// 	return 'Sai ten dang nhap';
    	// }

    	// if(!Hash::check($mat_khau,$qtv->mat_khau))
    	// {
    	// 	return 'Sai mat khau';
    	// }

    	// return "Dang nhap thanh cong";
    }

    public function layThongTin()
    {
    	return Auth::user();
    }

    public function dangXuat()
    {
    	Auth::logout();
    	return redirect()->route('dang-nhap');
    }
}

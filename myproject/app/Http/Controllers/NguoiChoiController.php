<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use DB;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       $listNguoiChoi=NguoiChoi::all();
        $trash=DB::table('nguoi_choi')->whereNotNull('deleted_at')->get();
        return view('nguoi-choi.danh-sach',['listNguoiChoi'=>$listNguoiChoi,'trash'=>$trash]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('nguoi-choi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoiChoi = new NguoiChoi;

        $nguoiChoi->ten_dang_nhap=$request->ten_dang_nhap;
        $nguoiChoi->mat_khau=$request->mat_khau;
        $nguoiChoi->email=$request->email;
        $nguoiChoi->hinh_dai_dien=$request->hinh_dai_dien;
        $nguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $nguoiChoi->credit=$request->credit;
        $nguoiChoi->save();

        return redirect()->route('nguoi-choi.danh-sach');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $nguoiChoi = NguoiChoi::find($id);
         
        return view('nguoi-choi.update', compact('nguoiChoi'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->ten_dang_nhap=$request->ten_dang_nhap;
        $nguoiChoi->email=$request->email;
        $nguoiChoi->hinh_dai_dien=$request->hinh_dai_dien;
        $nguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $nguoiChoi->credit=$request->credit;
        $nguoiChoi->save();

        return redirect()->route('nguoi-choi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguoiChoi= NguoiChoi::find($id);
        $nguoiChoi->delete();
        return redirect()->route('nguoi-choi.danh-sach');
    }
    public function thungrac(){
        $listNguoiChoi=NguoiChoi::onlyTrashed()->get();
        return view('nguoi-choi.thung-rac',['listNguoiChoi' => $listNguoiChoi]);
    }

    public function restore($id){
        $listNguoiChoi=NguoiChoi::withTrashed()->find($id);
        $listNguoiChoi->restore();
        return redirect('nguoi-choi');
    }

    public function xoadb($id){
        $cauHoi= NguoiChoi::withTrashed()->find($id);
        $cauHoi->forceDelete();
        return redirect('nguoi-choi');
    }
}
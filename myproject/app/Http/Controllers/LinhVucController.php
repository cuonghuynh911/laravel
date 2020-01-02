<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\LinhVuc;
use DB;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $listLinhVuc=LinhVuc::all();
        $trash=DB::table('linh_vuc')->whereNotNull('deleted_at')->get();
        return view('linh-vuc.danh-sach',['listLinhVuc'=>$listLinhVuc,'trash'=>$trash]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linh-vuc.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linhVuc=new LinhVuc;
        $linhVuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhVuc->save();

        return redirect()->route('linh-vuc.danh-sach');    
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
        $linhVuc = LinhVuc::find($id);
        return view('linh-vuc.form', compact('linhVuc'));
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
        $linhVuc = LinhVuc::find($id);
        $linhVuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhVuc->save();

        return redirect()->route('linh-vuc.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linhVuc = LinhVuc::find($id);
        $linhVuc->delete();
        return redirect()->route('linh-vuc.danh-sach');
    }
    public function thungrac(){
        $listLinhVuc=LinhVuc::onlyTrashed()->get();
        return view('linh-vuc.thung-rac',['listLinhVuc' => $listLinhVuc]);
    }

    public function restore($id){
        $listLinhVuc=LinhVuc::withTrashed()->find($id);
        $listLinhVuc->restore();
        return redirect('linh-vuc');
    }

    public function xoadb($id){
        $linhVuc = LinhVuc::withTrashed()->find($id);
        $linhVuc->forceDelete();
        return redirect('linh-vuc');
    }

}

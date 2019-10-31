<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;


class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dslinhVuc = LinhVuc::all();
        return view('ds-linh-vuc', compact('dslinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return view('them-moi-linh-vuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $linhVuc = new LinhVuc;
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
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
        //
        $linhVuc = LinhVuc::find($id);
        return view('them-moi-linh-vuc',compact('linhVuc'));

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
        //
        $linhVuc = LinhVuc::find($id);
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
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
        //
        $linhVuc = LinhVuc::find($id);
        $linhVuc->delete();
        return redirect()->route('linh-vuc.danh-sach');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;
use App\Http\Controllers\Controller;
class LoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhsachloai = Loai::all();
        return view('loai.index')
                ->with('danhsachloai', $danhsachloai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('loai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loai = new Loai();
        $loai->l_ten = $request->input('l_ten');
        $loai->l_trangthai = 2;
        $loai->save();
        return redirect()->route('loai.index');
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
        $loai = Loai::find($id);

        return view('loai.edit')
            ->with('loai',$loai);
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
        $loai = Loai::find($id);
        $loai ->l_ten = $request->input('l_ten');
        $loai->save();
        return redirect()->route('loai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loai = Loai::find($id);
        $loai ->delete();

        return redirect()->route('loai.index');
    }
}

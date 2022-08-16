<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\TheloaiRequest;
use App\Models\theloai;
use Illuminate\Http\Request;

class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtheloai()
    {
        return view('admin.page.theloai.themmoi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function posttheloai(TheloaiRequest $request)
    {
        $data = $request->all();
        theloai::create($data);
        toastr()->success("Tạo mới thể loại thành công !");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\theloai  $theloai
     * @return \Illuminate\Http\Response
     */
    public function show(theloai $theloai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\theloai  $theloai
     * @return \Illuminate\Http\Response
     */
    public function edit(theloai $theloai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\theloai  $theloai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, theloai $theloai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\theloai  $theloai
     * @return \Illuminate\Http\Response
     */
    public function destroy(theloai $theloai)
    {
        //
    }
}

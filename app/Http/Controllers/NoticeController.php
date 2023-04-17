<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use Helper;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.notice.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.notice.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new Notice;
        $table->title=$request->title;
        $table->slug=Helper::slugGenarate($request->title);
        $table->date_time=$request->date_time;
        if ($request->hasFile('pdf_file')) {
            $image = $request->file('pdf_file');
            $new_file_name=Helper::imageConvert("pdf-",'notice/',$image);
            $table->pdf_file=$new_file_name;
            }
        $table->description=$request->description;
        $table->status='0';
        $table->save();
        toast('You have successfully submitted','success');
        return back();

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
        $data = Notice::find($id);
        return view("admin.pages.notice.edit",compact('data'));
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
        $table = Notice::find($id);
        $table->title=$request->title;
        $table->slug=Helper::slugGenarate($request->title);
        $table->date_time=$request->date_time;
        if ($request->hasFile('pdf_file')) {
            $image_path = './public/images/notice/'.$table->pdf_file;
            if (file_exists($image_path) && !empty($table->pdf_file))
            {
            unlink($image_path);
            }
            $image = $request->file('pdf_file');
            $new_file_name=Helper::imageConvert("pdf-",'notice/',$image);
            $table->pdf_file=$new_file_name;
            }
        $table->description=$request->description;
        $table->save();
        toast('You have successfully updated','success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function noticestatuschanger(Request $request)
    {
        $table=Notice::find($request->id);
        $table->status = ($request->status=="0") ? "1" : "0";
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }
}

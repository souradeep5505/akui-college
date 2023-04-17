<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageManage;
use Helper;
class PageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.page_manage.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.page_manage.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new PageManage;
        $table->page_name=$request->page_name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("page-",'page-image/',$image);
            $table->image=$new_file_name;
            }
        $table->description=$request->description;
        if ($request->hasFile('banner_img')) {
            $image = $request->file('banner_img');
            $new_file_name=Helper::imageConvert("banner-",'inner-banner/',$image);
            $table->banner_img=$new_file_name;
            }
        $table->status="0";
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
        $data = PageManage::find($id);
        return view("admin.pages.page_manage.edit",compact('data'));
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
        $table = PageManage::find($id);
        $table->page_name=$request->page_name;
        if ($request->hasFile('image')) {
            $image_path = './public/images/page-image/'.$table->image;
            if (file_exists($image_path) && !empty($table->image))
            {
            unlink($image_path);
            }
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("page-",'page-image/',$image);
            $table->image=$new_file_name;
            }
        $table->description=$request->description;
        if ($request->hasFile('banner_img')) {
            $image_path = './public/images/inner-banner/'.$table->banner_img;
            if (file_exists($image_path) && !empty($table->banner_img))
            {
            unlink($image_path);
            }
            $image = $request->file('banner_img');
            $new_file_name=Helper::imageConvert("banner-",'inner-banner/',$image);
            $table->banner_img=$new_file_name;
            }
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

    public function pagesstatuschanger(Request $request)
    {
        $table=PageManage::find($request->id);
        $table->status = ($request->status=="0") ? "1" : "0";
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }
}

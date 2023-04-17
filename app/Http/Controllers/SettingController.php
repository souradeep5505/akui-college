<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Helper;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Setting::all();
        return view("admin.pages.setting.edit",compact("datas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $table = Setting::find($id);
        $table->email=$request->email;
        $table->phone=$request->phone;
        $table->address=$request->address;
        $table->facebook=$request->facebook;
        $table->youtube=$request->youtube;
        $table->twitter=$request->twitter;
        $table->google_map=$request->google_map;
        $table->state=$request->state;
        $table->pin_code=$request->pin_code;
        if ($request->hasFile('logo')) {
            $image_path = './public/images/logo/'.$table->logo;
            if (file_exists($image_path) && !empty($table->logo))
            {
            unlink($image_path);
            }
            $image = $request->file('logo');
            $new_file_name=Helper::imageConvert("Logo-",'logo/',$image);
            $table->logo=$new_file_name;
            }
        $table->campus_area=$request->campus_area;
        $table->libary_books=$request->libary_books;
        $table->honours_student=$request->honours_student;
        $table->general_student=$request->general_student;
        $table->save();
        toast('You have successfully Updated','success');
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
        //
    }
}

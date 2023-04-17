<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use Helper;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.facility.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.facility.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new Facility;
        $table->facility_title=$request->facility_title;
        $table->facility_icon=$request->facility_icon;
        if ($request->hasFile('facility_img')) {
            $image = $request->file('facility_img');
            $new_file_name=Helper::imageConvert("Fac-",'facility/',$image);
            $table->facility_img=$new_file_name;
            }
        $table->description=$request->description;
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
        $data = Facility::find($id);
        return view("admin.pages.facility.edit",compact('data'));
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
        $table = Facility::find($id);
        $table->facility_title=$request->facility_title;
        $table->facility_icon=$request->facility_icon;
        if ($request->hasFile('facility_img')) {
            $image_path = './public/images/facility/'.$table->facility_img;
            if (file_exists($image_path) && !empty($table->facility_img))
            {
            unlink($image_path);
            }
            $image = $request->file('facility_img');
            $new_file_name=Helper::imageConvert("Dep-",'facility/',$image);
            $table->facility_img=$new_file_name;
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

}

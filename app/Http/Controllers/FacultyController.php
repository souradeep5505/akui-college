<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Helper;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.faculty.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.faculty.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new Faculty;
        $table->department_id=$request->department_id;
        $table->faculty_name=$request->faculty_name;
        $table->slug=Helper::slugGenarate($request->faculty_name);
        $table->designation=$request->designation;
        if ($request->hasFile('faculty_img')) {
            $image = $request->file('faculty_img');
            $new_file_name=Helper::imageConvert("faclty-",'faculty/',$image);
            $table->faculty_img=$new_file_name;
            }
        $table->faculty_qualification=$request->faculty_qualification;
        $table->date_of_join=$request->date_of_join;
        $table->email=$request->email;
        $table->phone=$request->phone;
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
        $data = Faculty::find($id);
        return view("admin.pages.faculty.edit",compact('data'));
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
        $table = Faculty::find($id);
        $table->department_id=$request->department_id;
        $table->faculty_name=$request->faculty_name;
        $table->slug=Helper::slugGenarate($request->faculty_name);
        $table->designation=$request->designation;
        if ($request->hasFile('faculty_img')) {
            $image_path = './public/images/faculty/'.$table->faculty_img;
            if (file_exists($image_path) && !empty($table->faculty_img))
            {
            unlink($image_path);
            }
            $image = $request->file('faculty_img');
            $new_file_name=Helper::imageConvert("faclty-",'faculty/',$image);
            $table->faculty_img=$new_file_name;
            }
        $table->faculty_qualification=$request->faculty_qualification;
        $table->date_of_join=$request->date_of_join;
        $table->email=$request->email;
        $table->phone=$request->phone;
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

    public function facultystatuschanger(Request $request)
    {
        $table=Faculty::find($request->id);
        $table->status = ($request->status=="0") ? "1" : "0";
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }
}

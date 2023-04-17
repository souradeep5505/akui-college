<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Helper;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.department.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.department.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new Department;
        $table->department_name=$request->department_name;
        $table->slug=Helper::slugGenarate($request->department_name);
        if ($request->hasFile('department_img')) {
            $image = $request->file('department_img');
            $new_file_name=Helper::imageConvert("Dep-",'department/',$image);
            $table->department_img=$new_file_name;
            }
        $table->department_description=$request->department_description;
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
        $data = Department::find($id);
        return view("admin.pages.department.edit",compact('data'));
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
        $table = Department::find($id);
        $table->department_name=$request->department_name;
        $table->slug=Helper::slugGenarate($request->department_name);
        if ($request->hasFile('department_img')) {
            $image_path = './public/images/department/'.$table->department_img;
            if (file_exists($image_path) && !empty($table->department_img))
            {
            unlink($image_path);
            }
            $image = $request->file('department_img');
            $new_file_name=Helper::imageConvert("Dep-",'department/',$image);
            $table->department_img=$new_file_name;
            }
        $table->department_description=$request->department_description;
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

    public function departmentstatuschanger(Request $request)
    {
        $table=Department::find($request->id);
        $table->status = ($request->status=="0") ? "1" : "0";
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }
}

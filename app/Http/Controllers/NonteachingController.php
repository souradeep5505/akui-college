<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NonTeaching;
use Helper;
class NonteachingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.non_teaching.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.non_teaching.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new NonTeaching;
        $table->name=$request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("non-",'stuff/non-teaching/',$image);
            $table->image=$new_file_name;
            }
        $table->designation=$request->designation;
        $table->qualification=$request->qualification;
        $table->date_of_join=$request->date_of_join;
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
        $data = NonTeaching::find($id);
        return view("admin.pages.non_teaching.edit",compact('data'));
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
        $table = NonTeaching::find($id);
        $table->name=$request->name;
        if ($request->hasFile('image')) {
            $image_path = './public/images/stuff/non-teaching/'.$table->image;
            if (file_exists($image_path) && !empty($table->image))
            {
            unlink($image_path);
            }
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("non-",'stuff/non-teaching/',$image);
            $table->image=$new_file_name;
            }
        $table->designation=$request->designation;
        $table->qualification=$request->qualification;
        $table->date_of_join=$request->date_of_join;
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

    public function nonteachingstatuschanger(Request $request)
    {
        $table=NonTeaching::find($request->id);
        $table->status = ($request->status=="0") ? "1" : "0";
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }
}

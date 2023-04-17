<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrincipleMsg;
use Helper;
class PrincipleMsgController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.principle_msg.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.principle_msg.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new PrincipleMsg;
        $table->name=$request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("principle-",'principle/',$image);
            $table->image=$new_file_name;
            }
        $table->qualification=$request->qualification;
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
        $data = PrincipleMsg::find($id);
        return view("admin.pages.principle_msg.edit",compact('data'));
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
        $table = PrincipleMsg::find($id);
        $table->name=$request->name;
        if ($request->hasFile('image')) {
            $image_path = './public/images/principle/'.$table->image;
            if (file_exists($image_path) && !empty($table->image))
            {
            unlink($image_path);
            }
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("principle-",'principle/',$image);
            $table->image=$new_file_name;
            }
        $table->qualification=$request->qualification;
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsEvent;
use Helper;

class NewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.news_event.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.news_event.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new NewsEvent;
        $table->title=$request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("News-",'news-event/',$image);
            $table->image=$new_file_name;
            }
        $table->event_date=$request->event_date;
        $table->description=$request->description;
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
        $data = NewsEvent::find($id);
        return view("admin.pages.news_event.edit",compact('data'));
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
        $table = NewsEvent::find($id);
        $table->title=$request->title;
        if ($request->hasFile('image')) {
            $image_path = './public/images/news-event/'.$table->image;
            if (file_exists($image_path) && !empty($table->image))
            {
            unlink($image_path);
            }
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("News-",'news-event/',$image);
            $table->image=$new_file_name;
            }
        $table->event_date=$request->event_date;
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

    public function eventstatuschanger(Request $request)
    {
        $table=NewsEvent::find($request->id);
        $table->status = ($request->status=="0") ? "1" : "0";
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }
}

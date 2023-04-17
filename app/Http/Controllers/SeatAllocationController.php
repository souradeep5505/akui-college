<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatAllocation;
use Helper;

class SeatAllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.seat_allocation.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.seat_allocation.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new SeatAllocation;
        $table->subject_id=$request->subject_id;
        $table->sub_title=$request->sub_title;
        $table->total_seat=$request->total_seat;
        $table->ur=$request->ur;
        $table->sc=$request->sc;
        $table->st=$request->st;
        $table->obc_a=$request->obc_a;
        $table->obc_b=$request->obc_b;
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
        $data = SeatAllocation::find($id);
        return view("admin.pages.seat_allocation.edit",compact('data'));
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
        $table = SeatAllocation::find($id);
        $table->subject_id=$request->subject_id;
        $table->sub_title=$request->sub_title;
        $table->total_seat=$request->total_seat;
        $table->ur=$request->ur;
        $table->sc=$request->sc;
        $table->st=$request->st;
        $table->obc_a=$request->obc_a;
        $table->obc_b=$request->obc_b;
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

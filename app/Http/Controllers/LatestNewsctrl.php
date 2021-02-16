<?php

namespace App\Http\Controllers;

use App\Http\Requests\LatestNewsRequest;
use App\LatestNews;
use Illuminate\Http\Request;
class LatestNewsctrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = LatestNews::all();

        return view('admin.latestnews.show',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.latestnews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LatestNewsRequest $request)
    {

        LatestNews::create($request->all());

        return redirect()->route('latestnews.index')->with('success','Latest News created successfully');
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
    public function edit(LatestNews $latestnews)
    {
        return view('admin.latestnews.edit',compact('latestnews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LatestNewsRequest $request, LatestNews $latestnews)
    {

        $latestnews->update($request->all());

        return redirect()->route('latestnews.index')->with('success','LatestNews Edited successfully');          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestNews $latestnews)
    {
        $latestnews->delete();

        return back();
    }
}

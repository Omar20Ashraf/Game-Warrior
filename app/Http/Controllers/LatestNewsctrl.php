<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LatestNews;
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
        $items=LatestNews::all();
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
    public function store(Request $request)
    {
        
        //validation
        $this->validate(request(),[
            'description'   =>'required',
            'tag_name'      =>'required',
            'tag_color'     =>'required'

        ]);

        $product=new LatestNews;

        $product->description=$request->input('description');
        $product->tag_name=$request->input('tag_name');
        $product->tag_color=$request->input('tag_color');
        $product->save();
        return redirect()->route('latestnews.index')->
               with('success','Product created successfully');
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
        $products=LatestNews::find($id);
        return view('admin.latestnews.edit',compact('products'));
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
        //validation
        $this->validate(request(),[
            'description'   =>'required',
            'tag_name'      =>'required',
            'tag_color'     =>'required'

        ]);

        $product=LatestNews::find($id);

        $product->description=$request->input('description');
        $product->tag_name=$request->input('tag_name');
        $product->tag_color=$request->input('tag_color');
        $product->save();

        return redirect()->route('latestnews.index')->with('success','Product Edited successfully');          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=LatestNews::find($id);
        $products->delete();
        return back();
    }
}

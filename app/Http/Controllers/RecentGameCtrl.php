<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecentGame;
class RecentGameCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recentgames=RecentGame::all();
        return view('admin.mainpage.recentgame.show',compact('recentgames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mainpage.recentgame.create'); 
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
        $formInput=$request->except('image');

        //validation
        $this->validate(request(),[
            'image_button'       =>'required',
            'image_button_class' =>'required',
            'title'              =>'required',
            'par'                =>'required',
            'image'              =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);
        //image upload
        $image=$request->image;

        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/recentgame',$imageName);
            $formInput['image']=$imageName;
        }

        RecentGame::create($formInput);
        return redirect()->route('admin.index')->
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
        $products=RecentGame::find($id);
        return view('admin.mainpage.recentgame.edit',compact('products'));
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
            'image_button'       =>'required',
            'image_button_class' =>'required',
            'title'              =>'required',
            'par'                =>'required',
            'image'              =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        $product=RecentGame::find($id);
        $product->title=$request->input('title');
        $product->par=$request->input('par');
        $product->image_button=$request->input('image_button');
        $product->image_button_class=$request->input('image_button_class');
        $product->save();

        return redirect()->route('admin.index')->with('success','Product Edited successfully');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=RecentGame::find($id);
        $products->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;

class FeatureCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features=Feature::all();
        return view('admin.mainpage.feature.show',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mainpage.feature.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');

        //validation
        $this->validate(request(),[
            'button' =>'required',
            'button_color' =>'required',
            'title'  =>'required',
            'par'  =>'required',
            'image' =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);
        //image upload
        $image=$request->image;

        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/features',$imageName);
            $formInput['image']=$imageName;
        }

        Feature::create($formInput);
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
        $products=Feature::find($id);
        return view('index-page.single-game-layout',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Feature::find($id);
        return view('admin.mainpage.feature.edit',compact('products'));
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
            'button'        =>'required',
            'button_color'  =>'required',
            'title'         =>'required',
            'par'           =>'required',
            'image'         =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        $product=Feature::find($id);
        $product->title=$request->input('title');
        $product->par=$request->input('par');
        $product->button=$request->input('button');
        $product->button_color=$request->input('button_color');
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
        $products=Feature::find($id);
        $products->delete();
        return back();
    }
}

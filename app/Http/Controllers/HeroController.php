<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Hero::all();
        return view('admin.mainpage.hero.show',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.mainpage.hero.create');
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
            'title' =>'required',
            'par'  =>'required',
            'image' =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);
        //image upload
        $image=$request->image;

        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/heroes',$imageName);
            $formInput['image']=$imageName;
        }
        Hero::create($formInput);

        return redirect()->route('admin.index')
               ->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Hero::find($id);
        return view('admin.mainpage.hero.edit',compact('products'));
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
            'title' =>'required',
            'par'  =>'required',
            'image' =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        $product=Hero::find($id);
        $product->title=$request->input('title');
        $product->par=$request->input('par');
        $product->save();

        return redirect()->route('admin.index')->with('success','Product created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Hero::find($id);
        $products->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogSidebar;
class BlogSideBarCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games=BlogSidebar::all();

        return view('admin.blogpage.sidebar.show',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogpage.sidebar.create');
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
            'name' =>'required',
            'par'   =>'required',
            'button'   =>'required',
            'button_color'   =>'required',
            'image' =>'required'

        ]);

        //upload image
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/blog/sidebar',$imageName);
            $formInput['image']=$imageName;
        }
        BlogSidebar::create($formInput);
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
        $products=BlogSidebar::find($id);
        return view('admin.blogpage.sidebar.edit',compact('products'));
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
            'name'          =>'required',
            'par'           =>'required',
            'button'        =>'required',
            'button_color'  =>'required',
            'image'         =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        $product=BlogSidebar::find($id);

        $product->name=$request->input('name');
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
        $products=BlogSidebar::find($id);
        $products->delete();
        return back(); 
    }
}

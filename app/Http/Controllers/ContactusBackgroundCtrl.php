<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactusBackground;
class ContactusBackgroundCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=ContactusBackground::all();
        return view('admin.contactpage.backgroundpage.show',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contactpage.backgroundpage.create');
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
            'name'          =>'required',
            'description'   =>'required',
            'image'         =>'required'

        ]);

        //upload image
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/contact/background',$imageName);
            $formInput['image']=$imageName;
        }
        ContactusBackground::create($formInput);
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
        $products=ContactusBackground::find($id);
        return view('admin.contactpage.backgroundpage.edit',
               compact('products'));
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
            'description'   =>'required',
            'image'         =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        $product=ContactusBackground::find($id);

        $product->name=$request->input('name');
        $product->description=$request->input('description');
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
        $products=ContactusBackground::find($id);
        $products->delete();
        return back();
    }
}

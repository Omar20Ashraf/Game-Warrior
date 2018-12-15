<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInfo;
class PersonalInfoCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=PersonalInfo::all();
        return view('admin.contactpage.personal.show',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contactpage.personal.create');
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
            'name'              =>'required',
            'description'       =>'required',
            'address'           =>'required',
            'phone'             =>'required',
            'email'             =>'required',
            'facebook'          =>'required',
            'twitter'           =>'required',
            'github'            =>'required',
            'linkedin'          =>'required'

        ]);

        PersonalInfo::create($formInput);
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
        $products=PersonalInfo::find($id);
        return view('admin.contactpage.personal.edit',compact('products'));
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
            'name'              =>'required',
            'description'       =>'required',
            'address'           =>'required',
            'phone'             =>'required',
            'email'             =>'required',
            'facebook'          =>'required',
            'twitter'           =>'required',
            'github'            =>'required',
            'linkedin'          =>'required'

        ]);

        $product=PersonalInfo::find($id);

        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->address=$request->input('address');
        $product->phone=$request->input('phone');
        $product->email=$request->input('email');
        $product->facebook=$request->input('facebook');
        $product->twitter=$request->input('twitter');
        $product->github=$request->input('github');
        $product->linkedin=$request->input('linkedin');
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
        $products=PersonalInfo::find($id);
        $products->delete();
        return back();
    }
}

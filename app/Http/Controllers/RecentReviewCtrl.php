<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecentReview;
class RecentReviewCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recentreviews=RecentReview::all();
        return view('admin.mainpage.recentreview.show',compact('recentreviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.mainpage.recentreview.create');
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
            'title'           =>'required',
            'par'             =>'required',
            'evalution'       =>'required',
            'evalution_color' =>'required',
            'image'           =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        //image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/recentreview',$imageName);
            $formInput['image']=$imageName;
        }
        RecentReview::create($formInput);
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
        $products=RecentReview::find($id);
        return view('admin.mainpage.recentreview.edit',compact('products'));
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
            'title'           =>'required',
            'par'             =>'required',
            'evalution'       =>'required',
            'evalution_color' =>'required',
            'image'           =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        $product=RecentReview::find($id);

        $product->title=$request->input('title');
        $product->par=$request->input('par');
        $product->evalution=$request->input('evalution');
        $product->evalution_color=$request->input('evalution_color');
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
        $products=RecentReview::find($id);
        $products->delete();
        return back();
    }
}

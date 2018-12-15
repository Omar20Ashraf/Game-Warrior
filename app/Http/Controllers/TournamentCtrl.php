<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournaments;
class TournamentCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments=Tournaments::all();
        return view('admin.mainpage.tournament.show',compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.mainpage.tournament.create');
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
            'title'         =>'required',
            'beggins'       =>'required',
            'ends'          =>'required',
            'participants'  =>'required',
            'author'         =>'required',
            'prizes'         =>'required',
            'image'         =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        //image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/tournaments',$imageName);
            $formInput['image']=$imageName;
        }
        Tournaments::create($formInput);
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
        $products=Tournaments::find($id);
        return view('admin.mainpage.tournament.edit',compact('products'));
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
            'title'         =>'required',
            'beggins'       =>'required',
            'ends'          =>'required',
            'participants'  =>'required',
            'author'         =>'required',
            'prizes'         =>'required',
            'image'         =>'image|mimes:jpg,png,jpeg|max:10000'

        ]);

        $product=Tournaments::find($id);

        $product->title=$request->input('title');
        $product->beggins=$request->input('beggins');
        $product->ends=$request->input('ends');
        $product->participants=$request->input('participants');
        $product->author=$request->input('author');
        $product->prizes=$request->input('prizes');
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
        $products=Tournaments::find($id);
        $products->delete();
        return back();
    }
}

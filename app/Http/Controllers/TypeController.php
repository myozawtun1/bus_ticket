<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=Type::all();
        return view('backend.types.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.types.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
       $request->validate([
            "name"=>'required|min:5|max:191',
            "seat"=>'required',
            "price"=>'required'
            
        ]);
        $type=new Type;
        $type->name=request('name');
        $type->seat=request('seat');
        $type->price=request('price');
       
    
        $type->save();
        return redirect()->route('types.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type=Type::find($id);
        return view('backend.types.show',compact('type'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type=Type::find($id);
        return view('backend.types.edit',compact('type'));
        
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
         $request->validate([
            "name"=>'required|min:3|max:191',
            "seat"=>'required',
            "price"=>'required',
            ""
            
        ]);
        $type=Type::find($id);
        $type->name=request('name');
        $type->seat=request('seat');
        $type->price=request('price');
       
    
        $type->save();
        return redirect()->route('types.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=Type::find($id);
        $type->delete();
        return redirect()->route('types.index');
    }
    
}

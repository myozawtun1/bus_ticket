<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Type;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $routes=Route::all();
        return view('backend.routes.index',compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $types=Type::all();
        return view('backend.routes.create',compact('types'));
        
        
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
            "startroute"=>'required',
            "endroute"=>'required',
            "time"=>'required',
            "type"=>'required'
              ]);
        $route=new Route;
        $route->startroute=request('startroute');
        $route->endroute=request('endroute');
        $route->time=request('time');
        $route->type_id=request('type');


        $route->save();
        return redirect()->route('routes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $route=Route::findOrFail($id);

        return view('backend.routes.show', compact('route'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route=Route::find($id);
        $types=Type::all();
        return view('backend.routes.edit',compact('route','types'));
        
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
            "startroute"=>'required',
            "endroute"=>'required',
            "time"=>'required'
              ]);
        $route=Route::find($id);
        $route->startroute=request('startroute');
        $route->endroute=request('endroute');
        $route->time=request('time');

        $route->save();
        return redirect()->route('routes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route=Route::find($id);
        $route->delete();
        return redirect()->route('routes.index');
    }
}

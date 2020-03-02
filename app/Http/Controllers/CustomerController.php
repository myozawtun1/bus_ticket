<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customers=Customer::all();

        return view('backend.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $customers=Customer::all();

        return view('backend.customers.create',compact('customers'));
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
            // "avatar"=>'required|mimes:jpeg,jpg,png',
            "email"=>'required',
            "phone"=>'required',
            "gender" => "required|min:4|max:6",

            "address"=>'required|min:5|max:191'

        ]);
         $customer=new Customer;
        // $mentor->user_id=$user->id;
    
        // $mentor->user_id=request('user_id');
        
        // $mentor->avatar=$path;
        $customer->name=request('name');        
        $customer->phone=request('phone');
        $customer->email=request('email');
        // $mentor->course_id =request('courseid');
        // $mentor->degree_id=request('degreeid');
        $customer->gender = request('gender');
        $customer->address=request('address');


        $customer->save();

        //Return redirect//5
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $customer=Customer::findOrFail($id);

        return view('backend.customers.show', compact('customer'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $customer=Customer::find($id);
        return view('backend.customers.edit',compact('customer'));
        
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
            "name"=>'required|min:5|max:191',
            // "avatar"=>'required|mimes:jpeg,jpg,png',
            "email"=>'required',
            "phone"=>'required',
            // "gender" => "required|min:4|max:6",

            "address"=>'required|min:5|max:191'

        ]);
         $customer=Customer::find($id);
        // $mentor->user_id=$user->id;
    
        // $mentor->user_id=request('user_id');
        
        // $mentor->avatar=$path;
        $customer->name=request('name');        
        $customer->phone=request('phone');
        $customer->email=request('email');
        // $mentor->course_id =request('courseid');
        // $mentor->degree_id=request('degreeid');
        // $customer->gender = request('gender');
        $customer->address=request('address');


        $customer->save();

        //Return redirect//5
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer=Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Customer;
use App\Route;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bookings=Booking::all();
        return view('backend.bookings.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes=Route::all();
        $customers=Customer::all();
        return view('backend.bookings.create',compact('routes','customers'));
        
        
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
            "seatno"=>'required',
            "date"=>'required',
            "status"=>'required',
            // "startroute"=>'required',
            "route"=>'required',
            "customer"=>'required',
            "totalprice"=>'required'
              ]);
        $booking=new Booking;
        $booking->seatno=request('seatno');
        $booking->date=request('date');
        $booking->status=request('status');
        $booking->route_id=request('route');
        // $booking->route_id=request('endroute');
        $booking->customer_id=request('customer');
        $booking->totalprice=request('totalprice');



        $booking->save();
        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking=Booking::findOrFail($id);

        return view('backend.bookings.show', compact('booking'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $booking=Booking::find($id);
        $routes=Route::all();
        $customers=Customer::all();
        return view('backend.bookings.edit',compact('booking','routes','customers'));
           
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
            "seatno"=>'required',
            "date"=>'required',
            "status"=>'required',
            // "startroute"=>'required',
            "route"=>'required',
            "customer"=>'required',
            "totalprice"=>'required'
              ]);
        $booking=Booking::find($id);
        $booking->seatno=request('seatno');
        $booking->date=request('date');
        $booking->status=request('status');
        $booking->route_id=request('route');
        // $booking->route_id=request('endroute');
        $booking->customer_id=request('customer');
        $booking->totalprice=request('totalprice');



        $booking->save();
        return redirect()->route('bookings.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking=Booking::find($id);
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}

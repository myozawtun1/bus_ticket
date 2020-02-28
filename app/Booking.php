<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['route_id','seatno','date','status','customer_id','totalprice'];
    public function route($value='')
    {
    	return $this->belongsTo('App\Route');
    	
    }
    public function customer($value='')
    {
    	return $this->belongsTo('App\Customer');
    	
    }
    
}

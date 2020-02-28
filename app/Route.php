<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable=['type_id','startroute','endroute','time'];

    public function type($value='')
    {
    	return $this->belongsTo('App\Type');
    	
    }
    
}

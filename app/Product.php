<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	public function stores()
	{
		return $this->belongsTo('App\Store');
	}

	public function reviews()
	{	
		return $this->has('App\Review');
	}
    
}

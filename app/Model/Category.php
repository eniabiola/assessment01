<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
    	return $this->hasMany('App\Model\Product');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function brand()
    {
    	return $this->hasMany('App\Brand', 'category_id', 'id');
    }

    public function product()
    {
    	return $this->hasManyThrough(
    		'App\Product',
    		'App\Brand',
    		'category_id',
    		'brand_id',
    		'id',
    		'id');
    }
}

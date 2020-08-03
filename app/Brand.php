<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function product_brand(){
        return $this->hasMany('App\Product', 'brand_id','id');
    }
}

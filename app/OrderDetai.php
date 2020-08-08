<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetai extends Model
{
    //
    public $timestamps = false;
    public function order(){
        return $this->belongsTo('App\Order', 'order_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public function account(){
        return $this->belongsTo('App\Account', 'account_id','id');
    }
}

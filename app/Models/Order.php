<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';


    public function orderitem()
    {
        return $this->hasMany('App\Models\OrderItem');
    }

    public function orderpayment()
    {
        return $this->hasMany('App\Models\OrderPayment');
    }




}

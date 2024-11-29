<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['id_customer', 'order_code', 'order_date', 'order_end_date', 'order_status', 'total_price'];
    public function customer()
    {
        return $this->belongsTo(customer::class, 'id_customer', 'id');
    }
}

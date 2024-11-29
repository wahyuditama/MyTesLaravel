<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $fillable = ['id_order', 'id_service', 'qty', 'price_service', 'subtotal'];
    protected $table = "orders_detail";

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id');
    }

    public function paket()
    {
        return $this->belongsTo(Order::class, 'ide_service', 'id');
    }
}

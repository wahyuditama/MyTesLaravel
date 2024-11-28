<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = ['service_name', 'price', 'description'];
    protected $table = 'type_of_services';
}

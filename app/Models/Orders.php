<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'customer_name',
        'menu_name',
        'total',
        'status',
    ];
}

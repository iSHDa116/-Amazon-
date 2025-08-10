<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'prodauc_name',
        'product_url',
        'price',
        'status',
        'purchased_at',
        'arrived_at',
        'paid_at',
    ];
}

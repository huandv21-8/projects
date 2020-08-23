<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id_order_detail';
    protected $fillable = [
        'id_product',
        'id_order',
        'amount',
		'price',
        'total_money'
	];
}

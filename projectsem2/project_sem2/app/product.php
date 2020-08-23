<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'id_user',
        'id_category',
        'name_product',
		'Inventory_number',
        'Inventory_sold',
        'describe',
        'price',
        'image',
        'created_at',
        'updated_at'
	];
}

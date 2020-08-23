<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id_order';
    protected $fillable = [
        'id_order',
        'id_employee',
		'id_customer',
        'total_money',
        'status','wards','district','city'
	];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    protected $fillable = [
        'id_user',
        'name_category',
		'created_at',
        'updated_at',
        
	];
}

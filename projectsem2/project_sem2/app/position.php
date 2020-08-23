<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    protected $table = 'position';
    protected $primaryKey = 'id_position';
    protected $fillable = [
        'id_user',
        'id_roles',
		'created_at',
        'updated_at',
       
	];
}

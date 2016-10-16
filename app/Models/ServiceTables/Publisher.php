<?php

namespace App\Models\ServiceTables;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
	protected $connection = 'service_db';
    protected $casts = [
        'user_id_creator'=>'integer',
        'user_id_modifier'=>'integer',
        'record_id'=>'integer',
        'id'=>'integer'
    ];
}

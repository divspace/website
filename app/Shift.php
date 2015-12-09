<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model {

    protected $table = 'shifts';

    protected $fillable = [
        'user_id',
        'break',
        'start_time',
        'end_time'
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'break' => 'float',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';

    protected $fillable = [
        'name',
        'role',
        'email',
        'phone'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function setPhoneAttribute($value) {
        $this->attributes['phone'] = preg_replace('/[^0-9]+/', '', $value);
    }

}

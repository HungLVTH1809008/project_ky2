<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $table='user1';
    protected $primaryKey ='user1_id';
    protected  $fillable =[
        'user1_name',
        'email',
        'level',
        'password',
        'active',

    ];
}

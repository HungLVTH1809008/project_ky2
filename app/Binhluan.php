<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    protected $table='binhluan';
    protected $primaryKey ='binhluan_id';
    protected  $fillable =[
        'usersid',
        'tintuc_id',
        'noidung',
        'active',

    ];
}

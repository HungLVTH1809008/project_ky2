<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chiendich extends Model
{
    protected $table='chiendich';
    protected $primaryKey ='chiendich_id';
    protected  $fillable =[
        'chiendich_name',
        'sukien_id',
        'noidung',
        'hinh',
        'ds_ungho',
        'ngayhethan',
        'active',

    ];
}

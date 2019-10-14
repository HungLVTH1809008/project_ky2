<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ungho extends Model
{
    protected $table='ungho';
    protected $primaryKey ='ungho_id';
    protected  $fillable =[
        'ungho_name',
        'chiendich_id',
        'sotien',
        'loinhan',
        'hoten',
        'dienthoai',
        'email',
        'active',

    ];
}

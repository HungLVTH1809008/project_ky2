<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taochiendich extends Model
{
    protected $table='taochiendich';
    protected $primaryKey ='chiendich_id';
    protected  $fillable =[
        'chiendich_name',
        'mota',
        'sotien',
        'ngayhethan',
        'hinh',
        'tentochuc',
        'active',

    ];
}

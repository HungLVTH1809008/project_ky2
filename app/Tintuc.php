<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    protected $table='tintuc';
    protected $primaryKey ='tintuc_id';
    protected  $fillable =[
        'tintuc_name',
        'chiendich_id',
        'tomtat',
        'noidung',
        'hinh',
        'noibat',
        'soluotxem',
        'active',

    ];
}

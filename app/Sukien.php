<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sukien extends Model
{
    protected $table= 'sukien';
    protected $primaryKey = 'sukien_id';
    protected  $fillable =[
        'sukien_name',
        'noidung',
        'sanpham',
        'thuonghieu',
        'thoigian',
        'active',
    ];
}

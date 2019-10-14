<?php

namespace App\Http\Controllers;

use App\Sukien;
use Illuminate\Http\Request;

class PhantrangController extends Controller
{
    public function getSukien()
    {
        $sukien = Sukien::paginate(5);
//        dd($sukien);
        return view('admin.sukien.danhsach',['sukien'=>$sukien]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Chiendich;
use App\Sukien;
use Illuminate\Http\Request;

class ChiendichController extends Controller
{
    public function Danhsach()
    {
        $chiendichs = Chiendich::all();
        return view("admin.chiendich.danhsach", compact("chiendichs"));
    }


    public function Them()
    {
        $chiendichs = Chiendich::orderby("chiendich_id","ASC")->get();
        $sukiens= Sukien::orderby("sukien_id","ASC")->get();
//        dd($sukiens);
        return view("admin.chiendich.them", compact("sukiens", "chiendichs"));

    }
    public function Luuchiendich(Request $request)
    {
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "chiendich_id" => "required|numeric",
            "chiendich_name" => "required|string|unique:Chiendich",
            "noidung" => "required|string",
            "hinh" => "required|string",
            "ds_ungho" => "required|string",
            "ngayhethan" => "required|numeric"

        ];
        $this->validate($request, $messages, $rules);
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            //dd($request->all());
            Chiendich::create([
                "chiendich_name" => $request->get("chiendich_name"),
                "noidung" => $request->get("noidung"),
                "hinh" => $request->get("hinh"),
                "ds_ungho" => $request->get("ds_ungho"),
                "ngayhethan" => $request->get("ngayhethan"),
                "sukien_id" => $request->get("sukien_id"),
            ])->save();

        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/admin/chiendich/them")->with('thongbao','them thanh cong');
    }

}

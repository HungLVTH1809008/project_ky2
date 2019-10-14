<?php

namespace App\Http\Controllers;

use App\Sukien;
use Illuminate\Http\Request;

class SukienController extends Controller
{
    public function Danhsach()
    {
        $sukien = Sukien::all();
        return view("admin.sukien.danhsach", ['sukien'=>$sukien]);
    }

    public function Them()
    {
        $sukiens = Sukien::all();
        return view("admin.sukien.them", compact("sukiens"));

    }
    public function Luusukien(Request $request)
    {
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "sukien_id" => "required|numeric",
            "sukien_name" => "required|string|unique:Sukien",
            "noidung" => "required|string",
            "sanpham" => "required|string",
            "thuonghieu" => "required|string",
            "thoigian" => "required|numeric"

        ];
        $this->validate($request, $messages, $rules);
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            //dd($request->all());
            Sukien::create([
                "sukien_name" => $request->get("sukien_name"),
                "noidung" => $request->get("noidung"),
                "sanpham" => $request->get("sanpham"),
                "thuonghieu" => $request->get("thuonghieu"),
                "thoigian" => $request->get("thoigian"),
            ])->save();

        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/admin/sukien/them")->with('thongbao','thêm thành công');
    }

    //xoa du lieu
    function Xoa($id)
    {
        $sukien= Sukien::find($id);
        try {

            $sukien->active=0;
            $sukien->save();

        } catch (Exception $e) {

            //die($e->getMessage());
            return redirect("/admin/sukien/danhsach")->withErrors(["fail"=>$e->getMessage()]);
        }
        return redirect("/admin/sukien/danhsach")->with("success", "Xóa thành công !");
    }
    //sữa sự kiện

   public function getSua($sukien_id){

       $sukien =Sukien::find($sukien_id);
       return view("admin.sukien.sua", ['sukien'=>$sukien]);

    }




    // luu lai thong tin da sua
  public  function postSua(Request $request)
    {
        $sukien = Sukien::find($request -> get("sukien_id"));
//        $messages = [
//            "required" => "vui lòng nhập vào thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Nhập vào một số",
//            "min" => "giá trị tối thiểu 0",
//            "max" => "tối đa 255 ký tự",
//            "unique" => "Đã tồn tại",
//        ];
//
//        $rules = [
//            "sukien_id" => "required|numeric",
//            "sukien_name" => "required|string|unique:Sukien",
//            "noidung" => "required|string",
//            "sanpham" => "required|string",
//            "thuonghieu" => "required|string",
//            "thoigian" => "required|numeric"
//
//        ];
//        // dd($request->all());
//
//        $this -> validate($request , $rules , $messages);

        try{
            $sukien -> update([
                "sukien_name" => $request->get("sukien_name"),
                "noidung" => $request->get("noidung"),
                "sanpham" => $request->get("sanpham"),
                "thuonghieu" => $request->get("thuonghieu"),
                "thoigian" => $request->get("thoigian"),
            ]);
        }
        catch(\Exception $e){
            die( $e -> getMessage());
        }

        return redirect("/admin/sukien/danhsach")->with('thongbao','Sửa thành công');;
    }

    public function index(){
        return view("admin.layout.index");
    }



}

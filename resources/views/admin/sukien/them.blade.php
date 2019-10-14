
@extends('admin.layout.index')

@section('main content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Tables</h2>
                <div class="panel-body widget-shadow">
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <form action="{{url("/admin/sukien/them")}}" method="post">
                        @csrf
                        <h1>thêm sư kiện</h1>
                        <div class="form-group">
                            <label> sukien_name</label>
                            <input type="text" class="form-control" name="sukien_name" value="{{old("sukien_name")}}" placeholder="  sukien">
                            @if($errors->has("sukien_name"))
                                <p class="error" style="color: red">{{$errors->first("sukien_name")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>noidung</label>
                            <input type="text" class="form-control" name="noidung" value="{{old("noidung")}}" placeholder=" noidung">
                            @if($errors->has("noidung"))
                                <p class="error" style="color: red">{{$errors->first("noidung")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>sanpham</label>
                            <input type="text" class="form-control" name="sanpham" value="{{old("sanpham")}}" placeholder=" sanpham">
                            @if($errors->has("sanpham"))
                                <p class="error" style="color: red">{{$errors->first("sanpham")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>thuonghieu</label>
                            <input type="text" class="form-control" name="thuonghieu" value="{{old("thuonghieu")}}" placeholder=" thuonghieu">
                            @if($errors->has("thuonghieu"))
                                <p class="error" style="color: red">{{$errors->first("thuonghieu")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>thoigian</label>
                            <input type="text" class="form-control" name="thoigian" value="{{old("thoigian")}}" placeholder=" thoigian">
                            @if($errors->has("thoigian"))
                                <p class="error" style="color: red">{{$errors->first("thoigian")}}</p>
                            @endif
                        </div>


                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-outline-danger">Submit</button>
                        </div>
                    </form>
                    <!-- phan trang-->

                    <!-- phan trang -->
                </div>
            </div>
        </div>
    </div>
@endsection


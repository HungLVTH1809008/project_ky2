@extends('admin.layout.index')

@section('main content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Tables</h2>
                <div class="panel-body widget-shadow">
                    <form action="{{url("/admin/sukien/sua")}}" method="post">
                        @csrf
                        <h1>Sự Kiện
                            <small>{{$sukien->sukien_name}}</small>
                        </h1>

                        <input type="hidden" name="sukien_id"  value="{{ $sukien->sukien_id }}">
                        <div class="form-group">
                            <label for="">sukien_name</label>
                            <input type="text" name="sukien_name" id="" class="form-control" value="{{ $sukien->sukien_name }}">
                            @if($errors -> has("sukien_name"))
                                <p class="error">{{ $errors -> first("sukien_name") }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">noidung</label>
                            <input type="text" name="noidung" id="" class="form-control" value="{{ $sukien->noidung }}">
                            @if($errors -> has("noidung"))
                                <p class="error">{{ $errors -> first("noidung") }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">sanpham</label>
                            <input type="text" name="sanpham" id="" class="form-control" value="{{ $sukien->sanpham}}">
                            @if($errors -> has("sanpham"))
                                <p class="error">{{ $errors -> first("sanpham") }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">thuonghieu</label>
                            <input type="text" name="thuonghieu" id="" class="form-control" value="{{ $sukien->thuonghieu}}">
                            @if($errors -> has("thuonghieu"))
                                <p class="error">{{ $errors -> first("thuonghieu") }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">thoigian</label>
                            <input type="text" name="thoigian" id="" class="form-control" value="{{ $sukien->thoigian}}">
                            @if($errors -> has("thoigian"))
                                <p class="error">{{ $errors -> first("thoigian") }}</p>
                            @endif
                        </div>

                        <button class="btn btn-outline-danger" type="submit">Sửa sự kiện</button>
                    </form>
                    <!-- phan trang-->

                    <!-- phan trang -->
                </div>
            </div>
        </div>
    </div>
@endsection



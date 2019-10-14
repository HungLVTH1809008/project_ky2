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
                        <form action="{{url("/admin/chiendich/them")}}" method="post">
                            @csrf
                            <h1>Thêm Chiến dịch</h1>
                            <div class="form-group">
                                <label> chiendich_name</label>
                                <input type="text" class="form-control" name="chiendich_name" value="{{old("chiendich_name")}}" placeholder="chiendich_name">
                                @if($errors->has("chiendich_name"))
                                    <p class="error" style="color: red">{{$errors->first("chiendich_name")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>noidung</label>
                                <input type="text" class="form-control" name="noidung" value="{{old("noidung")}}" placeholder="noidung">
                                @if($errors->has("noidung"))
                                    <p class="error" style="color: red">{{$errors->first("noidung")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>hinh</label>
                                <input type="text" class="form-control" name="hinh" value="{{old("hinh")}}" placeholder="hinh">
                                @if($errors->has("hinh"))
                                    <p class="error" style="color: red">{{$errors->first("hinh")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>ds_ungho</label>
                                <input type="text" class="form-control" name="ds_ungho" value="{{old("ds_ungho")}}" placeholder="ds_ungho">
                                @if($errors->has("ds_ungho"))
                                    <p class="error" style="color: red">{{$errors->first("ds_ungho")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>ngayhethan</label>
                                <input type="text" class="form-control" name="ngayhethan" value="{{old("ngayhethan")}}" placeholder="ngayhethan">
                                @if($errors->has("ngayhethan"))
                                    <p class="error" style="color: red">{{$errors->first("ngayhethan")}}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">sukien_id</label>
                                <select class="form-control" name="sukien_id" id="">
                                    @foreach ($sukiens as $sk)
                                        <option value="{{ $sk -> sukien_id }}">
                                            {{ $sk-> sukien_id }} . {{ $sk -> sukien_name }}
                                        </option>
                                    @endforeach
                                </select>
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


@extends('admin.layout.index')

@section('main content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Tables</h2>
                <div class="panel-body widget-shadow">
                    <a href="{{url("/admin/chiendich/them")}}" class="btn btn-primary">Thêm Chiến Dịch</a>
                    <h4>Chiến dịch:
                        <small>danh sach</small>
                    </h4>
                    @if(Session::has("success"))
                        <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
                    @endif

                    <table class="table">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Sukien_id</th>
                        <th>Noidung</th>
                        <th>Hinh</th>
                        <th>ds_ungho</th>
                        <th>ngayhethan</th>
                        <th>active</th>
                        <th>Action </th>
                        </thead>

                        <tbody>

                        @foreach($chiendichs as $cd)
                            <tr>
                                <td >{{$cd->chiendich_id}}</td>
                                <td>{{$cd->chiendich_name}}</td>
                                <td>{{$cd->sukien_id}}</td>
                                <td>{{$cd->noidung}}</td>
                                <td>{{$cd->hinh}}</td>
                                <td>{{$cd->ds_ungho}}</td>
                                <td>{{$cd->ngayhethan}}</td>
                                <td>{{$cd->active}}</td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="/admin/chiendich/xoa">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="/admin/chiendich/sua/{{$cd->chiendich_id}}">Edit</a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    <!-- phan trang-->

                    <!-- phan trang -->
                </div>
            </div>
        </div>
    </div>
@endsection

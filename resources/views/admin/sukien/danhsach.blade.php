@extends('admin.layout.index')

@section('main content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Tables</h2>
                <div class="panel-body widget-shadow">
                    <a href="{{url("/admin/sukien/them")}}" class="btn btn-primary">Thêm Sụ kiện</a>
                    <h4>Sự kiện:
                        <small>danh sách</small>
                    </h4>

                    <table class="table">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Noidung</th>
                        <th>Sanpham</th>
                        <th>Thuonghieu</th>
                        <th>thoigian</th>
                        <th>active</th>
                        <th>Action </th>
                        </thead>

                        <tbody>

                        @foreach($sukien as $sk)
                            <tr>
                                <td >{{$sk->sukien_id}}</td>
                                <td>{{$sk->sukien_name}}</td>
                                <td>{{$sk->noidung}}</td>
                                <td>{{$sk->sanpham}}</td>
                                <td>{{$sk->thuonghieu}}</td>
                                <td>{{$sk->thoigian}}</td>
                                <td>{{$sk->active}}</td>
{{--                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/sukien/xoa">Delete</a></td>--}}
{{--                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="/admin/sukien/sua/{{$sk->sukien_id}}">Edit</a></td>--}}
                                <td>
                                    <i class="fa fa-pencil fa-fw"></i><a class="btn btn-outline-danger" href="sua/{{$sk->sukien_id}}">edit</a>
                                </td>
                                <td> <i class="fa fa-trash-o fa-fw"></i><a class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa??')"
                                        href="xoa/<?php echo $sk->sukien_id; ?>">delete</a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    <!-- phan trang-->
                {{ $sukien->links() }}
                    <!-- phan trang -->
                </div>
             </div>
         </div>
    </div>
@endsection

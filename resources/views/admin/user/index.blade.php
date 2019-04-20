@extends('admin.layouts.app')
@section('title')
    Quản lý tài khoản
@endsection
@section('header-icon')
    <i class="notika-icon notika-form"></i>
@endsection
@section('header-element')
    <div class="cmp-tb-hd bcs-hd">
        <h2>Danh sách tài khoản</h2>
    </div>
@endsection
@section('content')
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="data-table-list">
                        <a href="{{route('user.addHtml')}}" class="btn btn-default btn-add-new">
                            Thêm mới
                        </a>
                        <table class="table table-striped table-hover table-bordered" id="data-table-user">
                            <thead>
                            <tr role="row">
                                <th>STT</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Tên đầy đủ</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $stt = 0; ?>
                            @foreach($data as $k => $row)
                                <?php $stt++;?>
                                <tr class="user-{{$row->id}}">
                                    <td><?php echo $stt?></td>
                                    <td>{{$row->username}}</td>
                                    <td class="content">{{$row->email}}</td>
                                    <td>{{$row->fullname}}</td>
                                    <td>{{Carbon\Carbon::parse($row->created_at)->format('Y-m-d H:i:s')}}</td>
                                    <td>{{Carbon\Carbon::parse($row->updated_at)->format('Y-m-d H:i:s')}}</td>
                                    <td class="action">
                                        <a href="{{route('user.editHtml',['id'=>$row->id])}}"
                                           class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="javascript:deleteElement('{{$row->id}}','user/delete','{{$row->username}}')"
                                           class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i>
                                            <span class="tooltiptext_delete">Xóa</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /Page Body -->
@endsection
@section('js')
    <script type="text/javascript">
        (function ($) {
            "use strict";

            $(document).ready(function () {
                $('#data-table-user').DataTable({
                    "language": {
                        "lengthMenu": "Hiển thị _MENU_ bản ghi",
                        "info": "Hiển thị _START_ đến _END_ trên tổng số _TOTAL_ bản ghi"
                    }
                });
            });

        })(jQuery);

        /*
*  Function xóa đối tượng.
* */
        function deleteElement(id, url, title) {
            var r = confirm('Bạn có chắc chắn muốn xóa không ' + title);
            if (r === true) {
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        id: id
                    },
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data.success === true) {
                            setTimeout(function () {
                                window.location.reload()
                            }, 1000);
                        } else {
                            alertify.error(data.message);
                        }
                    },
                    error: function (data) {
                        alertify.error(data.responseJSON.message)
                    }
                })
            }
        }
    </script>
@endsection

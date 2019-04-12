<div class="data-table-list">

    <div class="table-responsive">
        <table id="data-table-basic" class="table table-striped">
            <thead>
            <tr>
                <th>Stt | ID</th>
                <th>Tên</th>
                <th>Danh mục cha</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Đường dẫn ảnh</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php $count = 1; ?>
            @foreach($listCategory as $k => $row)
                <tr>
                    <td style="text-align: center">{{$count++}} <hr> {{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->parent_id}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->status}}</td>
                    <td><img src="{{$row->image}}" style="width: 50px; height: 40px;" ></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
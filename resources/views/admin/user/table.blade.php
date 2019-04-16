<form action="{{route('category.index')}}" method="GET">
    <div class="inbox-text-list sm-res-mg-t-30">
        <div class="form-group">
            <div class="nk-int-st search-input search-overt">
                <input type="text" class="form-control" name="s" value="{{$search['s']}}" placeholder="{{trans('category.search')}}..."/>
                <button  class="btn search-ib">{{trans('category.search')}}</button>
            </div>
        </div>
        <div class="inbox-btn-st-ls btn-toolbar">
            <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                <button name="delete" value="1" class="btn btn-default btn-sm"><i class="notika-icon notika-trash"></i></button>
                <button name="active" value="1" class="btn btn-default btn-sm"><i class="notika-icon notika-checked"></i></button>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table table-hover table-inbox">
                <tbody>

                <?php $count = 1; ?>
                @foreach($listCategory as $k => $row)
                    <tr class="{{$row->status === CommonEnum::active ? 'unread':'active'}}">
                        <td class="">
                            <label><input name="checkbox[]" value="{{$row->id}}" type="checkbox" class="i-checks"></label>
                        </td>
                        <td><img src="{{$row->image}}" class="thumb-img" style="width: 50px; height: 40px;"></td>
                        <td style="display:block;" ><strong>{{$row->name}}</strong><br/>
                            <div class="action">
                                <span class="edit">
                                    <a href="{{route('category.show',['category'=>$row->id])}}" aria-label="{{trans('category.edit')}} {{$row->name}}">{{trans('category.edit')}}</a> | </span>
                                <span class="delete"><a href="edit-tags.php?action=delete&amp;taxonomy=category&amp;tag_ID=3&amp;_wpnonce=8ef19f8bb8" class="delete-tag aria-button-if-js" aria-label="Xóa “Business &amp; Management”" role="button">Xóa</a> | </span><span class="view"><a href="http://localhost/wordpress/category/business-management/" aria-label="Xem lưu trữ “Business &amp; Management”">Xem</a></span></div>
                        </td>
                        <td>{{$row->parent_id === \App\Enums\CommonEnum::cat_parent ? "":$listCatname[$row->parent_id]}}</td>
                        <td>{{$row->description}}</td>
                        <td class="material-design-btn">
                            @if($row->status === \App\Enums\CommonEnum::active)
                                <span class="label label-success">{{trans('category.active')}}</span>
                            @else
                                <span class="label label-danger">{{trans('category.deactive')}}</span>
                            @endif
                        </td>

                        <td></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            <div class="pagination-inbox">
                {{ $listCategory->links() }}

            </div>
        </div>
    </div>
</form>
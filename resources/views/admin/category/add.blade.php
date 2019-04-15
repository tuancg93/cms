<div class="form-example-wrap">
    <form action="{{route('category.store')}}" id="add-category" method="POST">
        @csrf
        <div class="cmp-tb-hd">
            <h2>Tạo mới danh mục</h2>

        </div>
        <div class="form-example-int">
            <div class="form-group">
                <label>Tên nhóm</label>
                <input type="text" required data-parsley-required-message="{{ trans('category.name') }}" class="form-control input-sm" name="name" placeholder="Tên nhóm">
            </div>
        </div>
        {{--$table->bigInteger('parent_id')->comment("Mã id cha")->default(0);
        $table->string('description',255)->comment("Mô tả danh mục");
        $table->string('lang',10)->comment("Ngôn ngữ")->default('vi');
        $table->integer("status")->comment("Trạng thái")->default(0);
        $table->string("image")->comment("Đường dẫn ảnh")->default(0);--}}
        <div class="form-example-int mg-t-15">
            <div class="form-group">
                <label>Danh mục cha</label>

                <div class="chosen-select-act">
                    <select class="chosen" name="parent_id" data-placeholder="Chọn thư mục cha...">
                        <option value="0">Thư mục cha</option>
                        @foreach($listParent as $k => $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>

                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-example-int">
            <div class="form-group">
                <label>Đường dẫn ảnh</label>
                <input type="text" id="image-category" class="form-control input-sm" name="image" placeholder="Đường dẫn ảnh">
                <a style="margin-top: 10px" data-toggle="modal" data-target="#modalUploadMedia" data-href="{{route('image.modal')}}"
                   class="btn btn-default btn-icon-notika waves-effect openMediaModal"><i class="notika-icon notika-up-arrow"></i> Tải
                    ảnh lên</a>

                <div class="modal fade" id="modalUploadMedia" role="dialog" style="display: none;">
                    <div class="modal-dialog modal-large modal-content-media">
                        <div class="modal-content">
                            Loading...
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-example-int mg-t-15">
            <div class="form-group">
                <label>Mô tả danh mục</label>
                <textarea class="form-control input-sm" name="description"
                          placeholder="Mô tả danh mục"></textarea>
            </div>
        </div>
        <div class="form-example-int mg-t-15">
            <div class="fm-checkbox">
                <label class="">
                    <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox"
                                                                                           value="{{\App\Enums\CommonEnum::active}}"
                                                                                           name="status"
                                                                                           class="i-checks"
                                                                                           style="position: absolute; opacity: 0;">
                        <ins class="iCheck-helper"
                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                    <i></i> Kích hoạt</label>
            </div>
        </div>
        <div class="form-example-int mg-t-15">
            <input type="submit" value="Tạo mới" class="btn btn-success notika-bdz-file-previewtn-success waves-effect">
        </div>
    </form>
</div>

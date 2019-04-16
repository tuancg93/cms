@extends('admin.layouts.app')
@section('content')
<div class="data-table-area">
    <div class="container">
        <div class="row">
            @include('admin.common.flash')
        </div>
    </div>
</div>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    @include('admin.category.add')
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="">
                    @include('admin.category.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(".chosen")[0] && $(".chosen").chosen({
            width: "100%",
            allow_single_deselect: !0
        });

        $('.openMediaModal').on('click',function(){
            var dataURL = $(this).attr('data-href');

            $('.modal-content').load(dataURL,function(){
                $('#modalUploadMedia').modal({show:true});
            });
        });
        $(function () {
            $('#add-category').parsley();
        });


    </script>
@endsection
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h4 class="media_title">Thư viện ảnh</h4>
</div>
<div class="modal-body">
    <div class="widget-tabs-list">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true">Tải
                    ảnh lên</a></li>
            <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false">Thư viện
                    ảnh</a></li>
        </ul>
        <div class="tab-content tab-custom-st">
            <div id="home" class="tab-pane fade active in">
                <div class="tab-ctn dropzone-nk">
                    <div class="dropzone">
                        <div id="dropzone1" name="dropzone1">
                            <form method="post" action="{{ route('image.create') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="dz-message needsclick download-custom">
                                    <i class="notika-icon notika-cloud"></i>
                                    <h2>Drop files here or click to upload.</h2>
                                    <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div id="menu1" class="tab-pane fade list-file-media">
                <ul>




                    @foreach($photos as $k => $img)
                        <li><input name="image-media" data-img="{{url('/images')}}/{{$img->resized_name}}?id={{$img->id}}" type="radio" id="images_select{{$k}}" />
                            <label for="images_select{{$k}}"><img src="{{url('/images')}}/{{$img->resized_name}}" /></label>
                        </li>
                        @endforeach
                    <input type="hidden" id="total_images" value="{{count($photos)}}">
                    <input type="hidden" id="">
                </ul>
            </div>

        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="list_file">
        <div id="template-preview">
            <div class="dz-preview dz-file-preview" id="dz-preview-template">

                <div class="dz-details previews">
                    <img class="data-dz-thumbnail" data-dz-thumbnail style="width:40px;height:40px;" >

                </div>
                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                <div class="dz-success-mark"><span></span></div>
                <div class="dz-error-mark"><span></span></div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-default waves-effect" id="btn-insert-media" disabled onclick="insertImages();">
        Chèn vào bài viết
    </button>
</div>
<script>
    function insertImages() {
        var img_url = $("input[name='image-media']:checked").attr('data-img');
        console.log(img_url)
        $("#image-category").val(img_url);
        $('#modalUploadMedia').modal('hide');
    }
    $(document).ready(function () {
        var previewNode = document.querySelector("#dz-preview-template");
        Dropzone.autoDiscover = false;
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);
        var total_images = $("#total_images").val();

        $('input[name *= image-media]').on("change",function () {
            if(this.checked){
                $("#btn-insert-media").removeAttr("disabled");
            }
        });
        

        $("#dropzone1").dropzone({
            maxFiles: 2000,
            previewTemplate: previewTemplate,
            previewsContainer: "#template-preview", // Define the container to display the previews
            url: "{{route('image.create')}}",
            thumbnail: function(file, dataUrl) {
                console.log(file)
                if (file.previewElement) {

                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");


                    for (var i = 0; i < images.length; i++) {
                        total_images = total_images +1;
          /*              var img = '<li><input type="radio" name="image-media" data-img="'+dataUrl+'" checked id="images_select'+ total_images +'" />' +
                            '                            <label for="images_select'+total_images+'"><img src="'+dataUrl+'" /></label>' +
                            '                        </li>' ;
                        $(".list-file-media ul").prepend(img);*/
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                        $(thumbnailElement).addClass("img-select-thumb");
                    }
                    setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
                }
            },
            success: function (file, response) {
                console.log(file, response);
                dataUrl = '{{url('/images')}}/' + response.resized_name+"?id="+response.id;
                total_images = total_images +1;
                var img = '<li><input type="radio" name="image-media" data-img="'+dataUrl+'" checked id="images_select'+ total_images +'" />' +
                    '                            <label for="images_select'+total_images+'"><img src="'+dataUrl+'" /></label>' +
                    '                        </li>' ;
                $(".list-file-media ul").prepend(img);
                $("#btn-insert-media").removeAttr("disabled");

            }
        });
        

    })
</script>
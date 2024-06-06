<!-- blog upload and update popup -->
<div class="blog_upload ">
    <div class="iframe-container">
        <a class="close_btn" href="javascript:void(0)" onclick="upload_and_update(this)"><i class="bi bi-x"></i></a>
        <iframe src="" frameborder="0"></iframe>
    </div>
</div>


<div class="card">
    <div class="card-header h2">
        D Engr web Blog

        <a class="btn btn-primary float-right btn-sm btn-icon-split ml-2" href="javascript:void(0)" onclick="upload_and_update(this)" data-url="blog_upload">
            <span class="icon text-white-50"> +</span>
            <span class="text">Add New</span>
        </a>


        <a class="btn btn-primary float-right btn-sm btn-icon-split" onclick="display_instruction()" href="javascript:void(0)">
            <span class="icon text-white-50"> <i class="bi bi-arrow-counterclockwise"></i></span>
            <span class="text">Reload</span>
        </a>


    </div>
</div>

<div class="display_instruction">
    <!-- instruction display load by ajax -->
</div>
<!-- /.container-fluid -->
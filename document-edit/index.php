<?php 
    require_once('../private/initialize.php');

$page = 'Document';
$page_title = 'Edit Document';
$req_type = $_GET['req_type'] ?? 1;
include(SHARED_PATH . '/header.php'); 

?>
<style type="text/css">
.upload-area {
    /*width: 70%;*/
    height: 300px;
    border: 2px dashed #999;
    border-radius: 3px;
    margin: 0 auto;
    text-align: center;
    overflow: auto;
}

.dz-message {
    text-align: center;
    font-weight: normal;
    font-family: sans-serif;
    /*line-height: 50px;*/
    color: darkslategray;
    font-size: 1rem;
    color: #999;
}

#drag_upload_file {
    width: 50%;
    margin: 0 auto;
}

#drag_upload_file p {
    text-align: center;
}

#drag_upload_file #selectfile {
    display: none;
}

.avatar-sm {
    height: 3rem;
    width: 3rem;
}

.ps-0 {
    padding-left: 0 !important;
}
</style>

<section class="container-fluid">
    <form method="post">
        <div class="card ">
            <?php if($req_type == 1): ?>
            <div class="card-body">
                <ul class="nav nav-pills bg-nav-pills nav-justified border-bottom">
                    <li class="nav-item">
                        <a href="#home1" data-bs-toggle="tab" aria-expanded="false"
                            class="nav-link rounded-0 active py-2">
                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                            <span class="d-none d-md-block">Upload your document</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url_for('templates/index.php?req_type=1') ?>"
                            class="nav-link rounded-0 py-2">
                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                            <span class="d-none d-md-block">Select a template</span>
                        </a>
                    </li>

                </ul>
            </div>
            <?php endif; ?>
            <div class="card-body">

                <div class="form-group mb-2">
                    <label>Give your Document a title</label>
                    <input type="text" name="" class="form-control border-dark" required id=""
                        placeholder="Enter document title">
                </div>
                <div id="drop_file_zone" class="upload-area d-flex align-items-center justify-content-center"
                    ondrop="upload_file(event)" ondragover="return false">
                    <div id="drag_upload_file" class="dz-message">
                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                        <h3 class="action-word">Drop files here to start uploading </h3>
                        <div>or</div>
                        <div>
                            <input type="button" class="btn btn-primary" value="Select File(s)"
                                onclick="file_explorer();" />
                        </div>
                        <div class="text-muted font-13 mt-3">PDF, PNG, JPG or JPEG only</div>
                        <input type="file" id="selectfile" multiple />
                    </div>
                </div>

            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="clearfix ">
                <div class="btn btn-primary btn-sm float-end mr-2 disabled" style="cursor: pointer;" id="proceedbtn">
                    <a href="" class="text-white" id="proceed">Proceed</a>
                </div>
            </div>
        </div>
        <div class="d-none" id="preview"></div>
    </form>
</section>



<?php   include(SHARED_PATH . '/footer.php'); ?>
<script type="text/javascript">
$('#drop_file_zone').on('dragenter', function(e) {
    e.stopPropagation();
    e.preventDefault();
    $("#action-word").text("Drop here");
});

// Drag over
$('#drop_file_zone').on('dragover', function(e) {
    e.stopPropagation();
    e.preventDefault();
    $("#action-word").text("Drop here");
});


function upload_file(e) {
    e.preventDefault();
    ajax_file_upload(e.dataTransfer.files);
}

function file_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        files = document.getElementById('selectfile').files;
        ajax_file_upload(files);
    };
}

function ajax_file_upload(files_obj) {
    if (files_obj != undefined) {
        const baseURL = window.location.href;

        var form_data = new FormData();
        for (i = 0; i < files_obj.length; i++) {
            form_data.append('file[]', files_obj[i]);
        }
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "upload.php", true);
        xhttp.onload = function(event) {
            if (xhttp.status == 200) {

                addThumbnail(this.responseText);
                $("#proceedbtn").removeClass("disabled");

                let filed = document.querySelector('.filed')
                let dataAttFileName = filed.getAttribute('data-name')
                let dataAttId = filed.getAttribute('data-id')

                let isFiled = $("#proceed").attr('href', baseURL + 'prepare.php?document_id=' + dataAttId +
                    '&type=1')
                console.log(isFiled)
            } else {
                alert("Error " + xhttp.status + " occurred when trying to upload your file.");
            }
        }
        xhttp.send(form_data);
    }
}


function addThumbnail(data) {
    $("#preview").removeClass('d-none').append(data);
}

$(document).on('click', '.ds-remove', function(e) {
    e.preventDefault();
    var filename = $(this).data('name');
    $(this).closest('.card').addClass('d-none');

    $.ajax({
        url: 'inc/remove_file.php',
        method: 'post',
        data: {
            filename: filename,
        },
        dataType: 'json',
        success: function(r) {
            if (r.success == true) {
                $(this).closest('.card').addClass('d-none');
            } else {
                console.log(r.msg)
            }
        }
    });
})

function convertSize(size) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (size == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
    return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
}
</script>
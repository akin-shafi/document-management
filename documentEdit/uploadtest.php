<?php require_once('../private/initialize.php');

$page = '';
$page_title = 'Upload Page';

// include(SHARED_PATH . '/header.php');
// include(SHARED_PATH . '/menu.php');
?>





    <style type="text/css">
    /*.upload-area{
        height: 300px;
        border: 2px dashed #063bb3;;
        border-radius: 3px;
        margin: 0 auto;
        text-align: center;
        overflow: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }*/

    .upload-area {
        /*width: 70%;*/
        height: 300px;
        border: 2px dashed #063bb3;
        border-radius: 3px;
        margin: 0 auto;
        text-align: center;
        overflow: auto;
    }

    .upload-area:hover {
        cursor: pointer;
    }

    .dz-message {
        text-align: center;
        font-weight: normal;
        font-family: sans-serif;
        /*line-height: 50px;*/
        color: darkslategray;
        font-size: 2rem;

        /*position: absolute;*/

        color: #063bb3;
    }

    #file {
        display: none;
    }

    /* Thumbnail */
    .thumbnail {
        width: 80px;
        height: 80px;
        padding: 2px;
        border: 2px solid lightgray;
        border-radius: 3px;
        float: left;
        margin: 8px;
    }

    .size {
        font-size: 12px;
    }
    </style>


    


    <div class="app-content content pt-1">
        <div class="content-wrapper  p-0">
            <section class="container-fluid">
                <div class="card mt-3">
                    <div class="card-body">

                        <div class="tab-content">
                            <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Documents</h4>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="file" id="file">

                                        <!-- Drag and Drop container-->
                                        <div class="upload-area " id="uploadfile">
                                            <div class="dz-message mt-4" style=" ">
                                                <div><i class="fa fa-file-circle-check fa-2x"></i></div>
                                                <div id="action-word">Drop files here or click to upload.</div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-2">
                                            <div>
                                                <div class="btn"><input type="checkbox" name="" id="onlySigner"> <label
                                                        for="onlySigner">I'm the only signer </label></div>
                                                <div class="btn btn-primary btn-sm disabled" id="next"> Next</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- <section id="dropzone-examples" class="container-fluid">

              <div class="row">
                <div class="col-12">
                  
                </div>
              </div>
            </section> -->
        </div>
    </div>


</body>

</html>
<script src="<?php echo url_for('app-assets/vendors/js/vendors.min.js') ?>"></script>
<script type="text/javascript" src="js/file-upload-2.js">

</script>
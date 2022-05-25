<?php require_once('../private/initialize.php');

$page = 'Manage';
$page_title = 'Upload Page';


include(SHARED_PATH . '/header.php');
// include(SHARED_PATH . '/menu.php');
?>
<link rel="stylesheet" type="text/css"
    href="<?php echo url_for('app-assets/vendors/css/file-uploaders/dropzone.min.css') ?>">
<link rel="stylesheet" type="text/css"
    href="<?php echo url_for('app-assets/css/plugins/forms/form-file-uploader.min.css') ?>">

<style type="text/css">
form {
    cursor: pointer;
}

form:hover {
    border: 3px dashed #063bb3;
}

form:hover .dz-message {
    color: #063bb3;
}
</style>

    <div class="content-wrapper container-xxl p-0">

        <section id="dropzone-examples">
            <!-- multi file upload starts -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Document</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">

                            </p>
                            <button id="clear-dropzone" class="btn btn-outline-primary mb-1">
                                <i data-feather="trash" class="me-25"></i>
                                <span class="align-middle">Clear Dropzone</span>
                            </button>

                            <form action="#" class="dropzone dropzone-area" id="dpz-multiple-files">
                                <div class="dz-message">Drop files here or click to upload.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- multi file upload ends -->

            <!-- remove all thumbnails file upload starts -->

        </section>



        <?php   include(SHARED_PATH . '/footer.php'); ?>
        <!-- BEGIN: Page Vendor JS-->
        <script src="<?php echo url_for('app-assets/vendors/js/file-uploaders/dropzone.min.js') ?>"></script>
        <script src="<?php echo url_for('app-assets/js/scripts/forms/form-file-uploader.min.js') ?>"></script>
        <!-- END: Page Vendor JS-->
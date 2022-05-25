<?php require_once('../private/initialize.php');

$page = 'Prepare';
$page_title = 'Upload Page';

include(SHARED_PATH . '/header.php');
?>

	<link rel="stylesheet" type="text/css" href="css/pdf2img.css">

	  <div class="offcanvas offcanvas-top show" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="visibility: visible; height: 20vh" aria-modal="true" role="dialog">
	    <div class="offcanvas-header">
	      <h5 id="offcanvasTopLabel" class="offcanvas-title">Processing</h5>
	    </div>
	    <div class="offcanvas-body ">

	      <div>
	         We are preparing your document, almost there 
	      </div>
	      <a href="edit.php" class="btn btn-primary me-1 waves-effect waves-float waves-light">Proceed</a>
	    
	    </div>
	  </div>



    <div id="holder" style="width: 1000px; margin: 0 auto;" ></div>
    <canvas id="pdf-canvas" width="1000" style="display: none;"></canvas>


<input type="hidden" class="url" value="upload/certificate.pdf">
<input type="hidden" class="url" value="upload/EmployeeHandbook.pdf">

<?php include(SHARED_PATH. '/footer.php')?>

<script type="text/javascript" src="js/pdf.js"></script>
<script type="text/javascript" src="js/pdf.worker.js"></script>
<script type="text/javascript" src="js/document.loader.js"></script> 
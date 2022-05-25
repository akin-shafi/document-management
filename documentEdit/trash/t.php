
<?php require_once('../private/initialize.php');

$page = 'Documents Edit';
$page_title = 'Home';
$document_edit = $_SESSION['document_edit'] ?? '';
include(SHARED_PATH . '/header.php');
include(SHARED_PATH . '/menu.php');
?>
<section class="modern-horizontal-wizard">
   <div class="bs-stepper wizard-modern modern-wizard-example">
      <div class="bs-stepper-header">
         <div class="step crossed" data-target="#account-details-modern" role="tab" id="account-details-modern-trigger">
            <button type="button" class="step-trigger" aria-selected="false">
               
               <span class="bs-stepper-label">
               <span class="bs-stepper-title">Choose</span>
               </span>
            </button>
         </div>
         <div class="line">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2">
               <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
         </div>
         <div class="step crossed" data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
            <button type="button" class="step-trigger" aria-selected="false">
               
               <span class="bs-stepper-label">
               <span class="bs-stepper-title">Draw</span>
               </span>
            </button>
         </div>
         <div class="line">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2">
               <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
         </div>
         <div class="step active" data-target="#address-step-modern" role="tab" id="address-step-modern-trigger">
            <button type="button" class="step-trigger" aria-selected="true">
               
               <span class="bs-stepper-label">
               <span class="bs-stepper-title">Upload</span>s
            </button>
         </div>
         <div class="line">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2">
               <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
         </div>
         
      </div>
      <div class="bs-stepper-content">

         <div id="choose-modern" class="content" role="tabpanel" aria-labelledby="choose-modern-trigger">
            <div class="content-header">
               <h5 class="mb-0">Account Details</h5>
               <small class="text-muted">Enter Your Account Details.</small>
            </div>
            <div class="row">
                Choose Signature
            </div>
            <div class="d-flex justify-content-between">
               <button class="btn btn-outline-secondary btn-prev waves-effect" disabled="">
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
               </button>
               <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                  <span class="align-middle d-sm-inline-block d-none">Next</span>
               </button>
            </div>
         </div>


         <div id="draw-modern" class="content" role="tabpanel" aria-labelledby="draw-modern-trigger">
            <div class="content-header">
               <h5 class="mb-0">Account Details</h5>
               <small class="text-muted">Enter Your Account Details.</small>
            </div>
            <div class="row">
                Draw Signature
            </div>
            <div class="d-flex justify-content-between">
               <button class="btn btn-outline-secondary btn-prev waves-effect" disabled="">
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
               </button>
               <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                  <span class="align-middle d-sm-inline-block d-none">Next</span>
               </button>
            </div>
         </div>
        

        <div id="upload-modern" class="content" role="tabpanel" aria-labelledby="upload-modern-trigger">
            <div class="content-header">
               <h5 class="mb-0">Account Details</h5>
               <small class="text-muted">Enter Your Account Details.</small>
            </div>
            <div class="row">
                Upload Signature
            </div>
            <div class="d-flex justify-content-between">
               <button class="btn btn-outline-secondary btn-prev waves-effect" disabled="">
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
               </button>
               <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                  <span class="align-middle d-sm-inline-block d-none">Next</span>
               </button>
            </div>
         </div>
        


      </div>
   </div>
</section>

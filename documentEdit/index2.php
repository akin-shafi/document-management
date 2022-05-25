<?php require_once('../private/initialize.php');

$page = 'Documents Edit';
$page_title = 'Home';

include(SHARED_PATH . '/header.php');
include(SHARED_PATH . '/menu.php');
?>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Arizonia&family=Great+Vibes&family=Inter:wght@200;500&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&family=Oleo+Script+Swash+Caps&family=The+Nautigal&display=swap" rel="stylesheet">
	<!-- Font End -->
	<link rel="stylesheet" type="text/css" href="doc-edit.css">
	<link rel="stylesheet" type="text/css" href="signature-design.css">

	<style type="text/css">
		.roundCorners {
			/*border:  1px solid #c4caac;
			width: 760px;
    		height: 300px;*/
		}
	</style>

	<div class="container-fluid">
		<!-- <div id="holder">Htnl</div> -->
	
		<div class="row">
			<div class="col-lg-2 border p-0">
				<div class="tool">
					<li class="dr" data-id="signTool" data-value="Sign"><i class="fa-solid fa-signature"></i> Signature</li>
					<li class="dr" data-id="initialTool" data-value="Initial"> <i data-feather='edit-3'></i> Initial</li>
					<li class="dr" data-id="stampTool" data-value="Stamp"><i class="fa-solid fa-stamp"></i> Stamp</li>
					<li class="dr" data-id="sealTool" data-value="Seal"><i data-feather='disc'></i> Seal</li>
					<li class="dr" data-id="dateTool" data-value="Date"><i class="fa-solid fa-calendar"></i> Date Signed</li>
				</div>
			</div>
			<div class="col-lg-10 border">
				<div class="card">
					<div class="card-body alert-dark" id="viewPort" style="height:100vh">
						
					</div>

				</div>
			</div>
		</div>


		    <div class="box signTool" id="signTool" data-id="draggable">
		    	<!-- <button type="button" class="btn-close tool-cls" data-bs-dismiss="modal" aria-label="Close"></button> -->
			    <div>Sign</div>
			    <i class="fa fa-arrow-down"></i>
			</div>

			<div class="box initialTool" data-id="draggable">
			    <div>Initial</div>
			    <i class="fa fa-arrow-down"></i>
			</div>

			<div class="box stampTool" data-id="draggable">
			    <div>Stamp</div>
			    <i class="fa fa-arrow-down"></i>
			</div>


			<div class="box dateTool" data-id="draggable">
			    <div>Date</div>
			    <i class="fa fa-arrow-down"></i>
			</div>
	</div>


	<input type="hidden" id="storage">
	<input type="hidden" id="currentId">
	<input type="hidden" id="toolName">


	<div class="modal fade text-start show" id="createSignature" style="display: ;">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg ">
		  <div class="modal-content">
		    <div class="modal-header">
		      <h4 class="modal-title" id="myModalLabel17">Create Your Signature</h4>
		      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
		    <div class="modal-body">
		    	<form class="form form-horizontal">
	            <div class="row border-bottom">
	              <div class="col-6">
	                <div class="mb-1 row">
	                  <div class="col-sm-3 col-md-3">
	                    <label class="col-form-label" for="fname-icon">Full Name</label>
	                  </div>
	                  <div class="col-sm-9 col-md-9">
	                    <div class="input-group input-group-merge">
	                      <input type="text" id="fname-icon" class="form-control" name="fname-icon" placeholder="Shafi Akinropo" disabled>
	                    </div>
	                  </div>
	                </div>
	              </div>

	              <div class="col-5">
	                <div class="mb-1 row">
	                  <div class="col-sm-3 col-md-3">
	                    <label class="col-form-label" for="initials-icon">Initials</label>
	                  </div>
	                  <div class="col-sm-9 col-md-9">
	                    <div class="input-group input-group-merge">
	                      <input type="text" id="initials-icon" class="form-control" name="initials-icon" placeholder="SA" disabled>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              
	            </div>

	            <div class="row p-0">
				        
				        <div class="">
				          <ul class="nav nav-tabs border-bottom pt-2" role="tablist">
				            <li class="nav-item">
				              <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">CHOOSE</a>
				            </li>
				            <li class="nav-item">
				              <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">DRAW</a>
				            </li>
				            
				            <li class="nav-item">
				              <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" aria-controls="about" role="tab" aria-selected="false">UPLOAD</a>
				            </li>
				          </ul>
				          <div class="tab-content">
				            <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
				              <table class="table table-striped table-hover">
				              	
				              	<tbody>
				              		<?php 
				              			$sn = 1; $fontFamily = ['Alex Brush', 'Arizonia', 'Great Vibes', 'Creattion Demo', 'Scriptina Regular','Montserrat', 'Oleo Script Swash Caps', 'The Nautigal', 'Poppins', 'Roboto'];
				              			foreach ($fontFamily as $key => $value)  {  
				              		?>
				              		<tr>
				              			<td class=" p-0 " align="center"><?php echo $sn ++; ?>.</td>
				              			<td  class="p-0">
				              				<div class="form-check p-1 d-flex align-items-center">

							                    <div class="pr-2">
							                    	<input type="radio" name="sign" class="form-check-input choose" id="customCheck<?php echo $key ?>" data-id="<?php echo $key ?>">
							                    </div>

							                    <label class="form-check-label" for="customCheck<?php echo $key ?>" id="signature-wrap<?php echo $key ?>">
							                    	<!-- <canvas> -->
														<div class="css-pl8xw2">
															Signed on ToNote by:
															<div class="css-fv3lde">
																<span class="css-4x8v88" style="font-family: <?php echo $value?>;">Shafi Akinropo</span>
															</div>
															<span class="css-1j983t3 signatureID">6D80C6DF365242545678</span>
														</div>
							                    </label>
							                  </div>
				              			</td>
				              			<td class="p-0">
				              				    <label class="form-check-label" for="customCheck<?php echo $key ?>">
													<div class="css-pl8xw2">Signed on ToNote by:<div class="css-fv3lde">
														<span class="css-4x8v88" style="font-family: <?php echo $value?>;">SA</span>
													</div>
													<span class="css-1j983t3 signatureID">6D80C6DF365242545678</span></div>
							                    </label>
				              			</td>
				              		</tr>
				              		<?php } ?>

				              	</tbody>
				              </table>
				            </div>
				            <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
				            	<div class="row">
				            		<div class="col-sm-9 border-right p-0">
				            			<div class="text-center">Draw your signature in the box </div>
						             	<div id="canvas" class="d-flex justify-content-center">
											<canvas class="roundCorners" id="newSignature"  style="position: relative; margin: 0; padding: 0; border: 1px solid #CCC"></canvas>
										</div>
				            		</div>
				            		<div class="col-sm-3 p-0">
				            				<div class="">
					            				<button type="button" class="btn btn-primary my-2" onclick="signatureSave()">Save signature</button> 
												<button type="button" class="btn btn-outline-primary" onclick="signatureClear()">Clear signature</button>
											</div>

											<div class="mt-3">
												<img id="saveSignature" alt="Saved image png" src="<?php echo url_for('app-assets/images/elements/empty.png') ?>" width="150" height="150"/>

											
											</div>
										
				            		</div>
				            	</div>

								
								
				            </div>
				           
				            <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
				             	Upload goes here
				            </div>
				          </div>
				        </div>
				      
	            </div>
	          </form>

		    </div>
		    <div class="modal-footer d-flex justify-content-start">
		      <div class="pb-1">
		      	By clicking Create, I agree that the signature and initials will be the electronic representation of my signature and initials for all purposes when I (or my agent) use them on document through this platform, including legally binding contracts - just the same as a pen-and-paper signature or initial.
		      </div>
		      <div class="goodbye"></div>
		      <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Create</button>
		      <button type="button" class="btn btn-outline primary waves-effect waves-float waves-light" data-bs-dismiss="modal">Cancel</button>
		    </div>
		  </div>
		</div>
	</div>


<?php   include(SHARED_PATH . '/footer.php'); ?>
<script src="signature.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script type="text/javascript">
	signatureCapture();
	$('.signatureID').each(function() {
		   var str = $(this).text();
		   var num = 15;
	       let me =  str.length > num ? str.slice(0, num) + "..." : str;
		   $(this).text(me)
	});
	

	$('.choose').click(function() {
	  if($(this).is(':checked')) { 
	  	let choiseID = $(this).data('id');
	  	console.log(choiseID)

	    //input clone div
	    $('#signature-wrap'+choiseID ).clone().appendTo( ".goodbye" );
	  }                      
	});

	

	$(document).on('click', '.tool li', function(e){
		var toolId = $(this).data('id');
		var toolName = $(this).data('value');
		$('.'+toolId).css({display: 'block'})
		addMouseMoveListener(toolId)
		$("#storage").val(toolId)
		$("#toolName").val(toolName)
	});

	function addMouseMoveListener(toolId) {
		var count = 1;
		$(document).bind('mousemove.toolId', function(e){
					// console.log(e)
				count = count + 1;
				// var el = '.'+toolId;
			  	$('.'+toolId).attr('id',count);
			  	$("#currentId").val(count)
			    $('.'+toolId).css({
			       // display: 'none',
			       left:  e.pageX + 10,
			       top:   e.pageY
			    });
		});
		

	}


	$(function() {
		// console.log("script begins");
		$(document).on("click", '#viewPort', function(e) {
			var storage = $("#storage");
			var eId = $("#storage").val();
			var cId = $("#currentId").val();

			$("#"+cId).css('display', 'none');
			
			let toolName = $("#toolName").val();
			if (storage.val() != '') {

			  		let x = e.pageX;
			        let y = e.pageY;
			        addCircle(x,y, eId);
			        removeMouseMoveListener()
			        storage.val('')

			        if (toolName == 'Sign') {
			        	// console.log("Nothing")
			        	$("#createSignature").modal('show')
			        }
		        
	        }
	    });
	});



	// Add a circle to the document and return its handle
	function addCircle(x,y, eId) {
	    let toolName = $("#toolName").val();
	    let newDiv = document.createElement('div');
	 	var div = '<div><button type="button" class="btn-close tool-cls" data-bs-dismiss="modal" aria-label="Close"></button>';
	 	div += '<div>' + toolName + '</div><i class="fa fa-arrow-down"></i>';
	 	div += '</div>';
	 	$(newDiv).addClass('box').html(div);
	    let adjX = x + 10; //click happens in center
	    let adjY = y; 
	    $(newDiv).css("left",adjX);
	    $(newDiv).css("top",adjY);
	    document.body.appendChild(newDiv);
	    return newDiv;
	}

	
	$(document).on('click', '.tool-cls', function() {
	    $(this).parent().parent().remove();
	});


	function removeMouseMoveListener() {
	    $(document).unbind('mousemove');
	    $( ".box" ).draggable();
	}
	var eId = $("#storage").val();
    
</script>
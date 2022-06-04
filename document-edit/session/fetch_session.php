<?php require_once('../../private/initialize.php');


$document_id = $_POST['document_id'];
$path = 'upload/';
$documents = DocumentImage::find_by_document_ids($document_id);
$documentResource = DocumentResource::find_by_document_ids($document_id);

$totalPage = count($documents);
	
$total_item = 0;
	
	$output = '<div>';
	if(!empty($_SESSION["docu_edit"])){
		$pn = 1; $qn = 1; $an = 1;  foreach($_SESSION["docu_edit"] as $keys => $values)
		
		{	
			if ($values["tool_text"] == "Textarea") {
				$output .= '<dl class=" '.$values["tool_class"].' '.$values["tool_text"].'" data-name="'.$values["tool_text"].'" id="'.$values["tool_id"].'" style="top: '.$values["tool_top_pos"].'; left:'.$values["tool_left_pos"].'">
								<button type="button" class="btn-close deleteItem"  data-id="'.$values["tool_id"].'"></button>
								<div style="position:relative">
									
									<div class="element"><input aria-invalid="false" type="text"  class="textareaTool" value=""></div>
								</div>
						    </dl>';
			}else{
				$output .= '
					<dl class=" '.$values["tool_class"].' '.$values["tool_text"].'" data-name="'.$values["tool_text"].'" id="'.$values["tool_id"].'" style="top: '.$values["tool_top_pos"].'; left:'.$values["tool_left_pos"].'">
						<div>
							<button type="button" class="btn-close deleteItem" data-id="'.$values["tool_id"].'"></button>
							<div class="element">'.$values["tool_text"].'</div>
							
						</div>
					</dl>
				';
				
				
			}
			$total_item = $total_item + 1;
			
		}
		
	}
	else
	{
		$output .= '
	    <div></div>
	    ';

		// $_SESSION["docu_edit"];
	    // print_r($_SESSION["docu_edit"]["docuemnt_id"]);
	}
	
	foreach($documentResource as  $savedTool){
		$output .= '<img src="'.$path.$savedTool->filename.'" 
		data-name="'.$savedTool->tool_name.'" 
		data-id="'.$savedTool->elemId.'"
		style="top: '.$savedTool->tool_pos_top.'; left: '.$savedTool->tool_pos_left.'; " class="tool-box main-element" />';
	}
	
	foreach ($documents as $key => $value) {
		$pageNum = $key + 1;
		$output .= '
			<div class="border">
				<img src="upload/document_file/'.$value->filename.'" 
				style="min-width: 500px ;"  class="img-fluid"> 
			</div>
			<div class="clearfix">
				<h6 class="float-end">Page '.$pageNum.' of '.$totalPage.'</h6>
			</div>
		</div>';
	}
	
	$data = array(
		'session_details'	=>	$output,
		'total_item'		=>	$total_item,
		// 'total_price'		=>	 number_format($total_price, 2),
		
	);	

	echo json_encode($data);

	// print_r($data);

?>
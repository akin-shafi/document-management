<?php require_once('../private/initialize.php');

// /* Getting file name */
// $filename = $_FILES['file']['name'];

// /* Getting File size */
// $filesize = $_FILES['file']['size'];

// /* Location */
// $location = "upload/".$filename;

// $return_arr = array();

// /* Upload file */
// if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
//     $src = "default.png";

//     // checking file is image or not
//     if(is_array(getimagesize($location))){
//         $src = $location;
//     }
//     $return_arr = array("name" => $filename,"size" => $filesize, "src"=> $src);
// }

// echo json_encode($return_arr);


session_start();

if (!file_exists('upload')) {
  mkdir('upload', 0777);
}

// $document_id = $_SESSION['document_id'] ?? '';
$document_id = 'ToNote'. '_' .uniqid() ?? '';
// $document = Document::find_by_id($document_id);
if (!empty($_FILES['file']['name'])) {

  foreach ($_FILES['file']['name'] as $key => $val) {
    $filename = uniqid() . '_' . $_FILES['file']['name'][$key];
    $pathname = "upload/" . $filename;
    $filesize = $_FILES['file']['size'][$key];
    $filetype = $_FILES['file']['type'][$key];
    if (move_uploaded_file($_FILES['file']['tmp_name'][$key], $pathname)) {
      $src = "default.png";
      if (is_array(getimagesize($pathname))) {
        $src = $pathname;
      }

      // if(!empty($document)){
      //     $args = [
      //         'filename' => $filename,
      //         'created_by' => $loggedInAdmin->id,                             
      //         'created_at' => date('Y-m-d H:i:s'), 
      //     ]; 
      //     $document->merge_attributes($args);
      //     $result = $document->save();
      // }else{
      //     $args = [
      //         'filename' => $filename,
      //         'document_id' => $document_id,
      //         'created_by' => $loggedInAdmin->id,                             
      //         'created_at' => date('Y-m-d H:i:s'), 
      //     ];     
      //     $document = new Document($args);
      //     $result = $document->save();
      // }
      $args = [
        'filename' => $filename,
        'document_id' => $document_id,
        'created_by' => $loggedInAdmin->id ?? 0,
        'created_at' => date('Y-m-d H:i:s'),
      ];
      $document = new Document($args);
      $result = $document->save();
?>

<div class="card mt-1 mb-0 shadow-none border">
    <div class="p-2">
        <div class="row align-items-center">
            <div class="col-auto" id="uploadfile"><img data-dz-thumbnail src="<?php echo $src ?>"
                    class="avatar-sm rounded bg-light" alt=""> </div>
            <div class="col ps-0"> <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                <p class="mb-0" data-dz-size><?php echo $filename ?></p>
            </div>
            <div class="col-auto"> <a href="" class="btn btn-sm btn-outline-primary ds-remove filed"
                    data-id="<?php echo $document->document_id ?>" data-name="<?php echo $filename ?>"> X </a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php } ?>

<?php } ?>
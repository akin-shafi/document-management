<?php require_once('../../private/initialize.php');

$args = $_POST['saveTool'];
$tool_id = $_POST['saveTool']['elemId'];
$documentResource = New DocumentResource($args);
// pre_r($args);
$result = $documentResource->save();
// $result = true;
if($result == true){
    foreach($_SESSION["docu_edit"] as $keys => $values)
    {
        if($values["tool_id"] == $tool_id)
        {
            unset($_SESSION["docu_edit"][$keys]);
        }
    }
    exit(json_encode(['success' => true]));
}


?>
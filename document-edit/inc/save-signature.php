<?php   require_once('../../private/initialize.php');
        $img = $_POST['img'];//getting post img data
        $img = substr(explode(";",$img)[1], 7);//converting the data 
        $path = '../upload/';
        $filename = $_POST['imgType'].time().'img.png';//making file name
        $user_id = $loggedInAdmin->id ?? 0;
        $set_default = 1;
        $type = $_POST['etype'];
        $category = $_POST['category'];

        $findSignature = SignatureDetail::find_by_user_id($user_id);

        if($_POST['action'] == 'create'){
             $save = SignatureDetail::createSignature(["user_id" => $user_id, 
             "filename" => $filename, 
             "type" => $type, "category" => $category  ]);

             
             if($save == true){
                 exit(json_encode(['signImg' => $filename]));
                // file_put_contents($path.$filename, base64_decode($img));//converting the $img with base64 and putting the image data in upload/$target file name  
                // exit(json_encode(['signImg' => $target]));
             }
        }else{
                
        }

        
        
    ?>
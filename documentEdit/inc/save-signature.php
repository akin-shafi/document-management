<?php
    $img = $_POST['img'];//getting post img data
            $img = substr(explode(";",$img)[1], 7);//converting the data 
            $target = $_POST['imgType'].time().'img.png';//making file name
            file_put_contents('../upload/'.$target, base64_decode($img));//converting the $img with base64 and putting the image data in upload/$target file name  

            exit(json_encode(['signImg' => $target]));
    ?>
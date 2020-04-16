<?php
if(isset($_POST['img_name_ori'])){

    $image_array_1 = explode(".", $_POST['img_name_ori']);
    $img_name_crop =  $image_array_1[0] . "-crop.png";

    if($_POST['toFilterNoCrop'] == 'toFilterNoCrop'){
        $data = $_POST['croppedImage'];
        $image_array_1 = explode(";", $data); // data:image/jpeg; [0] + base64,/9j/4AAQSkZJRgABAQEAYABgAAD [1]
        $image_array_2 = explode(",", $image_array_1[1]); // base64, [0] + /9j/4AAQSkZJRgABAQEAYABgAAD [1] 
        $data = base64_decode($image_array_2[1]); // /9j/4AAQSkZJRgABAQEAYABgAAD [1] 

        file_put_contents($img_name_crop, $data);
    }else{
        move_uploaded_file($_FILES["croppedImage"]["tmp_name"], $img_name_crop);
    }
    
    echo $img_name_crop; 
} // End if

?>
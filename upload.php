<?php
if(isset($_POST['img_name_ori'])){

    $image_array_1 = explode(".", $_POST['img_name_ori']);
    $img_name_crop =  $image_array_1[0] . "-crop.png";
    move_uploaded_file($_FILES["croppedImage"]["tmp_name"], $img_name_crop);
    echo $img_name_crop; 
} // End if

?>
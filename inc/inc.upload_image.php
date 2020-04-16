<?php

include 'inc.dbh.php';

//upload.php

if(isset($_POST["image"]))
{
 $data = $_POST["image"];

// $data = data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD

 $image_array_1 = explode(";", $data); // data:image/jpeg; [0] + base64,/9j/4AAQSkZJRgABAQEAYABgAAD [1]

 $image_array_2 = explode(",", $image_array_1[1]); // base64 [0] + /9j/4AAQSkZJRgABAQEAYABgAAD [1] 

 $data = base64_decode($image_array_2[1]); // /9j/4AAQSkZJRgABAQEAYABgAAD [1] 

 $imageName = '../imgEdited/' . $_POST['img_name'];

 file_put_contents($imageName, $data); // Save to dir

 $imageName = 'imgEdited/' . $_POST['img_name']; // For front-end
 // Return
 echo '<img src="'.$imageName.'" class="img-thumbnail" />';
}

?>
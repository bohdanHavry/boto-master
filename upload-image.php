<?php

//перевірка розширення
echo $Name_File= $myFile1["name"][0];
echo $imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $Name_File));
if($imgext == 'jpeg' || $imgext == 'jpg' || $imgext == 'png')
{ 
//папка для загрузки
echo $uploaddir = 'uploads_images/';
//нове імя
echo $newfilename = $post_id.'-'.rand(1,10).'.'.$imgext;
//шлях до файлу
echo $uploadfile = $uploaddir.$newfilename;
 
//загрузка файлу
echo $Tmp_Name=$myFile1["tmp_name"][0];
move_uploaded_file($Tmp_Name, $uploadfile);

$update = mysqli_query($linc, "UPDATE `Posts` SET `post_image`='$newfilename' WHERE `Posts`.`post_id` = '$post_id'");
}

?>

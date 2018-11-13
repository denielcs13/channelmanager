<?php
function upload_image($img_name,$img_temp,$img_new_name,$img_directory){
	$ext		= pathinfo($img_name, PATHINFO_EXTENSION);
	$file_name	=$img_new_name.'.'.$ext;
	$uploads_dir=$img_directory.$file_name;
	if(move_uploaded_file($img_temp, $uploads_dir)){
	return $file_name;	
	}
}
?>
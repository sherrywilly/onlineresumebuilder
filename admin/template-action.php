<?php 
require '../config.php';



if(isset($_FILES['template_img'])){
	$file = $_FILES['template_img'];
var_dump($_FILES);

	$file_name = $file['name'];

	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];


	$file_ext = explode('.',$file_name);
	$file_ext = strtolower(end($file_ext));
  
	$allowed = array('jpg','jpeg','png');

	if(in_array($file_ext,$allowed)){

		if($file_error ===0){

			$file_name_new = uniqid('',true).'.'.$file_ext;
			$file_destination = '../img/' . $file_name_new;
			if(move_uploaded_file($file_tmp,$file_destination)){
				// echo $file_destination;
			}
		}
	}



}



if(isset($_FILES['template'])){
	$file = $_FILES['template'];
	$file_name = $file['name'];

	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];


	$file_ext = explode('.',$file_name);
	$file_ext = strtolower(end($file_ext));
  
	$allowed_templates = array('php');

	if(in_array($file_ext,$allowed_templates)){

		if($file_error ===0){

			$file_name_new = uniqid('',true).'.'.$file_ext;
			$file_destination_template = '../templates/' . $file_name_new;
			if(move_uploaded_file($file_tmp,$file_destination_template)){
				// echo $file_destination_template;
			}
		}
	}



}

if(isset($_POST['t_name'])){
	$t_name = $_POST['t_name'];
	$t_img_dest = $file_destination;
	$t_dest = $file_destination_template;

	echo $sql = "insert into template(path,name,img) values('$t_dest','$t_name','$t_img_dest')";
	mysqli_query($conn,$sql);
	header('Location: template.php');

}


 ?>
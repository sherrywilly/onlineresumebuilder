<?php 
require '../config.php';





if(isset($_POST['insert'])){
$error = 0;

if($_POST['insert']=="edu-form"){


	if($_POST['from']==''or $_POST['to']==''or $_POST['college']=='' or $_POST['course']==''){
      
     $error++;

	}else{


// var_dump($_POST);
	$from_date = $_POST['from'];
	$to_date = $_POST['to'];
	$college = $_POST['college'];
	$course = $_POST['course'];
	$rsd = $_POST['rid'];

	$sql ="insert into education(rid,from_date,to_date,course,college) values ('$rsd','$from_date','$to_date','$course','$college')";
	if(mysqli_query($conn, $sql) ==TRUE){
		$msg  = 'data updated successfully';
	}else{
		$error++;
	}
}

}


if($_POST['insert']=="work-form"){

	$from_date = $_POST['from'];
	$to_date = $_POST['to'];
	$position = $_POST['post'];
	$company = $_POST['company'];
	$rsd = $_POST['rid'];

	$sql ="insert into work(rid,from_date,to_date,post,company) values ('$rsd','$from_date','$to_date','$position','$company')";
	if(mysqli_query($conn, $sql) ==TRUE){
		$msg  = 'data updated successfully';
	}else{
		$error++;
	}

}
if($error>0){
	$output = array(
'error'=>true,
'msg'=> 'unable to handle the request',
	);

}else{

	$output = array(
 	'success' => true,
 	'msg' => $msg,
	);

}



echo json_encode($output);

}///ending post requset validation




 ?>
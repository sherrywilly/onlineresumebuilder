<?php

error_reporting(0);
require '../config.php';


if(isset($_POST['var'])){


if ($_POST['var'] == 'insert') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $add = $_POST['address'];
    $town = $_POST['town'];
    $city = $_POST['city'];
    $dob = $_POST['dob'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $faname = $_POST['faname'];
    $mname = $_POST['mname'];
    $fresh = $_POST['fresher'];
    $uid = 1;

    $sql = "insert into resume_build(fname,lname,father_name,mother_name,address,dob,town,city,pin,email,phone,fresher,uid) values ('$fname','$lname','$faname','$mname','$add','$dob','$town','$city','$pin','$email','$phone','$fresh','$uid')";

   if(mysqli_query($conn,$sql) == TRUE){
    $last_id = mysqli_insert_id($conn);

    
   }else{
    $error++;
        $msg= "unknown error occured";
      
    

   }

if($error>0){
    $output = array(
        'status' => false,
        'msg' => $msg,
    );
} else {
    $output = array(
        'status' => true,
        'msg' => "user inserted successfully",
        'get_id' => $last_id,
    );
}
}
echo json_encode($output);

}


if(isset($_POST['action'])){

if($_POST['action'] == "fetch-user"){

$id =$_POST['fetch-user-id'];



$sql = "select * from resume_build where id ='$id'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$user['fname'] = $row['fname'];
$user['lname'] = $row['lname'];
$user['father_name'] = $row['father_name'];
$user['mother_name'] = $row['mother_name'];
$user['address'] = $row['address'];
$user['dob'] = $row['dob'];
$user['town'] = $row['town'];
$user['city'] = $row['city'];
$user['pin'] = $row['pin'];
$user['email'] = $row['email'];
$user['phone'] = $row['phone'];
$user['fresher'] = $row['fresher'];


echo json_encode($user);
}



}


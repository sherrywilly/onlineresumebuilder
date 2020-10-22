<?php
error_reporting(0);
require 'config.php';
session_start();
if(isset($_POST['action'])){
    if($_POST['action']=='login'){
$uname = $_POST['uname'];
$upass = $_POST['upass'];

echo $sql = "select * from  admin where username = '$uname' and password = '$upass'";
echo $sqlx = "select * from users where email ='$uname' and password ='$upass'";

$result1 = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sqlx);


if(mysqli_num_rows($result1)==1){

echo"successfully loged in";
        $_SESSION['usertype'] = 'admin';
        $_SESSION['name'] = $uname;
        header('Location:admin/index.php');

}elseif(mysqli_num_rows($result2)==1){
echo"successfully loged in";
    $res = mysqli_fetch_assoc($result2);
    $_SESSION['usertype'] ='user';
    $_SESSION['email'] = $res['email'];
    $_SESSION['fname'] = $res['fname'];
    $_SESSION['name'] = $res['lname'];
    $_SESSION['userid'] = $res['id'];
    header('Location:user/index.php');




}else{



header('Location:login.php');
}
}


if($_POST['action']=='signUp'){

$error =0;
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass =  $_POST['pass1'];


$sql = "select * from users where email = '$email'";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$error++;


}else{

  $sqlx = "insert into users (fname,lname,email,phone,password) values('$fname','$lanme','$phone','$email','$pass')";


    mysqli_query($conn,$sqlx);
}
if ($error > 0) {
            $output = [
        'status' => false,
        'msg' => 'email already exists',
    ];
        } else {
            $output = [
        'status' => true,
        'msg' => 'user created successfully please login',
    ];
        }

 echo json_encode($output);
}
}




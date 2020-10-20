<?php

require 'config.php';
session_start();

// if(isset($POST['uname'])){
     var_dump($_POST);
$uname = $_POST['uname'];
$upass = $_POST['upass'];

echo $sql = "select * from  admin where username = '$uname' and password = '$upass'";
echo $sqlx = "select * from users where email ='$uname' and password ='$upass'";

$result1 = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sqlx);
var_dump($result1);


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

// }


// var_dump($_SESSION['usertype']);





















// if ($result = mysqli_query($conn, $sqlx)) {
//     if (mysqli_num_rows($result) == 1) {
//         $_SESSION['usertype'] = 'admin';
//         $_SESSION['name'] = $uname;
//     } else {
//         if ($result = mysqli_query($conn, $sqlx)) {
//             if (mysqli_num_rows($result) == 1) {
//                 if ($res = mysqli_fetch_assoc($result)) {
//                     echo 'success';
//                     $_SESSION['email'] = $res['email'];
//                     $_SESSION['fname'] = $res['fname'];
//                     $_SESSION['name'] = $res['lname'];
//                     $_SESSION['userid'] = $res['id'];
//                 }
//             }
//         }
//     }

//     // }
// }

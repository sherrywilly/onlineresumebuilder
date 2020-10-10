<?php

require 'config.php';

// var_dump($_POST);

// if(isset($POST['uname'])&& isset($_POST['upass'])){
$uname = 'admin@gmail.com';                     //$_POST['uname'];
$upass = 'admin@123';                       //$_POST['upass'];

$sql = "select * from  admin where username='$uname' and password = '$upass'";
$sqlx = "select * from users where email ='$uname' and password ='$upass'";

if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['usertype'] = 'admin';
        $_SESSION['name'] = $uname;
    } else {
        if ($result = mysqli_query($conn, $sqlx)) {
            if (mysqli_num_rows($result) == 1) {
                if ($res = mysqli_fetch_assoc($result)) {
                    echo 'success';
                    $_SESSION['email'] = $res['email'];
                    $_SESSION['fname'] = $res['fname'];
                    $_SESSION['name'] = $res['lname'];
                    $_SESSION['userid'] = $res['id'];
                }
            }
        }
    }

    // }
}

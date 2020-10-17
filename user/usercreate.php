<?php

error_reporting(0);
require '../config.php';

if (isset($_POST['var'])) {
    if ($_POST['var'] == 'insert') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $add = $_POST['address'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fresh = $_POST['fresher'];
        $uid = 1;

        $sql = "insert into resume_build(fname,lname,address,dob,email,phone,fresher,uid) values ('$fname','$lname','$add','$dob','$email','$phone','$fresh','$uid')";

        if (mysqli_query($conn, $sql) == true) {
            $last_id = mysqli_insert_id($conn);
        } else {
            ++$error;
            $msg = 'unknown error occured';
        }

        if ($error > 0) {
            $output = [
        'status' => false,
        'msg' => $msg,
    ];
        } else {
            $output = [
        'status' => true,
        'msg' => 'user inserted successfully',
        'get_id' => $last_id,
    ];
        }
    } elseif ($_POST['var'] == 'update') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $add = $_POST['address'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fresh = $_POST['fresher'];
        $id = $_POST['rid'];

        $sql = "update resume_build set fname ='$fname',
        lname ='$lname',
        address = '$add',
        dob ='$dob',
        email = '$email',
        phone ='$phone',
        fresher ='$fresh' where id ='$id'";

        if (mysqli_query($conn, $sql) == true) {
            $last_id = mysqli_insert_id($conn);
        } else {
            ++$error;
            $msg = 'unknown error occured';
        }

        if ($error > 0) {
            $output = [
        'status' => false,
        'msg' => $msg,
    ];
        } else {
            $output = [
        'status' => true,
        'msg' => 'user updated successfully',
        'get_id' => $id,
    ];
        }
    }
    echo json_encode($output);
}

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'fetch-user') {
        $id = $_POST['fetch-user-id'];

        $sql = "select * from resume_build where id ='$id'";

        $result = mysqli_query($conn, $sql);
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

<?php

error_reporting(0);
require '../config.php';

if (isset($_POST['insert'])) {
    $error = 0;
    if ($_POST['insert'] == 'skill') {
        $skill = $_POST['skill'];
        $rid = $_POST['rid'];
        $sql = "insert into skills(rid,skill) values('$rid','$skill')";
        if (mysqli_query($conn, $sql) == true) {
            $msg = 'data inserted successfuly';
        } else {
            ++$error;
        }
    } elseif ($_POST['insert'] == 'hobbie') {
        $rid = $_POST['rid'];
        $hobbie = $_POST['hobbie'];
        $sql = "insert into hobbies(rid,hobbie) values('$rid','$hobbie')";
        if (mysqli_query($conn, $sql) == true) {
            $msg = 'data inserted successfuly';
        } else {
            ++$error;
        }
    } else {
    }
    if ($error > 0) {
        $output = [
        'error' => true,
        'msg' => 'some thing went wrong',
    ];
    } else {
        $output = [
    'success' => true,
    'msg' => $msg,
];
    }
}

echo json_encode($output);

<?php

require '../config.php';

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'delete-user') {
        $id = $_POST['d_id'];
        $sql = "delete from users where id ='$id'";

        if (mysqli_query($conn, $sql) == true) {
            $output = [
         'success' => true,
         'msg' => 'user deleted successfully',
        ];
        } else {
            $output = [
         'success' => false,
         'msg' => 'unknown error occured',
        ];
        }
    }

    //deleteting the template

    if ($_POST['action'] == 'template-drop') {
        $id = $_POST['id'];
        $sql = "delete from template where id ='$id'";

        if (mysqli_query($conn, $sql) == true) {
            $output = [
         'success' => true,
         'msg' => 'user deleted successfully',
        ];
        } else {
            $output = [
         'success' => true,
         'msg' => 'unknown error occured',
        ];
        }
    }

    echo json_encode($output);
}

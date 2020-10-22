<?php

error_reporting(0);
    require '../config.php';

    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'delete_resume') {
            $table = $_POST['t_name'];
            $id = $_POST['id'];
            $sql = "delete from $table where id = '$id'";
            if (mysqli_query($conn, $sql) == true) {
                $output = [
            'status' => true,
            'msg' => 'data deleted successfully',
            ];
            } else {
                $output = [
            'status' => false,
            'msg' => 'unable to delete the data',
            ];
            }
            echo json_encode($output);
        }

        if ($_POST['action'] == 'edu-drop') {
            $table = $_POST['t_name'];
            $id = $_POST['id'];
            $sql = "delete from $table where id = '$id'";
            if (mysqli_query($conn, $sql) == true) {
                $output = [
            'status' => true,
            'msg' => 'data deleted successfully',
            ];
            } else {
                $output = [
            'status' => false,
            'msg' => 'unable to delete the data',
            ];
            }
            echo json_encode($output);
        }

        if ($_POST['action'] == 'work-drop') {
            $table = $_POST['t_name'];
            $id = $_POST['id'];
            $sql = "delete from $table where id = '$id'";
            if (mysqli_query($conn, $sql) == true) {
                $output = [
            'status' => true,
            'msg' => 'data deleted successfully',
            ];
            } else {
                $output = [
            'status' => false,
            'msg' => 'unable to delete the data',
            ];
            }
            echo json_encode($output);
        }
        if ($_POST['action'] == 'skill-drop') {
            $table = $_POST['t_name'];
            $id = $_POST['id'];
            $sql = "delete from $table where id = '$id'";
            if (mysqli_query($conn, $sql) == true) {
                $output = [
            'status' => true,
            'msg' => 'data deleted successfully',
            ];
            } else {
                $output = [
            'status' => false,
            'msg' => 'unable to delete the data',
            ];
            }
            echo json_encode($output);
        }
        if ($_POST['action'] == 'hobbie-drop') {
            $table = $_POST['t_name'];
            $id = $_POST['id'];
            $sql = "delete from $table where id = '$id'";
            if (mysqli_query($conn, $sql) == true) {
                $output = [
            'status' => true,
            'msg' => 'data deleted successfully',
            ];
            } else {
                $output = [
            'status' => false,
            'msg' => 'unable to delete the data',
            ];
            }
            echo json_encode($output);
        }
    }

<?php
// session_start();
$host = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'resumebuilder';

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('failed to connect with database'.mysqli_connect_error());
} else {
    //  echo "db connection success";
}

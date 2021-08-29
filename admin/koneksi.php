<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'kominfo';

$con = mysqli_connect($server, $user, $password, $db);
if ($con->connect_error) {
    die('Koneksi Database gagal :' . $con->connect_error);
}

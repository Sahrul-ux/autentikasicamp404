<?php

$server = 'localhost';
$user   =  'root';
$password = '';
$nama_database = 'camp404';

$connection = mysqli_connect($server, $user, $password, $nama_database);

if (mysqli_connect_errno()) {
    echo 'koneksi database gagal! :' . mysqli_connect_error();
}

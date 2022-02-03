<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "e_staff_ups";

$koneksi = mysqli_connect($server, $username, $password, $db) or die(mysqli_error($koneksi));

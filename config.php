<?php
$hostname = 'localhost';
$username = 'root'; // Ganti jika diperlukan
$password = ''; // Ganti jika diperlukan
$db_name = 'rosok_coding';

$db = mysqli_connect($hostname, $username, $password, $db_name);

if ($db->connect_error) {
    echo "Koneksi Database Rusak";
    die("errorr!");
}



?>

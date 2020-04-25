<?php 
    // connect ke database
    $DB_HOST     = "localhost";
    $DB_DATABASE = "db_starbhak";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";
    $DB_PORT     = "3306";
    // create connection
    $koneksi = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD,  $DB_DATABASE, $DB_PORT);
    // check connection
    if($koneksi->connect_error) {
        die('Koneksi Gagal :' .$koneksi->connect_error);
    }
    return $koneksi;
 
 ?>
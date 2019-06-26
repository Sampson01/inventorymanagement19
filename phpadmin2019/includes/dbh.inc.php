<?php

// $servername = "localhost";
// $dBUsername = "root";
// $dBPassword = "root";
// $dBName = "loginsystem2";
//
// $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

$user = 'root';
$password = 'root';
$db = 'loginsystem2';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$conn = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

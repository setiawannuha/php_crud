<?php

// error_reporting(0);

$host = '127.0.0.1';
$user = 'root';
$pass = 'password';
$dbname = 'db_test';

$con = new mysqli($host, $user, $pass, $dbname);

if($con->connect_error){
  echo "Failed connected to database ".$con->connect_error;
  die();
}

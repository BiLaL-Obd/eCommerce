<?php
session_start();

define('SUBURL', "http://localhost/eCommerce/");
define('LOCALHOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_NAME', "ecommerce");


$conn = mysqli_connect(LOCALHOST, DB_USER, DB_PASS) or die(mysqli_error($conn));
$db_name = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

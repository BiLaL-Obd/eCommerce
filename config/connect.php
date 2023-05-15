<?php
session_start();

define('SUBURL', "http://localhost/eCommerce/");
define('URLIMG', "http://localhost/eCommerce/admin/assets/img/");
define("UPLOADS_IMG", "C:/wamp64/www/eCommerce/admin/assets/img/");
define('LOCALHOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_NAME', "ecommerce");

// icons
define("SUCCESS", "<i class='fa fa-check-circle m-r-10'></i>");
define("WARNING", "<i class='fa fa-warning m-r-10'></i>");
define("ERROR", "<i class='fa fa-times-rectangle m-r-10'></i>");


$conn = mysqli_connect(LOCALHOST, DB_USER, DB_PASS) or die(mysqli_error($conn));
$db_name = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

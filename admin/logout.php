<?php include("../config/connect.php") ?>
<?php
session_unset();
session_destroy();
header("location:" . SUBURL . "admin/");
exit();

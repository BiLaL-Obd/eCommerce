<?php include("../../config/connect.php") ?>
<?php
if (isset($_POST['login'])) {
    echo "hello";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from crm_users WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $_SESSION['user'] = $username;
            header("location:" . SUBURL . "admin/");
        } else {
            header("location:" . SUBURL . "admin/login.php");
        }
    }
}

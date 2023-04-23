<?php include("../../config/connect.php") ?>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from crm_users WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $users = mysqli_fetch_all($res,MYSQLI_ASSOC);
            foreach($users as $user) {
                $_SESSION['user'] = $user['username'];
                $_SESSION['user_id'] = $user['id'];
            }
            header("location:" . SUBURL . "admin/");
        } else {
            header("location:" . SUBURL . "admin/login.php");
        }
    }
}

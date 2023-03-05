<?php include("../../config/connect.php") ?>
<?php
if ($_GET['action'] == "add") {
    if (isset($_POST['add-user'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $initials = strtoupper($_POST['initials']);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];

        if (isset($_POST['active'])) {
            $active = 1;
        } else {
            $active = 0;
        }

        $sql = "SELECT * FROM crm_users WHERE username = '$username'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            if (!mysqli_num_rows($res) > 0) {
                $sql2 = "INSERT INTO crm_users SET 
                    fullname = '$fullname',
                    username = '$username',
                    initials = '$initials',
                    email = '$email',
                    password = '$password',
                    phone = '$phone',
                    role = '$role',
                    isActive = '$active'
                ";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2) {
                    $_SESSION['add'] = "<div class='text-success'>Username has Added</div>";
                    header("location:" . SUBURL . "admin/users.php");
                } else {
                    echo "faild";
                }
            } else {
                $_SESSION['add'] = "<div class='text-danger'>This Username has exist please choose another one</div>";
                header("location:" . SUBURL . "admin/users.php");
            }
        }
    }
}

if ($_GET['action'] == "delete") {
    $id = $_GET['id'];
    $sql = "DELETE FROM crm_users WHERE id =$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:" . SUBURL . "admin/users.php");
    }
}

if ($_GET['action'] == "edit") {
    $id = $_GET['id'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $initials = strtoupper($_POST['initials']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    if (isset($_POST['active'])) {
        $active = 1;
    } else {
        $active = 0;
    }

    $sql = "SELECT * FROM crm_users WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $sql2 = "UPDATE crm_users SET
                fullname = '$fullname',
                username = '$username',
                initials = '$initials',
                email = '$email',
                password = '$password',
                phone = '$phone',
                role = '$role',
                isActive = '$active'
                    WHERE id = $id
            ";
            $res2 = mysqli_query($conn, $sql2);
            if ($res2) {
                $_SESSION['edit'] = "<div class='text-success'>This Username has Edited</div>";
                header("location:" . SUBURL . "admin/users.php");
            } else {
                $_SESSION['edit'] = "<div class='text-danger'>Somthing Wrong,This Username has not Edited</div>";
                header("location:" . SUBURL . "admin/users.php");
            }
        }
    }
}
?>
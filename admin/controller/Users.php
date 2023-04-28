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
        $salery = $_POST['salery'];

        if (isset($_POST['active'])) {
            $active = 1;
        } else {
            $active = 0;
        }

        if($role == "admin") {
            $color = "success";
        }else {
            $color = "danger";
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
                    salery='$salery',
                    isActive = '$active'
                ";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2) {
                    $_SESSION['add'] = "<div class='bg-success'>Username has Added </div>";
                    header("location:" . SUBURL . "admin/users.php");
                } else {
                    echo "faild";
                }
            } else {
                $_SESSION['add'] = "<div class='bg-warning'>This Username has exist please choose another one </div>";
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
        $_SESSION['delete'] = "<div class='bg-success'>Username has Deleted</div>";
        header("location:" . SUBURL . "admin/users.php");
    } else {
        $_SESSION['delete'] = "<div class='bg-danger'>Something Wrong The Username has not Deleted</div>";
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
    $salery = $_POST['salery'];

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
                salery='$salery',
                isActive = '$active'
                    WHERE id = $id
            ";
            $res2 = mysqli_query($conn, $sql2);
            if ($res2) {
                $_SESSION['edit'] = "<div class='bg-success'>This Username has Edited</div>";
                header("location:" . SUBURL . "admin/users.php");
            } else {
                $_SESSION['edit'] = "<div class='bg-danger'>Somthing Wrong,This Username has not Edited</div>";
                header("location:" . SUBURL . "admin/users.php");
            }
        }
    }
}

if ($_GET['action'] == "manage") {
    if (isset($_POST['view'])) {
        echo $view = implode(",", $_POST['view']);
    }
    // echo "ehllo ";
}
?>
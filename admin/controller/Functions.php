<?php
function isAdmin()
{
    global $conn;
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM crm_users WHERE id = '$userId'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $users = mysqli_fetch_all($res, MYSQLI_ASSOC);
            foreach ($users as $user) {
                if ($user['role'] == "admin") {
                    return true;
                }else {
                    return false;
                }
            }
        }
    }
}
function getFetchAll($sql) {
    global $conn;
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            return mysqli_fetch_all($res, MYSQLI_ASSOC);
            mysqli_free_result($res);
        }
    }
}
function getCount($table)
{
    global $conn;
    $sql = "SELECT COUNT(*) FROM $table";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        return mysqli_fetch_column($res);
    }
}

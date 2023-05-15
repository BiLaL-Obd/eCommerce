<?php include("../../config/connect.php") ?>
<?php
$userId = $_SESSION['user_id'];
if ($_GET['action'] == "add") {
    if (isset($_POST['add-blog'])) {
        $title = $_POST["title"];
        $desc = $_POST['description'];
        $cat_id = $_POST["category"];

        $imgName = $_FILES["img"]["name"];
        $imgTemp = $_FILES["img"]["tmp_name"];

        if (isset($_FILES["img"]["name"]) && $_FILES["img"]["error"] == 0) {
            $img = "Blog" . rand(0, 999) . "_$imgName";
            move_uploaded_file($imgTemp, UPLOADS_IMG . $img);
        } else {
            $img = "";
        }

        if (isset($_POST['visible'])) {
            $visible = 1;
        } else {
            $visible = 0;
        }

        $sql = "SELECT * FROM blogs WHERE title = '$title' AND description = '$desc'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            if (!mysqli_num_rows($res) > 0) {
                $sql2 = "INSERT INTO blogs SET 
                title = '$title',
                description = '$desc',
                image = '$img',
                isVisible = '$visible',
                cat_id = '$cat_id',
                added_by = '$userId'
                ";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2) {
                    $_SESSION['add'] = "<div class='bg-success'>" . SUCCESS . "The Blog has Added</div>";
                    header("location:" . SUBURL . "admin/blogs.php");
                }
            } else {
                $_SESSION['add'] = "<div class='bg-warning'>" . WARNING . "This Blog has Exsits</div>";
                header("location:" . SUBURL . "admin/blogs.php");
            }
        }
    }
}

if ($_GET['action'] == "delete") {
    $id = $_GET['id'];
    $sql = "DELETE FROM blogs WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['delete'] = "<div class='bg-success'>" . SUCCESS . "This Blog has deleted</div>";
        header("location:" . SUBURL . "admin/blogs.php");
    } else {
        $_SESSION['delete'] = "<div class='bg-danger'>" . ERROR . "Somthing Wrong please check again</div>";
        header("location:" . SUBURL . "admin/blogs.php");
    }
}

if ($_GET['action'] == "edit") {
    if (isset($_POST['edit-blog'])) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $category = $_POST['category'];

        $imgName = $_FILES["imgBlog"]['name'];
        $imgTmp = $_FILES["imgBlog"]['tmp_name'];
        if (isset($imgName) && $_FILES["imgBlog"]["error"] == 0) {
            $img = "Blog" . rand(0, 999) . "_$imgName";
            move_uploaded_file($imgTmp, UPLOADS_IMG . $img);
        } else {
            $img = "";
        }
        if (isset($_POST['active'])) {
            $active = 1;
        } else {
            $active = 0;
        }

        $sql = "SELECT * FROM blogs WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            if (mysqli_num_rows($res) > 0) {
                $sql2 = "UPDATE blogs SET 
                title = '$title',
                description = '$desc',
                image = '$img',
                cat_id = '$category',
                isVisible = '$active',
                edit_by = '$userId'
                WHERE id = $id";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2) {
                    $_SESSION['edit'] = "<div class='bg-success'>" . SUCCESS . "This Blog has edit</div>";
                    header("location:" . SUBURL . "admin/blogs.php");
                } else {
                    $_SESSION['edit'] = "<div class='bg-danger'>" . ERROR . "Somthing Wrong please check again</div>";
                    header("location:" . SUBURL . "admin/blogs.php");
                }
            }
        }
    }
}

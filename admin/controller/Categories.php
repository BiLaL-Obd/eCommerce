<?php include("../../config/connect.php") ?>
<?php

if ($_GET['action'] == "add") {
    if (isset($_POST['add-category'])) {


        $en_category_name = $_POST['en_cat_name'];
        $ar_category_name = $_POST['ar_cat_name'];
        if (isset($_POST['active'])) {
            $active = 1;
        } else {
            $active = 0;
        }

        $sql = "SELECT * FROM categories WHERE en_category_name = '$en_category_name' OR ar_category_name = '$ar_category_name'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            if (!mysqli_num_rows($res) > 0) {

                $sql2 = "INSERT INTO categories SET 
                            en_category_name = '$en_category_name',
                            ar_category_name = '$ar_category_name',
                            isActive = '$active'
                        ";
                $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                if ($res2) {
                    $_SESSION['add'] = "<div class='text-success'>Category has Added</div>";
                    header("location:" . SUBURL . "admin/categories.php");
                } else {
                    echo 'failed';
                }
            } else {
                $_SESSION['add'] = "<div class='text-danger'>This Category has Exist</div>";
                header("location:" . SUBURL . "admin/categories.php");
            }
        }
    }
}

if ($_GET['action'] == "delete") {
    $id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE cat_id = $id ";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location: " . SUBURL . "admin/categories.php");
    }
}

if ($_GET['action'] == "edit") {
    $id = $_GET['id'];
    $en_category_name = $_POST['en_cat_name'];
    $ar_category_name = $_POST['ar_cat_name'];
    if (isset($_POST['active'])) {
        $active = 1;
    } else {
        $active = 0;
    }

    $sql = "SELECT * FROM categories WHERE cat_id = $id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $sql2 = "UPDATE categories SET 
                en_category_name = '$en_category_name',
                ar_category_name = '$ar_category_name',
                isActive = $active
                WHERE cat_id = $id
            ";
            $res2 = mysqli_query($conn, $sql2);
            if ($res2) {
                $_SESSION['update'] = "<div class='text-success'>Category has Updated</div>";
                header("location:" . SUBURL . "admin/categories.php");
            } else {
                header("location:" . SUBURL . "admin/categories.php");
                $_SESSION['update'] = "<div class='text-danger'>SomThing Wrong ,Category has Not Updated</div>";
            }
        }
    }
}
?>

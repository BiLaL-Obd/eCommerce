<?php include("../../config/connect.php") ?>
<?php
$userId = $_SESSION['user_id'];
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
                            isActive = '$active',
                            added_by='$userId'
                        ";
                $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                if ($res2) {
                    $_SESSION['add'] = "<div class='bg-success'>Category has Added</div>";
                    header("location:" . SUBURL . "admin/categories.php");
                } else {
                    echo 'failed';
                }
            } else {
                $_SESSION['add'] = "<div class='bg-warning'>This Category has Exist</div>";
                header("location:" . SUBURL . "admin/categories.php");
            }
        }
    }
}

if ($_GET['action'] == "delete") {
    $id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE id = $id ";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['delete'] = '<div class="bg-success">This Category has Deleted</div>';
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

    $sql = "SELECT * FROM categories WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $sql2 = "UPDATE categories SET 
                en_category_name = '$en_category_name',
                ar_category_name = '$ar_category_name',
                isActive = $active,
                edit_by ='$userId'
                WHERE id = $id
            ";
            $res2 = mysqli_query($conn, $sql2);
            if ($res2) {
                $_SESSION['edit'] = "<div class='bg-success'>Category has Updated</div>";
                header("location:" . SUBURL . "admin/categories.php");
            } else {
                header("location:" . SUBURL . "admin/categories.php");
                $_SESSION['edit'] = "<div class='bg-danger'>SomThing Wrong ,Category has Not Updated</div>";
            }
        }
    }
}
?>

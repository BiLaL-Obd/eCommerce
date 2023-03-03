<?php include("../../config/connect.php") ?>
<?php
if (isset($_POST['add-category'])) {
    $category_name = $_POST['cat_name'];
    $category_quantity = $_POST['cat_quantity'];

    $sql = "SELECT * FROM categories WHERE category_name = '$category_name'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (!mysqli_num_rows($res) > 0) {
            $sql2 = "INSERT INTO categories SET 
                        category_name = '$category_name',
                        quantity = '$category_quantity'
                    ";
            $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
            if ($res2) {
                $_SESSION['add'] = "Category has Added";
                header("location:" . SUBURL . "admin/categories.php");
            } else {
                echo 'failed';
            }
        } else {
            $_SESSION['add'] = "This Category has Exist";
            header("location:" . SUBURL . "admin/categories.php");
        }
    }
}
?>

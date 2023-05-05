<?php include("../../config/connect.php") ?>
<?php
$userId = $_SESSION['user_id'];
if ($_GET['action'] == "add") {
    // if (isset($_POST['add-blog'])) {
    //     $title = $_POST["title"];
    //     $desc = $_POST['description'];
    //     // $img = $_POST['img'];
    //     $cat_id = $_POST["category"];

    //     if (isset($_POST['visible'])) {
    //         $visible = 1;
    //     } else {
    //         $visible = 0;
    //     }

    //     $sql = "SELECT * FROM blogs WHERE title = '$title' AND description = '$desc'";
    //     $res = mysqli_query($conn, $sql);
    //     if ($res) {
    //         if (!mysqli_num_rows($res) > 0) {
    //             $sql2 = "INSERT INTO blogs SET 
    //             title = '$title',
    //             description = '$desc',
    //             isVisible = '$visible',
    //             cat_id = '$cat_id',
    //             added_by = '$userId'
    //             ";
    //             $res2 = mysqli_query($conn, $sql2);
    //             if ($res2) {
    //                 $_SESSION['add'] = "<div class='bg-success'>The Blog has Added</div>";
    //                 header("location:" . SUBURL . "admin/blogs.php");
    //             } 
    //         } else {
    //             $_SESSION['add'] = "<div class='bg-warning'>This Blog has Exsits</div>";
    //             header("location:" . SUBURL . "admin/blogs.php");
    //         }
    //     }
    // }
        print_r($_FILES['img']);
    $imgName = $_FILES["img"]["name"];
    $imgTemp = $_FILES["img"]["tmp_name"];

    $img = "Blog" . rand(0, 999) . "_" . $imgName;
    move_uploaded_file($imgTemp,SUBURL."admin/assets/img/blogs/".$img);
    // move_uploaded_file($imgTemp,SUBURL."admin/assets/img/clients/".$img);
}

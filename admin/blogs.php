<?php include('partials/head.php') ?>
<?php include('partials/header.php') ?>
<?php include('partials/sidebar.php') ?>
<?php $blogPath = "admin/controller/Blogs.php"; ?>

<?php
$sql = "SELECT blogs.*, 
               added_user.initials AS added_by, 
               edit_user.initials AS edit_by,
               categories.en_category_name
        FROM blogs 
        INNER JOIN categories ON blogs.cat_id = categories.id
        INNER JOIN crm_users ON blogs.added_by = crm_users.id 
        LEFT JOIN crm_users AS added_user ON blogs.added_by = added_user.id 
        LEFT JOIN crm_users AS edit_user ON blogs.edit_by = edit_user.id 
        ORDER BY id DESC";

$blogs = getFetchAll($sql);
?>
<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Blogs</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Blogs</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add_blog"><i class="fa fa-plus"></i> Add Blog</a>
                </div>
                <div class="col-12">
                    <?php include("partials/sessions.php") ?>
                </div>
            </div>
        </div>
        <!-- /Page Header -->


        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>Img</th>
                                <th>Title</th>
                                <th>Category Name</th>
                                <th>Visible</th>
                                <th>Added</th>
                                <th>Last Edit</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($blogs)) {
                                foreach ($blogs as $blog) { ?>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <?php if (!$blog['image'] == "") { ?>
                                                    <div class="avatar img-blog"><img src="<?= SUBURL . "admin/assets/img/" . $blog['image'] ?>" alt=""></div>
                                                <?php } else { ?>
                                                    <div class="badge bg-inverse-danger">No Image To Set</div>

                                                <?php } ?>
                                            </h2>
                                        </td>
                                        <td><?= $blog['title'] ?></td>
                                        <td><?= $blog["en_category_name"] ?></td>
                                        <td>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" disabled class="custom-control-input" id="active-<?= $blog['id'] ?>" <?= $blog['isVisible'] == "1" ? "checked" : "" ?>>
                                                <label class="custom-control-label" for="active-<?= $blog['id'] ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-inverse-<?= role($blog['added_by']) ? 'success' : 'primary' ?>"><?= $blog["added_by"] ?></span>
                                        </td>
                                        <td>
                                            <?php if (isset($blog['edit_by'])) { ?>
                                                <span class="badge bg-inverse-<?= role($blog['edit_by']) ? "success" : "primary" ?>"><?= $blog['edit_by'] ?></span>
                                            <?php } else { ?>
                                                <span class="badge bg-dark text-white">AD</span>
                                            <?php } ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user_<?= $blog['id'] ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <?php if (isAdmin()) { ?>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user_<?= $blog['id'] ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Add User Modal -->
    <div id="add_blog" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= SUBURL . $blogPath . "?action=add" ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Blog Title" name="title" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category Name <span class="text-danger">*</span></label>
                                    <select name="category" class="select">
                                        <?php
                                        $sql = "SELECT * FROM categories WHERE isActive = '1'";
                                        $cats = getFetchAll($sql);
                                        foreach ($cats as $cat) { ?>
                                            <option value="<?= $cat['id'] ?>"><?= $cat['en_category_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea name="description" placeholder="Blog Description" class="form-control" id="" rows="2" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <label for="">Upload Photo <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="img" id="" accept=" .png, .jpg, .png, .webp">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label>Visible <span class="text-danger">*</span></label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="visible" class="custom-control-input" id="add-active">
                                    <label class="custom-control-label" for="add-active"></label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" name="add-blog">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add User Modal -->

    <!-- Edit User Modal -->
    <?php if (isset($blogs)) {
        foreach ($blogs as $blog) { ?>
            <div id="edit_user_<?= $blog['id'] ?>" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Blog <?= $blog['title'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= SUBURL . $blogPath . "?id=" . $blog['id'] . "&action=edit" ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Blog Title" name="title" value="<?= $blog['title'] ?>" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Category Name <span class="text-danger">*</span></label>
                                            <select name="category" class="select">

                                                <?php
                                                $sql = "SELECT * FROM categories WHERE isActive = '1'";
                                                $cats = getFetchAll($sql);
                                                foreach ($cats as $cat) { ?>
                                                    <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $blog['cat_id'] ? "selected" : "" ?>><?= $cat['en_category_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Description <span class="text-danger">*</span></label>
                                            <textarea name="description" placeholder="Blog Description" value="<?= $blog['description'] ?>" class="form-control" id="" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="">Upload Photo <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="imgBlog" id="" value="<?= $blog['image'] ?>">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>Visible <span class="text-danger">*</span></label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="active" class="custom-control-input" id="edit-active-<?= $blog['id'] ?>" <?= $blog['isVisible'] == 1 ? "checked" : "" ?>>
                                            <label class="custom-control-label" for="edit-active-<?= $blog['id'] ?>"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit" name="edit-blog">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <!-- /Edit User Modal -->

    <!-- Delete User Modal -->
    <?php if (isset($blogs)) {
        foreach ($blogs as $blog) { ?>
            <div class="modal custom-modal fade" id="delete_user_<?= $blog['id'] ?>" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete User</h3>
                                <p>Are you sure want to delete <?= $blog['title'] ?>?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="<?= SUBURL . $blogPath . "?id=" . $blog['id'] . "&action=delete" ?>" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <!-- /Delete User Modal -->

</div>
<!-- /Page Wrapper -->

<?php include('partials/footer.php') ?>

<?php include('partials/foot.php') ?>
<?php include('partials/head.php') ?>
<?php include('partials/header.php') ?>
<?php include('partials/sidebar.php') ?>

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
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Blogs</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add_blog"><i class="fa fa-plus"></i> Add Blog</a>
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
                                <th>Active</th>
                                <th>Added</th>
                                <th>Last Edit</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <div class="avatar img-blog"><img src="assets/img/profiles/avatar-21.jpg" alt=""></div>
                                    </h2>
                                </td>
                                <td>Title </td>
                                <td>Phone</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" disabled class="custom-control-input" id="active-1">
                                        <label class="custom-control-label" for="active-1"></label>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-inverse-danger">BO</span>
                                </td>
                                <td>
                                    <span class="badge bg-inverse-danger">BO</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Blog Title" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category Name <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Phone</option>
                                        <option>TV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea name="" placeholder="Blog Description" class="form-control" id="" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <label for="">Upload Photo <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="imgBlog" id="">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label>Visible <span class="text-danger">*</span></label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="active" class="custom-control-input" id="add-active-1">
                                    <label class="custom-control-label" for="add-active-1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add User Modal -->

    <!-- Edit User Modal -->
    <div id="edit_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Blog Title" value="test" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category Name <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Phone</option>
                                        <option>TV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea name="" placeholder="Blog Description" class="form-control" id="" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <label for="">Upload Photo <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="imgBlog" id="">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label>Visible <span class="text-danger">*</span></label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="active" class="custom-control-input" id="add-active-1">
                                    <label class="custom-control-label" for="add-active-1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit User Modal -->

    <!-- Delete User Modal -->
    <div class="modal custom-modal fade" id="delete_user" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete User</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
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
    <!-- /Delete User Modal -->

</div>
<!-- /Page Wrapper -->

<?php include('partials/footer.php') ?>

<?php include('partials/foot.php') ?>
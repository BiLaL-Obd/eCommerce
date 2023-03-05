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
					<h3 class="page-title">Users</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Users</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Add User</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<!-- Search Filter -->
		<!-- <div class="row">
			<div class="col-9">
				<div class="form-group form-focus">
					<input type="text" class="form-control form-control-sm floating">
					<label class="focus-label">Name</label>
				</div>
			</div>
			<div class="col-2">

			</div>

			<div class="col-1">
				<a href="#" class="btn btn-sm btn-success btn-block"> Search </a>
			</div>
		</div> -->
		<!-- /Search Filter -->

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped custom-table ">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Username</th>
								<th>Initails</th>
								<th>Active</th>
								<th>Role</th>
								<th class="text-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<h2 class="table-avatar">
										<a href="profile.html">Daniel Porter <span>Admin</span></a>
									</h2>
								</td>
								<td>danielporter@example.com</td>
								<td>DP</td>
								<td>
									<div class="custom-control custom-switch">
										<input type="checkbox" disabled class="custom-control-input" id="active-1">
										<label class="custom-control-label" for="active-1"></label>
									</div>
								</td>
								<td>
									<span class="badge bg-inverse-danger">Admin</span>
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
							<tr>
								<td>
									<h2 class="table-avatar">
										<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
										<a href="profile.html">John Doe <span>Web Designer</span></a>
									</h2>
								</td>
								<td>johndoe@example.com</td>
								<td>Dreamguy's Technologies</td>
								<td>1 Jan 2013</td>
								<td>
									<span class="badge bg-inverse-success">Employee</span>
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
							<tr>
								<td>
									<h2 class="table-avatar">
										<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
										<a href="profile.html">Richard Miles <span>Admin</span></a>
									</h2>
								</td>
								<td>richardmiles@example.com</td>
								<td>Dreamguy's Technologies</td>
								<td>1 Jan 2013</td>
								<td>
									<span class="badge bg-inverse-success">Employee</span>
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
							<tr>
								<td>
									<h2 class="table-avatar">
										<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
										<a href="profile.html">John Smith <span>Android Developer</span></a>
									</h2>
								</td>
								<td>johnsmith@example.com</td>
								<td>Dreamguy's Technologies</td>
								<td>1 Jan 2013</td>
								<td>
									<span class="badge bg-inverse-success">Employee</span>
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
							<tr>
								<td>
									<h2 class="table-avatar">
										<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
										<a href="profile.html">Mike Litorus <span>IOS Developer</span></a>
									</h2>
								</td>
								<td>mikelitorus@example.com</td>
								<td>Dreamguy's Technologies</td>
								<td>1 Jan 2013</td>
								<td>
									<span class="badge bg-inverse-success">Employee</span>
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
							<tr>
								<td>
									<h2 class="table-avatar">
										<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
										<a href="profile.html">Wilmer Deluna <span>Team Leader</span></a>
									</h2>
								</td>
								<td>wilmerdeluna@example.com</td>
								<td>Dreamguy's Technologies</td>
								<td>1 Jan 2013</td>
								<td>
									<span class="badge bg-inverse-success">Employee</span>
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
							<tr>
								<td>
									<h2 class="table-avatar">
										<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt=""></a>
										<a href="profile.html">Barry Cuda <span>Global Technologies</span></a>
									</h2>
								</td>
								<td>barrycuda@example.com</td>
								<td>Global Technologies</td>
								<td>1 Jan 2013</td>
								<td>
									<span class="badge bg-inverse-info">Client</span>
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
	<div id="add_user" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Full Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Username <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Initials <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Email <span class="text-danger">*</span></label>
									<input class="form-control" type="email">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Confirm Password</label>
									<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Phone </label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Active</label>
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="add-active-1">
										<label class="custom-control-label" for="add-active-1"></label>
									</div>

								</div>
							</div>
						</div>
						<div class="table-responsive m-t-15">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Module Permission</th>
										<th class="text-center">View</th>
										<th class="text-center">Create</th>
										<th class="text-center">Edit</th>
										<th class="text-center">Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Categories</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
									</tr>
									<tr>
										<td>Product</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="submit-section">
							<input type="submit" name="add-user" value="Add User" class="btn btn-primary submit-btn">
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
									<label>Full Name <span class="text-danger">*</span></label>
									<input class="form-control" value="John" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Username <span class="text-danger">*</span></label>
									<input class="form-control" value="johndoe" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Initials <span class="text-danger">*</span></label>
									<input class="form-control" value="JD" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Emails <span class="text-danger">*</span></label>
									<input class="form-control" value="johndoe@jodiec.com" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Confirm Password</label>
									<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Phone </label>
									<input class="form-control" value="9876543210" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Active</label>
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="edit-active-1">
										<label class="custom-control-label" for="edit-active-1"></label>
									</div>

								</div>
							</div>
						</div>
						<div class="table-responsive m-t-15">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Module Permission</th>
										<th class="text-center">View</th>
										<th class="text-center">Create</th>
										<th class="text-center">Edit</th>
										<th class="text-center">Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Categories</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
									</tr>
									<tr>
										<td>Product</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
										<td class="text-center">
											<input type="checkbox">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="submit-section">
							<input type="submit" value="Edit User" name="edit-user" class="btn btn-primary submit-btn">
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
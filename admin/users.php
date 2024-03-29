<?php include('partials/head.php') ?>
<?php include('partials/header.php') ?>

<?php include('partials/sidebar.php') ?>
<?php $userPath = "admin/controller/Users.php"; ?>

<?php
$sql = "SELECT * FROM crm_users ORDER BY id DESC";
$users = getFetchAll($sql);
?>
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
				<div class="col-12">
					<?php include('partials/sessions.php') ?>
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
								<th>Full Info</th>
								<th>Username</th>
								<th>Initails</th>
								<th>Phone</th>
								<th>Active</th>
								<th>Role</th>
								<th>Salery</th>
								<th class="text-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user) { ?>
								<tr>
									<td>
										<h2 class="table-avatar">
											<a href="profile.html"><?= $user['fullname'] ?> <span><?= $user['email'] ?></span></a>
										</h2>
									</td>
									<td><?= $user['username'] ?></td>
									<td><?= $user['initials'] ?></td>
									<td><?= $user['phone'] ?></td>
									<td>
										<div class="custom-control custom-switch">
											<input type="checkbox" disabled class="custom-control-input" id="active-<?= $user['id'] ?>" <?= $user['isActive'] == 1 ? "checked" : "" ?>>
											<label class="custom-control-label" for="active-<?= $user['id'] ?>"></label>
										</div>
									</td>
									<td>
										<span class="badge bg-inverse-<?= $user['role'] == "admin" ? "danger" : "success" ?>"><?= $user['role'] ?></span>
									</td>
									<td>
										$ <?= $user['salery'] ?>
									</td>
									<td class="text-right">
										<div class="dropdown dropdown-action">
											<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user_<?= $user['id'] ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<?php if (isAdmin()) { ?>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user_<?= $user['id'] ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												<?php } ?>
											</div>
										</div>
									</td>
								</tr>
							<?php } ?>
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
					<form action="<?= SUBURL . $userPath . "?action=add" ?>" method="POST">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Full Name <span class="text-danger">*</span></label>
									<input class="form-control" name="fullname" type="text" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Username <span class="text-danger">*</span></label>
									<input class="form-control" name="username" type="text" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Initials</label>
									<input class="form-control" name="initials" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Email<span class="text-danger">*</span></label>
									<input class="form-control" name="email" type="email" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Password <span class="text-danger">*</span></label>
									<input class="form-control" name="password" type="password" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Phone <span class="text-danger">*</span></label>
									<input class="form-control" name="phone" type="text" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Role<span class="text-danger">*</span></label>
									<select class="select" name="role" required>
										<option value="admin">Admin</option>
										<option value="employee">Employee</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="">Salery<span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">$</span>
									</div>
									<input type="number" name="salery" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Active</label>
									<div class="custom-control custom-switch">
										<input type="checkbox" name="active" class="custom-control-input" id="add-active-1">
										<label class="custom-control-label" for="add-active-1"></label>
									</div>

								</div>
							</div>
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
	<?php foreach ($users as $user) { ?>
		<div id="edit_user_<?= $user['id'] ?>" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit User <?= $user['username'] ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= SUBURL . $userPath . "?id=" . $user['id'] . "&action=edit" ?>" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Full Name <span class="text-danger">*</span></label>
										<input class="form-control" name="fullname" value="<?= $user['fullname'] ?>" type="text" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Username <span class="text-danger">*</span></label>
										<input class="form-control" name="username" value="<?= $user['username'] ?>" type="text" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Initials <span class="text-danger">*</span></label>
										<input class="form-control" name="initials" value="<?= $user['initials'] ?>" type="text" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Emails <span class="text-danger">*</span></label>
										<input class="form-control" name="email" value="<?= $user['email'] ?>" type="email" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Password<span class="text-danger">*</span></label>
										<input class="form-control" name="password" value="<?= $user['password'] ?>" type="password" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Phone <span class="text-danger">*</span></label>
										<input class="form-control" name="phone" value="<?= $user['phone'] ?>" type="text" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Role<span class="text-danger">*</span></label>
										<select class="select" name="role" required>
											<option value="admin" <?= $user['role'] == "admin" ? "selected" : "" ?>>Admin</option>
											<option value="employee" <?= $user['role'] == "employee" ? "selected" : "" ?>>Employee</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<label for="">Salery<span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">$</span>
										</div>
										<input type="number" name="salery" value="<?= $user['salery'] ?>" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Active</label>
										<div class="custom-control custom-switch">
											<input type="checkbox" name="active" class="custom-control-input" id="edit-active-<?= $user['id'] ?>" <?= $user['isActive'] == 1 ? "checked" : "" ?>>
											<label class="custom-control-label" for="edit-active-<?= $user['id'] ?>"></label>
										</div>

									</div>
								</div>
							</div>
							<div class="submit-section">
								<input type="submit" value="Edit User" name="edit-user" class="btn btn-primary submit-btn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- /Edit User Modal -->


	<!-- Delete User Modal -->
	<?php foreach ($users as $user) { ?>
		<div class="modal custom-modal fade" id="delete_user_<?= $user['id'] ?>" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete User</h3>
							<p>Are you sure want to delete <?= $user['username'] ?>?</p>
						</div>
						<div class="modal-btn delete-action">
							<div class="row">
								<div class="col-6">
									<a href="<?= SUBURL . $userPath . "?id=" . $user['id'] . "&action=delete" ?>" class="btn btn-primary continue-btn">Delete</a>
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
	<?php } ?>
	<!-- /Delete User Modal -->

</div>
<!-- /Page Wrapper -->

<?php include('partials/footer.php') ?>
<?php include('partials/foot.php') ?>
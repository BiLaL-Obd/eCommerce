<?php include('partials/head.php') ?>

<?php include('partials/header.php') ?>

<?php include('partials/sidebar.php') ?>
<?php $categoryPath = "admin/controller/Categories.php"; ?>

<?php
$sql = "SELECT categories.*, 
               added_user.initials AS added_by, 
               edit_user.initials AS edit_by
        FROM categories 
        INNER JOIN crm_users ON categories.added_by = crm_users.id 
        LEFT JOIN crm_users AS added_user ON categories.added_by = added_user.id 
        LEFT JOIN crm_users AS edit_user ON categories.edit_by = edit_user.id 
        ORDER BY id DESC";
$cats = getFetchAll($sql);
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Categories</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Categories</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add_categories"><i class="fa fa-plus"></i> Add Categories</a>
				</div>
				<div class="col-12 d-none d-md-block">
					<?php include('partials/sessions.php') ?>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped custom-table mb-0">
						<thead>
							<tr>
								<th>#</th>
								<th>En Name </th>
								<th>Ar Name </th>
								<th>isActive</th>
								<th>Added</th>
								<th>Last Edit</th>
								<th class="text-right">Manage</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$sn = 1;
							if (isset($cats)) {
								foreach ($cats as $cat) { ?>
									<tr>
										<td><?= $sn++ ?></td>
										<td><?= $cat['en_category_name'] ?></td>
										<td><?= $cat['ar_category_name'] ?></td>
										<td>
											<div class="custom-control custom-switch">
												<input type="checkbox" disabled class="custom-control-input" id="active-<?= $cat['id'] ?>" <?= $cat['isActive'] == 1 ? "checked" : "" ?>>
												<label class="custom-control-label" for="active-<?= $cat['id'] ?>"></label>
											</div>
										</td>
										<td><span class="badge bg-inverse-<?= role($cat['added_by']) ? "success" : "danger" ?>"><?= $cat['added_by'] ?></span></td>
										<td>
											<?php if (isset($cat['edit_by'])) { ?>
												<span class="badge bg-inverse-<?= role($cat["edit_by"]) ? "success" : "danger" ?>"><?=$cat['edit_by']?></span>
											<?php } else { ?>
												<span class="badge bg-dark text-white">AD</span>
											<?php } ?>
										</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-categories-<?= $cat['id'] ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_category_<?= $cat['id'] ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
	<!-- Add Category Modal -->
	<div class="modal custom-modal fade" id="add_categories" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Categories</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= SUBURL . $categoryPath . "?action=add" ?>" class="row" method="POST">
						<div class="col-12">
							<div class="form-group">
								<label>EN Categories Name <span class="text-danger">*</span></label>
								<input class="form-control" value="" name="en_cat_name" type="text" required>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>AR Categories Name <span class="text-danger">*</span></label>
								<input class="form-control" value="" name="ar_cat_name" type="text" required>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>isActive <span class="text-danger">*</span></label>
								<div class="custom-control custom-switch">
									<input type="checkbox" name="active" class="custom-control-input" id="add-active-<?= $cat['id'] ?>">
									<label class="custom-control-label" for="add-active-<?= $cat['id'] ?>"></label>
								</div>
							</div>
						</div>

						<div class="submit-section">
							<input type="submit" name="add-category" value="Add Category" class="btn btn-primary btn-sm submit-btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category Modal -->
	<!-- Edit Category Modal -->
	<?php
	if (isset($cats)) {
		foreach ($cats as $cat) { ?>
			<div class="modal custom-modal fade" id="edit-categories-<?= $cat['id'] ?>" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Categories</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="<?= SUBURL . $categoryPath . "?id=" . $cat['id'] . "&action=edit" ?>" method="POST">
								<div class="form-group">
									<label>EN Categories Name <span class="text-danger">*</span></label>
									<input class="form-control" name="en_cat_name" type="text" value="<?= $cat['en_category_name'] ?>">
								</div>
								<div class="form-group">
									<label>AR Categories Name <span class="text-danger">*</span></label>
									<input class="form-control" name="ar_cat_name" type="text" value="<?= $cat['ar_category_name'] ?>">
								</div>
								<div class="form-group">
									<label>isActive <span class="text-danger">*</span></label>
									<div class="custom-control custom-switch">
										<input type="checkbox" name="active" class="custom-control-input" id="edit-active-<?= $cat['id'] ?>" <?= $cat['isActive'] == 1 ? "checked" : "" ?>>
										<label class="custom-control-label" for="edit-active-<?= $cat['id'] ?>"></label>
									</div>
								</div>

								<div class="submit-section">
									<input type="submit" name="edit-category" value="Edit Category" class="btn btn-primary submit-btn">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	<?php }
	} ?>
	<!-- /Edit Category Modal -->

	<!-- Delete Category Modal -->
	<?php if (isset($cats)) {
		foreach ($cats as $cat) { ?>
			<div class="modal custom-modal fade" id="delete_category_<?= $cat['id'] ?>" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Category</h3>
								<p>Are you sure want to delete <?= $cat['en_category_name'] ?>?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<a href="<?= SUBURL . $categoryPath . "?id=" . $cat['id'] ?> &action=delete" class="btn btn-primary continue-btn">Delete</a>
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
	<!-- /Delete Category Modal -->

</div>
<!-- /Page Wrapper -->

<?php include('partials/footer.php') ?>

<?php include('partials/foot.php') ?>
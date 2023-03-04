<?php include('partials/head.php') ?>

<?php include('partials/header.php') ?>

<?php include('partials/sidebar.php') ?>
<?php $categoryPath = "admin/controller/manage-categories.php"; ?>
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
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Categories</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add_categories"><i class="fa fa-plus"></i> Add Categories</a>
				</div>
				<div class="col-12">
					<?php if (isset($_SESSION['add'])) {
						echo $_SESSION['add'];
						unset($_SESSION['add']);
					} ?>
					<?php if (isset($_SESSION['update'])) {
						echo $_SESSION['update'];
						unset($_SESSION['update']);
					} ?>
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
								<th>Category Name </th>
								<th>isActive</th>
								<th class="text-right">Manage</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM categories ORDER BY cat_id DESC";
							$res = mysqli_query($conn, $sql);
							if ($res) {
								if (mysqli_num_rows($res) > 0) {
									$cats = mysqli_fetch_all($res, MYSQLI_ASSOC);
									mysqli_free_result($res);
								}
							}

							?>
							<?php
							$sn = 1;
							foreach ($cats as $cat) { ?>
								<tr>
									<td><?= $sn++ ?></td>
									<td><?= $cat['category_name'] ?></td>
									<td>
										<div class="custom-control custom-switch">
											<input type="checkbox" class="custom-control-input" id="active-<?= $cat['cat_id'] ?>" <?= $cat['isActive'] == 1 ? "checked" : "" ?>>
											<label class="custom-control-label" for="active-<?= $cat['cat_id'] ?>"></label>
										</div>
									</td>
									<td class="d-flex align-items-center justify-content-end gap-2">
										<a class="" href="#" data-toggle="modal" data-target="#edit-categories-<?= $cat['cat_id'] ?>"><i class="fa fa-pencil me-1"></i> Edit</a>
										<a href="<?= SUBURL . "admin/controller/manage-categories.php?id=" . $cat['cat_id'] ?> &action=delete" class=""><i class="fa fa-trash me-1"></i>Delete</a>
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
					<form action="<?= SUBURL . "admin/controller/manage-categories.php?action=add" ?>" class="row" method="POST">
						<div class="col-12">
							<div class="form-group">
								<label>Categories Name <span class="text-danger">*</span></label>
								<input class="form-control" value="" name="cat_name" type="text" required>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>isActive <span class="text-danger">*</span></label>
								<div class="custom-control custom-switch">
									<input type="checkbox" name="active" class="custom-control-input" id="add-active-<?= $cat['cat_id'] ?>">
									<label class="custom-control-label" for="add-active-<?= $cat['cat_id'] ?>"></label>
								</div>
							</div>
						</div>

						<div class="submit-section">
							<input type="submit" name="add-category" value="Add Category" class="btn btn-primary submit-btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category Modal -->

	<!-- Edit Category Modal -->
	<?php foreach ($cats as $cat) { ?>
		<div class="modal custom-modal fade" id="edit-categories-<?= $cat['cat_id'] ?>" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Categories</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= SUBURL . "admin/controller/manage-categories.php?id=" . $cat['cat_id'] . "&action=edit" ?>" method="POST">
							<div class="form-group">
								<label>Categories Name <span class="text-danger">*</span></label>
								<input class="form-control" name="cat_name" type="text" value="<?= $cat['category_name'] ?>">
							</div>
							<div class="form-group">
								<label>isActive <span class="text-danger">*</span></label>
								<div class="custom-control custom-switch">
									<input type="checkbox" name="active" class="custom-control-input" id="edit-active-<?= $cat['cat_id'] ?>" <?= $cat['isActive'] == 1 ? "checked" : "" ?>>
									<label class="custom-control-label" for="edit-active-<?= $cat['cat_id'] ?>"></label>
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
	<?php } ?>
	<!-- /Edit Category Modal -->
</div>
<!-- /Page Wrapper -->

<?php include('partials/footer.php') ?>
<?php include('partials/foot.php') ?>
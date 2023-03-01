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
					<h3 class="page-title">Categories</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Categories</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add_categories"><i class="fa fa-plus"></i> Add Categories</a>
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
								<th>Quantity</th>
								<th class="text-right">Manage</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Hardware</td>
								<td>
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
								</td>
								<td>4</td>
								<td class="text-right">
									<a class="" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil"></i> Edit</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>PHones</td>
								<td>
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
								</td>
								<td>10</td>
								<td class="text-right">
									<a class="" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil"></i> Edit</a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>TV</td>
								<td>
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
								</td>
								<td>15</td>
								<td class="text-right">
									<a class="" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil"></i> Edit</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->

	<!-- Add Holiday Modal -->
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
					<form>
						<div class="form-group">
							<label>Categories Name <span class="text-danger">*</span></label>
							<input class="form-control" type="text">
						</div>

						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Holiday Modal -->

	<!-- Add Holiday Modal -->
	<div class="modal custom-modal fade" id="edit_categories" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Categories</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Categories Name <span class="text-danger">*</span></label>
							<input class="form-control" type="text" value="Hardware">
						</div>

						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Holiday Modal -->
</div>
<!-- /Page Wrapper -->

<?php include('partials/footer.php') ?>
</body>

</html>
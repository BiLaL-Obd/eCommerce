<?php include('partials/head.php') ?>
</head>

<body class="account-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="account-content">
			<div class="container">
				<div class="account-box">
					<div class="account-wrapper">
						<h3 class="account-title">Login</h3>
						<p class="account-subtitle">Access to our dashboard</p>

						<!-- Account Form -->
						<form action="<?= SUBURL . "admin/controller/Login.php" ?>" method="POST">
							<div class="form-group">
								<label>Username </label>
								<input class="form-control" autocomplete="false" required type="text" name="username" placeholder="Enter your Username here">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col">
										<label>Password</label>
									</div>
								</div>
								<input class="form-control" type="password" autocomplete="false" name="password" requred placeholder="Enter your Password here">
							</div>
							<div class="form-group text-center">
								<button class="btn btn-primary account-btn" type="submit" name="login">Login</button>
							</div>
						</form>
						<!-- /Account Form -->

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/app.js"></script>

</body>

</html>
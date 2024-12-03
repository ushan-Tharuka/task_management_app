<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Task Management System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.login-container {
			min-height: 100vh;
			display: flex;
			align-items: center;
			background-color: #f8f9fa;
		}
		.image-section img {
			max-width: 100%;
			height: auto;
		}
		.form-section {
			padding: 2rem;
			background: #ffffff;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			border-radius: 8px;
		}
		.form-section h3 {
			margin-bottom: 1.5rem;
		}
		.btn-primary {
			background-color: #4285f4;
			border: none;
		}
		.btn-primary:hover {
			background-color: #357ae8;
		}
	</style>
</head>
<body>
	<div class="container-fluid login-container">
		<div class="row w-100">
			<!-- Left Side: Image Section -->
			<div class="col-md-6 d-flex align-items-center justify-content-center image-section">
				<img src="img/login.png" alt="Task Management Illustration">
			</div>
			<!-- Right Side: Login Form -->
			<div class="col-md-6 d-flex align-items-center justify-content-center">
				<div class="form-section">
					<h3 class="text-center">TASK MANAGEMENT SYSTEM</h3>
					<form method="POST" action="app/login.php">
						<?php if (isset($_GET['error'])) { ?>
							<div class="alert alert-danger" role="alert">
								<?php echo stripcslashes($_GET['error']); ?>
							</div>
						<?php } ?>

						<?php if (isset($_GET['success'])) { ?>
							<div class="alert alert-success" role="alert">
								<?php echo stripcslashes($_GET['success']); ?>
							</div>
						<?php } ?>

						<div class="mb-3">
							<label for="username" class="form-label">User name</label>
							<input type="text" class="form-control" name="user_name" id="username">
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="mb-3 text-center">
							<a href="#" class="text-muted">Forgot the password?</a>
						</div>
						<button type="submit" class="btn btn-primary w-100">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

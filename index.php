<?php require 'includes/header.php'; ?>
<link rel="stylesheet" href="css/style.css">
<?php require 'includes/body_opening.php'; ?>

<div class="container">
	<div class="col d-flex justify-content-center mt-5">
		<div class="card login_card-width">
			<div class="card-header card bg-dark text-white">Test Engineering Project</div>
			<div class="card-body">
				<form action="action/login.php" method="post">
					<div class="form-group">
						<label for="usr">Username:</label>
						<input type="text" class="form-control" id="usr" name="username">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" name="password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php require 'includes/body_closing.php'; ?>
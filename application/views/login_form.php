<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
	<link href="<?= base_url() ?>assets/dist/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

</head>

<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="form-03-main">
						<div class="logo text-center">
							<img src="<?= base_url()  ?>assets/image/user.png">
							<h3>Login</h3>
						</div>
						<?php if ($this->session->flashdata('message_login_error')) : ?>
							<div class="invalid-feedback">
								<?= $this->session->flashdata('message_login_error') ?>
							</div>
						<?php endif ?>


						<form action="" method="post" style="max-width: 600px;">
							<div class="form-group">
								<input type="text" name="username" class="form-control<?= form_error('username') ? 'invalid' : '' ?>" placeholder="Your username or email" value="<?= set_value('username') ?>" required />
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control<?= form_error('password') ? 'invalid' : '' ?>" placeholder="Enter your password" value="<?= set_value('password') ?>" required />
								<div class="invalid-feedback">
									<?= form_error('password') ?>
								</div>
							</div>
							<div class="checkbox form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="" disabled>
									<label class="form-check-label" for="">
										Remember me
									</label>
								</div>
								<a href="#">Forgot Password</a>
							</div>

							<div>
								<input type="submit" class="button _btn_04" value="Login">
							</div>
						</form>
					</div>
					<!-- <div class="form-03-main">
						<div class="logo text-center">
							<img src="<?= base_url()  ?>assets/image/user.png">
							<h3>Login</h3>
						</div>
						<div class="form-group">
							<input type="text" name="username" class="form-control<?= form_error('username') ? 'invalid' : '' ?>" placeholder="Your username or email" value="<?= set_value('username') ?>" required>
							<div class="invalid-feedback">
								<?= form_error('username') ?>
							</div>
						</div>

						<div class="form-group">
							<input type="password" name="password" class="form-control<?= form_error('password') ? 'invalid' : '' ?>" placeholder="Enter your password" value="<?= set_value('password') ?>" required>
							<div class="invalid-feedback">
								<?= form_error('password') ?>
							</div>
						</div>

						<div class="checkbox form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="" disabled>
								<label class="form-check-label" for="">
									Remember me
								</label>
							</div>
							<a href="#">Forgot Password</a>
						</div>

						<div class="form-group">
						<input type="submit" class="button _btn_04" value="Login">
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
</body>
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

</html>
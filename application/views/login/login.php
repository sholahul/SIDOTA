<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		<!-- Bootstrap Core CSS -->
		<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<!-- Bootstrap Core JS and jquery -->
		<script src="<?php base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
		<script src="<?php base_url('assets/js/jquery.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
		<!-- fonts googlelapis -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		
		<!-- Our Styles -->
		<link href="<?=base_url('assets/vendor/login.css')?>" rel="stylesheet">
	</head>
	<body>
		
		<div class="middlePage container-fluid">
			<div class="page-header">
				<div class="img1">
					<img src="<?=base_url('assets/img/logoo1.png')?>" alt="">
				</div>
				
				<br>
				<hr>
			</div>
			
			<div class="row">
				<div class="column left">
					<img src="<?=base_url('assets/img/ea.jpg')?>" alt="">
				</div>
				<div class="column right">
					<form method="post" action='<?php echo base_url(); ?>Login'>
						<div class="container">
							<label for="uname"><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="username" required>
							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="password" required>
							
							<label for="psw"><b>Role</b></label>
							<br>

							<select name="role" class="sel">
							  <option value="Admin">Admin</option>
							  <option value="Dosen">Dosen</option>
							  <option value="Mahasiswa">Mahasiswa</option>
							</select>

							<button type="submit">Login</button>
							<label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</body>
</html>
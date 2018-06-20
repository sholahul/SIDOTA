<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Halaman Awal Dosen</title>
		<!-- Bootstrap Core CSS -->
		<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<!-- Bootstrap Core JS and jquery -->
		<script src="<?php base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
		<script src="<?php base_url('assets/js/jquery.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
		<!-- fonts googlelapis -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link href="<?=base_url('assets/vendor/dosen.css')?>" rel="stylesheet">
	</head>
<body>
	<div class=" middlePage container-fluid">
		<div class="pageHeader">
			<div class="logo">
				<img class="img-responsive" src="<?=base_url('assets/img/logoo1.png')?>">
				<img class="unsri" src="<?=base_url('assets/img/logo-unsri.png')?>">
			</div>
			<br>
			<hr>

			<div class="row">
				<div class="column left">
					<div class="Datapribadi">
						<h4>Data Pribadi</h4>
						<a href="#">
							<img class="akun" src="<?=base_url('assets/img/data_prib.png')?>">
						</a>
					</div>
				</div>
				<div class="column middle">
					<div class="DokumenTA">
						<h4>Dokumen TA</h4>
						<a href="#">
							<img class="doc" src="<?=base_url('assets/img/dokumen.png')?>">
						</a>
					</div>
				</div>
				<div class="column right">
					<div class="UbahPassword">
						<h4>Ubah Password</h4>
						<a href="#">
							<img class="pass" src="<?=base_url('assets/img/pass.png')?>">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
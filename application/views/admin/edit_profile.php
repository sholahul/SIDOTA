<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap template 3.3.7-->
		<link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- fonts googlelapis online -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <!-- Our Styles -->
		<script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
		<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
		<script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
</head>
<body>
		<div class="content">
			<div class="w3-container">
				<h2><i class="fa fa-cog"></i>Edit Profil</h2>
				<hr>		
				<div class="container">
					<form class="form-horizontal" method="post" action="">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nip">NIP :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nip" value=" <?php echo $username ?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nama">Nama :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="TL">Tempat Lahir :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="TL" placeholder="Tempat Lahir">
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="jabatan">Jabatan :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="jabatan" placeholder="Jabatan Saat Ini">
							</div>
						</div>
                         <div class="form-group">
							<label class="control-label col-sm-2" for="email">email :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="email" placeholder="Email Fasilkom">
							</div>
						</div>
                         <div class="form-group">
							<label class="control-label col-sm-2" for="jnope">No Hp :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nope" placeholder="+628xxxxxxxxxxxx">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-8">
								<button type="submit" class="btn btn-default">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>
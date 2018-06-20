<!DOCTYPE html>
<html>
	<head>
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
		<link href="<?=base_url('assets/vendor/sts_admin.css')?>" rel="stylesheet">
		<script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
		<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
        <script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
        <link href="<?=base_url('assets/vendor/style.css')?>" rel="stylesheet" >
    </head>
    <body>
		<div class="content" id="fullpage">
			<div class="w3-container">
				<h2><i class="fa fa-edit"> </i> Update Profile</h2>
                <hr>

                <div class="container">
					<form class="form-horizontal" method="post" action="">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nim">NIM :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nim" value="09021181520125" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nama">Nama :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nama" placeholder="Nama" value="Sholahul Fajri" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email :</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="email" placeholder="Email" value="sholahul30051998@gmail.com" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="kampus">Kampus :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="kampus" placeholder="Kampus" value="Inderalaya" disabled>
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="tmptlahir">Tempat Lahir :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="tmptlahir" placeholder="Tempat Lahir" value="Prabumulih" required>
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="tgllahir">Tanggal Lahir :</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="tgllahir" required>
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="jk">Jenis Kelamin :</label>
							<div class="col-sm-8">
                                <input type="radio" name="jk" value="L" checked> Laki-laki<br>
                                <input type="radio" name="jk" value="P"> Perempuan<br>
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="nohp">No HP :</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="nohp" placeholder="No HP" value="08127328851" required>
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="alamat">Alamat :</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="alamat" id="alamat" cols="120" rows="6" placeholder="Alamat"  required></textarea>
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="upload_foto">Upload Photo :</label>
							<div class="col-sm-8">
								<input type="file" name="upload_foto" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-8">
								<button type="submit" class="btn btn-default">Update</button>
							</div>
						</div>
					</form>
				</div>
            </div>
		</div>
	</body>
</html>
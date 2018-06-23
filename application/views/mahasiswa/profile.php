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
		<link href="<?=base_url('assets/vendor/styles_admin.css')?>" rel="stylesheet">
		<script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
		<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
        <script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
        <link href="<?=base_url('assets/vendor/style.css')?>" rel="stylesheet" >
	</head>
	<body>
		<div class="content" id="fullpage">
			<div class="w3-container">
				<h2><i class="fa fa-user"> </i> Profile</h2>
				<hr>
                
                <div class="container">
                    <table class="table table-responsive table-condensed">
                        <tr>
                            <td rowspan="10"><img src="<?php echo base_url() ?>assets/img/cat.jpg" alt="cat" width="200px" height="300px"></td>
                            <th class="col-xs-3">Nama</th>
                            <td>:</td>
                            <td class="col-xs-8">Sholahul Fajri</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>:</td>
                            <td>09021181520125</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>sholahul30051998@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Kampus</th>
                            <td>:</td>
                            <td>Inderalaya</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Prabu</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>30-5-1998</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>Laki-laki</td>
                        </tr>
                        <tr>
                            <th>No Hp</th>
                            <td>:</td>
                            <td>08127328851</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>Prabu</td>
                        </tr>   
                        <tr>
                            <th>Dosen PA</th>
                            <td>:</td>
                            <td>...</td>
                        </tr>
                    </table>
                    <a href="<?php echo base_url() ?>mahasiswa/update_profile/"<?php echo $username ?> class="btn btn-default" role="button">Update Profile</a>
                </div>
            </div>
		</div>
	</body>
</html>
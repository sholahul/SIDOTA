<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dosen</title>
        <link rel="icon" href="<?=base_url('assets/img/icon.png')?>" type="image">
        <!-- Bootstrap template 3.3.7-->
        <link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        <!-- fonts googlelapis online -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <link href="<?=base_url('assets/w3/w3.css')?>" rel="stylesheet">

        <!-- Our Styles -->
        <link href="<?=base_url('assets/vendor/Admin_STY.css')?>" rel="stylesheet">
        <link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
        <script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>     
	</head>
	<body>
		<div class="content">
			<div class="container-fluid">
				<h2><i class="fa fa-cog"></i> Ubah Password</h2>
				<hr>
				<div class="container ubah">
					<form class="form-horizontal" method="post" action="<?php echo base_url() ?>dosen/action_ubahpassword/<?php echo $user?>">
						<div class="form-group">
							<label class="control-label col-sm-4" for="password">New Password :</label>
							<div class="col-sm-7">
								<input type="password" maxlength="15" onkeyup="filter(this)" class="form-control" id="pwd" placeholder="Enter Password" name="pwd1" style="padding: ;">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="pwd">Konfirm Password :</label>
							<div class="col-sm-7">
								<input type="password" maxlength="15" onkeyup="filter(this)"  class="form-control" id="pwd" placeholder="Enter password Again" name="pwd2">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-10">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
	</body>
</html>
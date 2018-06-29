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
	</head>
	
	<body>
		<div class="content" id="fullpage">
			<div class="container-fluid">
				<h2><i class="fa fa-address-book-o"> </i> Profile</h2>
				<hr>
				<div class="container ubah">
					<?php foreach($content->result() as $key): ?>
						<form onSubmit="return validate()" class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_updateprofile/<?php echo $user?>">
							<div class="form-group">
								<label class="control-label col-sm-4" for="password">Username :</label>
								<div class="col-sm-7">
									<input type="text" maxlength="15" onkeyup="filter(this)" class="form-control" id="pwd" placeholder="Enter Username" name="username" value="<?php echo $key->username ?>" disabled>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4" >Tempat Lahir :</label>
								<div class="col-sm-7">
									<input type="text" maxlength="15" onkeyup="fchar(this)"  class="form-control" id="pwd" placeholder="Enter Tempat Lahir" name="tempat_lahir"  value="<?php echo $key->tempat_lahir ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4" >Tanggal Lahir :</label>
								<div class="col-sm-7">
									<input type="text"  min="1945-08-17" max="3000-12-31"  class="form-control" id="pwd" placeholder="Enter Tempat Lahir" name="tanggal_lahir"   onfocus="(this.type='date')"  value="<?php echo $key->tanggal_lahir ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4" for="email">Email :</label>
								<div class="col-sm-7">
									<input type="email" maxlength="40" onkeyup="femail(this)" required class="form-control" id="pwd" placeholder="Enter Email" name="email" value="<?php echo $key->email ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" >Address :</label>
								<div class="col-sm-7">
									<textarea name="alamat" maxlength="100" onkeyup="faddress(this)"><?php echo $key->alamat?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-4" >No HP :</label>
								<div class="col-sm-7">
									<input type="text" maxlength="15" onkeyup="fnohp(this)"  class="form-control"  placeholder="Enter No HP" name="nohp"  value="<?php echo $key->nohp ?>">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-10">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>


						</form>
					<?php endforeach  ?>
				</div>
			</div>
		</div>
	</body>
</html>
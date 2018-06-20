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
		<script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
		<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
		<script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
	</head>
	<body>
		<div class="content">
			<div class="w3-container">
				<h2><i class="fa fa-cog"></i> Upload Dokumen TA</h2>
				<hr>		
			<!-- 	<?php echo $username."da" ?> -->
				<div class="container">
					<form class="form-horizontal" method="post" action="">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nim">NIM :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nim" value=" <?php echo $username ?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nippa1">NIP Pembimbing 1 :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nippa1" placeholder="Enter NIP Pembimbing 1">
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="nippa1">NIP Pembimbing 2 :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nippa2" placeholder="Enter NIP Pembimbing 2">
							</div>
						</div>
						<hr>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="judulTA">Judul :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="judulTA" placeholder="Enter Judul TA">
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="abstrak">Abstrak :</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="abstrak" id="abstrak" cols="120" rows="6" placeholder="Abstrak"></textarea>
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="uploadTA">Upload TA :</label>
							<div class="col-sm-8">
								<input type="file" name="uploadTA">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-8">
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
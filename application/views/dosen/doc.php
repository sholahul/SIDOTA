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
		<link href="<?=base_url('assets/vendor/style.css')?>" rel="stylesheet">
	</head>
	<body>

		<div class="content" id="fullpage">
			<div class="container-fluid">
				<h2><span class="glyphicon glyphicon-th-list"></span> Daftar TA Verified </h2>
				<hr>
				<input type="text" name="search" placeholder="Search..." class="searchs form-control"  onkeyup="myFunction()" id="searchInput" > <br><br>
				<div class="table-responsive tbs">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="width: 200px; text-align: center" onclick="sortTable(0)">Publish Date</th>
								<th style="width: 500px; text-align: center" onclick="sortTable(5)">Judul Tugas Akhir</th>
								<th style="width: 200px; text-align: center" onclick="sortTable(6)">Nim</th>
								<th style="width: 300px; text-align: center" onclick="sortTable(6)">Nama Mahasiswa</th>
								<th style="width: 200px; text-align: center" onclick="sortTable(6)">NPPA</th>
								<th style="width: 300px; text-align: center" onclick="sortTable(6)">Nama Pembimbing</th>
								
								<th style="width: 200px; text-align: center">Action</th>
							</tr>
						</thead>
						<tbody id="tblDokumen">
							<?php foreach($content->result_array() as $key): ?>
							<tr>
								<td>
									<?php echo $key['publish_date']?>
								</td>
								<td>
									<?php echo $key['judulta'] ?>
								</td>
								<td>
									<?php echo $key['nimmhs'] ?>
								</td>
								
								<td>
									<?php echo $key['nama_mhs'] ?>
								</td>
								<td>
									<?php echo $key['nppa_dosen'] ?>
								</td>
								<td>
									<?php echo $key['nama_dosen'] ?>
								</td>
								
								<td style="text-align: center">
									<a href="<?php echo base_url()?>dosen/detail_ta/<?php echo $key['path'] ?>" title="">
									<button class="btn">View Details</button>
									</a>
									<br><br>
									</a>
								</td>								
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				
			</div>
			
		</div>
		
	</body>
</html>
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
		<div class="content"">
			<div class="w3-container">
				<h2><span class="glyphicon glyphicon-th-list"></span> Daftar TA </h2>
				<hr>
				<input type="text" name="search" placeholder="&#xF002; Search.." class="searchs"  onkeyup="myFunction()" id="searchInput" > <br><br>
				<div class="">
					<table class="table table-bordered ">
						<thead>
							<tr>
								<th style="width: 100px" onclick="sortTable(0)">Publish Date</th>
								<th style="width: 600px" onclick="sortTable(1)">Judul Tugas Akhir</th>
								<th style="width: 200px" onclick="sortTable(2)">NIM</th>
								<th style="width: 200px" onclick="sortTable(2)">nama</th>
								<th onclick="sortTable(3)">Angkatan</th>
								
								<th onclick="sortTable(4)">Verifikasi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="tblDokumen">
							<?php foreach($content->result_array() as $key): ?>
							<tr>
								<td><?php echo $key['publish_date'] ?></td>
								<td><?php echo $key['judulta'] ?></td>
								<td><?php echo $key['nimmhs'] ?></td>
								<td><?php echo $key['nama'] ?></td>
								<td><?php echo $key['angkatan'] ?></td>
								<td><?php if($key['verifikasi']==1){
										echo "Diterima";
									}else{
										echo "Menunggu";
									}
									?>
									
								</td>
								<td>
									<a style="text-decoration: none" href="<?php echo base_url()?>admin/action_show_dokumen/<?php echo $key['id'] ?>" title="">
									<i class="fa fa-file-pdf-o"  title="Open Document"></i></a>
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
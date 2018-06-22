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
		<link href="<?=base_url('assets/vendor/own_admin.css')?>" rel="stylesheet">
		<script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
		<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
		<script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
	</head>
	<body>
		<!-- 	<div id="" style="overflow-y:scroll; overflow-x:hidden; height:400px;"> -->
		<div class="content" id="fullpage">
			<div class="w3-container">
				<h2><i class="fa fa-cog"> </i> Daftar Dosen </h2>
				<hr>
				<div class="table-responsive tbs">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th onclick="sortTable(0)">nip</th>
								<th onclick="sortTable(1)">nama</th>
								<th onclick="sortTable(2)">password</th>
								<th onclick="sortTable(3)">Tempat Lahir</th>
								<th onclick="sortTable(4)">Tanggal Lahir</th>
								<th onclick="sortTable(5)">Jabatan</th>
								<th onclick="sortTable(6)">Jenis Kelamin</th>
								<th onclick="sortTable(6)">Enail</th>
								<th onclick="sortTable(6)">No HP</th>

								<th>Action</th>
							</tr>
						</thead>
						<tbody id="tblDokumen">
							<?php foreach($content->result_array() as $key): ?>
							<tr>
								<td><?php echo $key['nip'] ?></td>
								<td><?php echo $key['nama'] ?></td>
								<td><?php echo $key['password'] ?></td>
								<td><?php echo $key['tempat_lahir'] ?></td>
								<td><?php echo $key['tanggal_lahir'] ?></td>
								<td><?php echo $key['jabatan'] ?></td>
								<td><?php echo $key['jenis_kelamin'] ?></td>
								<td><?php echo $key['email'] ?></td>
								<td><?php echo $key['nohp'] ?></td>
								<td>
									<a style="text-decoration: none" href="<?php echo base_url()?>admin/ubah_dosen/<?php echo $key['nip'] ?>" title="">
									<i class="fa fa-edit"></i>Edit
									</a>
									<span> | </span>
									<a style="text-decoration: none" href="<?php echo base_url()?>admin/action_delete_dosen/<?php echo $key['nip'] ?>" title="">
									<i class="fa fa-trash-o"></i>Delete</a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<div class="add">
						<a style="text-decoration: none" href="<?php echo base_url()?>admin/add_dosen/<?php echo $user ?>"> <i class="fa fa-user-plus"></i> Add Account</a>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</body>
</html>
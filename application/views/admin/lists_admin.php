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
		<style>
		
		</style>
		
	</head>
	<body>
		<!-- 	<div id="" style="overflow-y:scroll; overflow-x:hidden; height:400px;"> -->
		<div class="content" id="fullpage">
			<div class="w3-container">
				<h2><i class="fa fa-cog"> </i> Daftar Admin </h2>
				<hr>
				<input type="text" name="search" placeholder="&#xF002; Search.." class="searchs"  onkeyup="myFunction()" id="searchInput" >
			
				<div class="add">
					<a style="text-decoration: none" href="<?php echo base_url()?>admin/add_admin/<?php echo $user ?>"> <i class="fa fa-user-plus"></i> Add Account</a>
				</div>
				<div class="table-responsive tbs">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th onclick="sortTable(0)">Username</th>
								<th onclick="sortTable(1)">Password</th>
								<th onclick="sortTable(2)">Tempat Lahir</th>
								<th onclick="sortTable(3)">Tanggal Lahir</th>
								<th onclick="sortTable(4)">Email</th>
								<th onclick="sortTable(5)">Alamat</th>
								<th onclick="sortTable(6)">NoHP</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="tblDokumen">
							<?php foreach($content->result_array() as $key): ?>
							<tr>
								<td><?php echo $key['username'] ?></td>
								<td><?php echo $key['password'] ?></td>
								<td><?php echo $key['tempat_lahir'] ?></td>
								<td><?php echo $key['tanggal_lahir'] ?></td>
								<td><?php echo $key['email'] ?></td>
								<td><?php echo $key['alamat'] ?></td>
								<td><?php echo $key['nohp'] ?></td>
								<td>
									<a style="text-decoration: none" title="Modify" href="<?php echo base_url()?>admin/ubah_admin/<?php echo $key['username'] ?>" title="">
										<i class="fa fa-edit"></i>
									</a>
									<span> | </span>
									<a style="text-decoration: none" title="Delete" href="<?php echo base_url()?>admin/action_delete_admin/<?php echo $key['username'] ?>" title="">
									<i class="fa fa-trash-o"></i></a>
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
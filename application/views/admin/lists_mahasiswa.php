<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
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

		<div class="content" id="fullpage">
			<div class="container-fluid">
				<h2><i class="fa fa-github"> </i> Daftar Mahasiswa </h2>
				<hr>
				<input type="text" name="search" placeholder="&#xF002; Search.." class="searchs"  onkeyup="myFunction()" id="searchInput" >
				<div class="add">
						<a style="text-decoration: none" href="<?php echo base_url()?>admin/add_mahasiswa/<?php echo $user ?>"> <i class="fa fa-user-plus"></i> Add Account</a>
					</div>
				<div class="table-responsive tbs">
					<table class="table table-bordered table-striped" >
						<thead>
							<tr>
								<th onclick="sortTable(0)">NIM</th>
								<th onclick="sortTable(1)">NPPA</th>
								<th onclick="sortTable(2)">Nama</th>
								<th onclick="sortTable(3)">Password</th>
								<th onclick="sortTable(4)">Angkatan</th>
								<th onclick="sortTable(5)">Tempat Lahir</th>
								<th onclick="sortTable(6)">Tanggal Lahir</th>
								<th onclick="sortTable(7)">Jenis Kelamin</th>
								<th onclick="sortTable(8)">Email</th>
								<th onclick="sortTable(9)">No HP</th>
								<th onclick="sortTable(10)">Lokasi Kampus</th>
								<th onclick="sortTable(10)">Alamat</th>

								<th>Action</th>
							</tr>
						</thead>
						<tbody id="tblDokumen">
							<?php foreach($content->result_array() as $key): ?>
							<tr>
								<td><?php echo $key['nim'] ?></td>
								<td><?php echo $key['nppa'] ?></td>
								<td><?php echo $key['nama'] ?></td>
								<td><?php echo $key['password'] ?></td>
								<td><?php echo $key['angkatan'] ?></td>
								<td><?php echo $key['tempat_lahir'] ?></td>
								<td><?php echo $key['tanggal_lahir'] ?></td>
								<td><?php echo $key['jenis_kelamin'] ?></td>
								<td><?php echo $key['email'] ?></td>
								<td><?php echo $key['nohp'] ?></td>
								<td><?php echo $key['lokasi_kampus'] ?></td>
								<td><?php echo $key['alamat'] ?></td>
								
								
								<td>
									<a style="text-decoration: none"  title="Modify" href="<?php echo base_url()?>admin/ubah_mahasiswa/<?php echo $key['nim'] ?>" title="">
									<i class="fa fa-edit"></i>
									</a>
									<span> | </span>
									<a style="text-decoration: none"  title="Delete" href="<?php echo base_url()?>admin/action_delete_mahasiswa/<?php echo $key['nim'] ?>" title="">
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
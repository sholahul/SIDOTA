<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mahasiswa</title>
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
				<h2><i class="fa fa-book"></i> Own TA </h2>
				<hr>
	
				<div class="table-responsive tbs">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="width: 100px;text-align: center" onclick="sortTable(0)">Publish Date</th>
								<th style="width: 500px;text-align: center" onclick="sortTable(1)">Judul Tugas Akhir</th>
								<th style="width: 200px;text-align: center" onclick="sortTable(2)">NIP Pembimbing TA</th>
								<th style="width: 200px" onclick="sortTable(2)">Nama Pembimbing TA</th>
								<th onclick="sortTable(3)">Angkatan</th>
								
								<th onclick="sortTable(4)">Verifikasi</th>
								<th style="text-align: center"> Action</th>							
							</tr>
						</thead>
						<tbody id="tblDokumen">
							<?php foreach($content->result_array() as $key): ?>
							<tr>
								<td><?php echo $key['publish_date'] ?></td>
								<td><?php echo $key['judulta'] ?></td>
								<td><?php echo $key['nppa'] ?></td>
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
									<a style="text-decoration: none" href="<?php echo base_url()?>mahasiswa/detail_ta/<?php echo $key['path'] ?>" title="">
									<button class="btn" style="color: blue;text-align: center">View</button>
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
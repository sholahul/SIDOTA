<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
		<link href="<?=base_url('assets/vendor/sts_admin.css')?>" rel="stylesheet">
		<script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
		<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
		<script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
</head>
<body>
	<div class="content">
			<div class="w3-container">
				<h2><i class="fa fa-cog"></i>Profile</h2>
				<hr>
				<div class="container">

      <table class="table table-bordered" id="mydata">

      					<?php

                        foreach($data->result_array() as $i):

                              $nip=$i['nip'];

                              $nama=$i['nama'];

                              $tl=$i['tempat_lahir'];

                              $jab=$i['jabatan'];

                              $jk=$i['Jenis_kelamin'];

                              $email=$i['email'];

                              $nope=$i['no_hp'];

                  ?>
                  <tr>

                        <td>NIP</td>
                        <td><?php echo $nip;?> </td>
                  </tr>
                  <tr>
                  		<td>Nama</td>
                  		<td><?php echo $nama;?> </td>
                  </tr>
                  <tr>
                  		<td>Tempat Lahir</td>
                  		<td><?php echo $tl;?> </td>
                  </tr>
                  <tr>
                  		<td>Jabatan</td>
                  		<td><?php echo $jab;?> </td>
                  </tr>  
                  <tr>
                  		<td>Jenis Kelamin</td>
                  		<td><?php echo $jk;?> </td>
                  </tr>
                  <tr>
                  		<td>email</td>
                  		<td><?php echo $email;?> </td>
                  </tr>
                  <tr>
                  		 <td>No HP</td>
                  		 <td><?php echo $nope;?> </td>
                  </tr>

                <?php endforeach;?>
      </table>
            <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-8">
                        <a href="<?php echo base_url()?>dosen/edit_profile/<?php echo $username ?>">Edit Profil Anda</a>
                  </div>
            </div>
	</div>
</div>
</div>

</body>
</html>
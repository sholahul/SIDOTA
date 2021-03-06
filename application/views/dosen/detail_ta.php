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
        <link href="<?=base_url('assets/vendor/style.css')?>" rel="stylesheet" >
        <script src="<?=base_url('assets/vendor/build/pdf.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/vendor/build/pdf.worker.js')?>" type="text/javascript"></script>
	</head>
	<body>
		<div class="content" id="fullpage">
			<div class="w3-container">
				<h2><i class="fa fa-home"> </i> Detail TA</h2>
				<hr>
                
                <div class="container-fluid">
                    <table class="table table-responsive table-condensed">
                    <?php foreach($content->result() as $key): ?>
                        <tr>
                            <th class="col-xs-2">Nama</th>
                            <td>:</td>
                            <td><?=$key->nama_mhs?></td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>:</td>
                            <td><?=$key->nimmhs?></td>
                        </tr>
                        <tr>
                            <th>Pembimbing Akademik</th>
                            <td>:</td>
                            <td><?=$key->nama_dosen?></td>
                        </tr>
                        <tr>
                            <th >Judul</th>
                            <td>:</td>
                            <td><?=$key->judulta?></td>
                        </tr>
                        <tr>
                            <th >Tahun Terbit</th>
                            <td>:</td>
                            <td><?=$key->publish_date?></td>
                        </tr>
                        <tr>
                            <th >Abstrak</th>
                            <td>:</td>
                            <td><?=$key->abstrak?></td>
                        </tr> 
                        <tr>
                            <th>Download TA</th>
                            <td>:</td>
                            <td>
                                <a href="<?=base_url()?>assets/dokumenta/<?=$key->path?>" Download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
                                
                                <a href="<?=base_url()?>assets/vendor/web/viewer.html?file=<?=base_url()?>assets/dokumenta/<?=$key->path?>" target="_blank"><button class="btn btn_view"><i class="fa fa-file-pdf-o"></i> View</button></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                    <!-- <iframe width="800" height="800" src="<?=base_url()?>assets/vendor/web/viewer.html?file=09021181520125.pdf"></iframe> -->
                </div>
			</div>
		</div>
	</body>
</html>
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
        <link href="<?=base_url('assets/vendor/style.css')?>" rel="stylesheet" >
	</head>
	<body>
		<div class="content" id="fullpage">
			<div class="w3-container">
				<h2><i class="fa fa-home"> </i> Detail TA</h2>
				<hr>
                
                <div class="container">
                    <table class="table table-responsive table-condensed">
                        <tr>
                            <th class="col-xs-2">Nama</th>
                            <td>:</td>
                            <td>Kulvinder Kaur</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>:</td>
                            <td>09021334244442</td>
                        </tr>
                        <tr>
                            <th>Pembimbing 1</th>
                            <td>:</td>
                            <td>Fajri</td>
                        </tr>
                        <tr>
                            <th>Pembimbing 2</th>
                            <td>:</td>
                            <td>Rizqi</td>
                        </tr>
                        <tr>
                            <th >Judul</th>
                            <td>:</td>
                            <td>Securing Visual Cryptographic Shares using Public Key Encryption</td>
                        </tr>
                        <tr>
                            <th >Abstrak</th>
                            <td>:</td>
                            <td>The Visual Cryptography Scheme is a secure method
that encrypts a secret document or image by breaking it into
shares. A distinctive property of Visual Cryptography Scheme is
that one can visually decode the secret image by superimposing
shares without computation. By taking the advantage of this
property, third person can easily retrieve the secret image if shares
are passing in sequence over the network. The project presents an
approach for encrypting visual cryptographically generated image
shares using Public Key Encryption. RSA algorithm is used for
providing the double security of secret document. Thus secret share
are not available in their actual form for any alteration by the
adversaries who try to create fake shares. The scheme provides
more secure secret shares that are robust against a number of
attacks & the system provides a strong security for the handwritten
text, images and printed documents over the public network.</td>
                        </tr> 
                        <tr>
                            <th>Download TA</th>
                            <td>:</td>
                            <td><button class="btn"><i class="fa fa-download"></i> Download</button></td>
                        </tr>
                    </table>

                </div>
			</div>
		</div>
	</body>
</html>
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
		<link href="<?=base_url('assets/vendor/sts_admin.css')?>" rel="stylesheet">
		<script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
		<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
		<script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
        <link href="<?=base_url('assets/vendor/style.css')?>" rel="stylesheet" >
	</head>
	<body>
		<div class="content" id="fullpage">
			<div class="w3-container">
				<h2><i class="fa fa-home"> </i> View Dokumentasi TA</h2>
				<hr>
				
                <!-- table -->
                <div class="container">
                    <h3 class="text-center">Dokumen Tugas Akhir</h3>
                    <p class="text-center">Masukan kata untuk melakukan pencarian.</p>
                    <input class="form-control" type="text" name="search" id="searchInput" placeholder="Cari dokument TA..." title="tuliskan dokumen yang di cari">
                    <br>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th onclick="sortTable(0)">Tahun</th>
                            <th onclick="sortTable(1)">Judul</th>
                            <th onclick="sortTable(2)">Penulis</th>
                            <th onclick="sortTable(3)">NIM</th>
                        </tr>
                        </thead>
                        <tbody id="tblDokumen">
                        <tr>
                            <td>2014</td>
                            <td><a href="<?php echo base_url() ?>mahasiswa/detail_ta/09021334244442">Securing Visual Cryptographic Shares using Public Key Encryption</a></td>
                            <td>Kulvinder Kaur</td>
                            <td>09021334244442</td>
                        </tr>
                        <tr>
                            <td>2018</td>
                            <td><a href="#">Rancang Bangun Aplikasi Augemented Reality Masked Base Tracking Pencarian Lokasi Rumah Sakit Terdekat untuk Korban Kecelakaan Lalu Lintas Berbasis Android</a></td>
                            <td>Agusti Kurniawan</td>
                            <td>09021281520117</td>
                        </tr>
                        <tr>
                            <td>2013</td>
                            <td><a href="#">Evaluasi Kinerja Kelola Menggunakan Framework COBIT 5.0 Terhadap Penerapan Sistem e-KTP</a></td>
                            <td>Sholahul Fajri</td>
                            <td>09090902213452</td>
                        </tr>
                        <tr>
                            <td>2014</td>
                            <td><a href="#">Penerapan Location Based Service (LBS) Pemanggil Darurat Pada Situasi Kebakaran Berbasis Android</a></td>
                            <td>Desta Riskiandi</td>
                            <td>09021321442332</td>
                        </tr>
                        <tr>
                            <td>2015</td>
                            <td><a href="#">Rancang Bangun Sistem Informasi Pengelolaan Administrasi Tugas Akhir dan Kerja Praktek Berbasis XMLHTTP</a></td>
                            <td>M. Farhan Evrizal</td>
                            <td>09202142321321</td>
                        </tr>
                        <tr>
                            <td>2013</td>
                            <td><a href="#">Analisis Penerapan Interaksi Manusia dan Komputer pada Website Unit Pelaksana Teknis Latihan Kerja (UPT-LK) Menggunakan Metode User Center Design (UCD)</a></td>
                            <td>Juanda Fahrizal</td>
                            <td>09031192141231</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <script>
                $(document).ready(function(){
                    $("#searchInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#tblDokumen tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                    });
                });

                function sortTable(n) {
                    var table, rows, switching, x, y, shouldSwitch, dir, switchcount = 0;
                    table = document.getElementByID("tblDokumen");
                    switching = true;
                    dir = "asc";
                    /* Make a loop that will continue until
                    no switching has been done: */
                    while (switching) {
                    switching = false;
                    rows = table.getElementsByTagName("TR");
                    /* Loop through all table rows (except the
                    first, which contains table headers): */
                    for (let i = 0; i < (rows.length - 1); i++) {
                        shouldSwitch = false;
                        x = rows[i].getElementsByTagName("TD")[n];
                        y = rows[i + 1].getElementsByTagName("TD")[n];

                        if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                        } else if (dir == "desc"){
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                            shouldSwitch = true;
                        break;
                        }
                        }
                    }
                    if (shouldSwitch) {
                        /* If a switch has been marked, make the switch
                        and mark that a switch has been done: */
                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                        switching = true;
                        // Each time a switch is done, increase this count by 1:
                        switchcount ++; 
                    } else {
                        /* If no switching has been done AND the direction is "asc",
                        set the direction to "desc" and run the while loop again. */
                        if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                        }
                    }
                    }
                }
                </script>
			</div>
		</div>
	</body>
</html>
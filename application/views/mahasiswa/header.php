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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Our Styles -->
        <link href="<?=base_url('assets/vendor/stylesadmin.css')?>" rel="stylesheet">
        <script src="<?=base_url('assets/vendor/js_admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
        <link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
        <link href="<?=base_url('assets/vendor/si.css')?>" rel="stylesheet">
        <script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
    </head>
    
    <body id="page-top">
        <nav class="navbar navbar-inverse" id="mainnav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand " href="#">
                        <i class="fa fa-leaf"></i>
                        Mahasiswa
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    
                </div>


                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle " data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span> 
                                <label name="user">
                                    <?php echo $user?>
                                </label>
                                
                                
                                <b class="caret"> </b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()?>mahasiswa/ubahpassword/<?php echo $user?>" >
                                    <i class="fa fa-cog"></i>
                                Ubah Password</a></li>
                                <li><a href="<?php echo base_url()?>mahasiswa/profile/<?php echo $user?>">
                                    <i class="fa fa-user"></i>
                                Profile</a></li>
                                <hr>
                                <li><a href="<?php echo base_url();?>login/logout">
                                    <i class="fa fa-power-off"></i>
                                Logout</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Sidebar -->
        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:190px">
            <br>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>mahasiswa/dashboard/<?php echo $user ?>" class="w3-bar-item w3-button" style="text-decoration:none;">
                        <i class="fa fa-home"> </i>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url(); ?>mahasiswa/upload_ta/<?php echo $user ?>" class="w3-bar-item w3-button" style="text-decoration:none;">
                        <i class="fa fa-cloud-upload"></i>
                    Upload Dokumen TA</a>
                </li>
                
                <li>
                    <a href="<?php echo base_url(); ?>mahasiswa/own_ta/<?php echo $user ?>" class="w3-bar-item w3-button" style="text-decoration:none;">
                        <i class="fa fa-book"></i>
                    Own Dokumen</a>
                </li>

                <li>
                    <a href="<?php echo base_url(); ?>mahasiswa/show_dokumen/<?php echo $user?>" class="w3-bar-item w3-button" style="text-decoration:none;">
                        <i class="fa fa-file-pdf-o"></i>
                    View Dokumentasi TA</a>
                </li>
            </ul>
        </div>
    </body>
</html>
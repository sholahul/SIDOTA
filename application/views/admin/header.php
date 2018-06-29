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
        <script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
        <link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
        <script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>        
    </head>
    
    <body id="page-top">
        <nav class="navbar navbar-inverse" id="mainnav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand " href="#">
                        <i class="fa fa-leaf"></i>
                        Admin
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
                                <li><a href="<?php echo base_url()?>admin/ubahpassword/<?php echo $user?>" >
                                    <i class="fa fa-cog"></i>
                                Ubah Password</a></li>
                                <li><a href="<?php echo base_url()?>admin/profile/<?php echo $user?>">
                                    <i class="fa fa-address-book-o"></i>
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
        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:14%;">
            <br>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>admin/dashboard/<?php echo $user?>" class="w3-bar-item w3-button" style="text-decoration:none;">
                        <i class="fa fa-home"> </i>
                        Dashboard
                    </a>
                </li>
                <!--               <li>
                    <a href="#" class="w3-bar-item w3-button dropdown-btn">
                        <i class="fa fa-users"> </i>
                    Administering  <b class="caret"> </b></a>
                </li> -->
                <li class="dropdown">
                    <a href="" class="dropdown-toggle w3-bar-item w3-button" data-toggle="dropdown" style="text-decoration:none;">
                        <i class="fa fa-users"> </i>
                        <label name="username">
                            Administering
                        </label>
                        <b class="caret"> </b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url()?>admin/admin_list/<?php echo $user?>" >
                            <i class="fa fa-cog"></i>
                        Admin</a></li>
                        <li><a href="<?php echo base_url()?>admin/dosen_list/<?php echo $user?>" >
                            <i class="fa fa-user"></i>
                        Dosen</a></li>
                        <li><a href="<?php echo base_url()?>admin/mahasiswa_list/<?php echo $user?>">
                            <i class="fa fa-github"></i>
                        Mahasiswa</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url()?>admin/dokumen_list/<?php echo $user?>" class="w3-bar-item w3-button" style="text-decoration:none;">
                        <span class="glyphicon glyphicon-th-list"></span>
                    Dokumentasi TA</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>admin/show_dokumen/<?php echo $user?>" class="w3-bar-item w3-button" style="text-decoration:none;">
                        <i class="fa fa-file-pdf-o"></i>
                    View Dokumentasi TA</a>
                </li>
                
            </ul>
        </div>
    </body>
</html>
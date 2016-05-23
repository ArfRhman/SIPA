<!DOCTYPE html>
<html>
<head>
    <title>SIPA POLBAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/flat-blue.css">
    <style type="text/css">
       .navbar {
        padding-left: 0px;
    }
   .navbar .navbar-breadcrumb > li {
        font-size: 1.9em;
    }
    .app-containers .content-container .side-menu .navbar-nav li a .title {
    font-size: 15px;
}
.app-containers .content-container .side-menu .navbar-nav li.dropdown ul li a {
    font-size: 15px;
}
.flat-blue .side-menu.sidebar-inverse .navbar li {
    margin-bottom: 15px;
}
.flat-blue .navbar, .flat-blue .navbar.navbar-default {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}
.btn-shadow{
    box-shadow: 4px 4px 2px -3px rgba(0, 0, 0, 0.61);
    margin-right: 1.5%;
}
</style>
</head>
<body class="flat-blue">
    <div class="app-containers">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header" style="padding: 5px 0px;">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb" style="background: url(<?php echo base_url()?>/assets/img/opl.png) no-repeat;background-size: contain;padding-left: 70px;">
                            <li class="active">Sitem Informasi Pengadaan Alat</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" ><i class="fa fa-exclamation-circle icon" style=" font-size: 25px;"></i> 
                            <span style="font-size: 15px;font-weight: bold;">4</span></a>
                            <ul class="dropdown-menu danger  animated fadeInDown" style="margin-top:10px">
                                <li class="title">
                                    Notifikasi <span class="badge pull-right">4</span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> Usulan Pengadaan
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge success">1</span> <i class="fa fa-check icon"></i> Verifikasi HPS
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> Pembuatan Kontrak
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item message">
                                               Lihat Semua
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="
    line-height: 25px;
    padding-top: 10px;
    text-align: center;
        font-size: 15px;
"><span >Manajemen <br> <b>(Teknik Komputer)</b> </span> 
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown" style="margin-top:10px">
                                <li class="profile-img">
                                    <img src="<?php echo base_url()?>/assets/img/profile/1.png" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">Dadang S.</h4>
                                        <p>dadang.s@email.com</p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="side-menu sidebar-inverse" style="margin-top: 70px;">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon "><i class="fa fa-long-arrow-right"></i></div>
                                <div class="title"> Menu </div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav" style="font-size: 20px;">
                            <li class="active list">
                                <a href="index.html">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Home</span>
                                </a>
                            </li>

                            <li class="list">
                                <a href="<?=base_url()?>Pagu">
                                    <span class="icon fa fa-money"></span><span class="title">Pagu</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="index.html">
                                    <span class="icon fa fa-file-o"></span><span class="title">Usulan</span>
                                </a>
                            </li>
                                                   
                          
                            <!-- Dropdown-->
                           <!--  <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#component-example">
                                    <span class="icon fa fa-cubes"></span><span class="title">Components</span>
                                </a>
                                 Dropdown level 1
                                <div id="component-example" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="components/pricing-table.html">Pricing Table</a>
                                            </li>
                                            <li><a href="components/chartjs.html">Chart.JS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                            
                            <li class="list">
                                <a href="license.html">
                                    <span class="icon fa fa-thumbs-o-up"></span><span class="title">License</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <?php //include 'second-top.php';


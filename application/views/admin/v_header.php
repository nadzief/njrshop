<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php echo $judul; ?> </title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo base_url() ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/custom-styles.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/js/Lightweight-Chart/cssCharts.css" rel="stylesheet">
    

    <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/DataTables/media/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.metisMenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/morris/morris.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/easypiechart.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/easypiechart-data.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom-scripts.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/Lightweight-Chart/jquery.chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/media/js/dataTables.bootstrap.js"></script>

    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }
        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
</head>

<body style="overflow-x: hidden;">

    <!-- <div class="preloader"> 
    <div class="loading"> 
        <img src="<?php echo base_url(); ?>image/loader.gif" width="80"> 
    </div> 
</div> -->

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url().'admin/dashboard'; ?>"> <img src="<?php echo base_url();?>image/logomusik.jpg" style="width: 260px; height: 60px; margin-left: -15px; margin-top: -15px;"></a>
                <div id="sideNav" href=""><i class="fa fa-caret-right"></i>
                </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i>
                        <?php echo $this->session->userdata('username'); ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url().'login/keluar_admin'; ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="<?php echo site_url().'admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url().'admin/admin'; ?>"><i class="fa fa-desktop"></i> Data Admin </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url().'admin/user'; ?>"><i class="fa fa-bar-chart-o"></i> Data User </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url().'admin/produk'; ?>"><i class="fa fa-qrcode"></i> Data Produk</a>
                    </li>

                    <li>
                        <a href="<?php echo site_url().'admin/kategori_produk'; ?>"><i class="fa fa-table"></i> Data Kategori Produk</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url().'admin/testimoni'; ?>"><i class="fa fa-edit"></i> Data Testimoni </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="fa fa-sitemap"></i> Data Laporan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"> Laporan Pembelian </a>
                            </li>
                            <li>-
                                <a href="#"> Laporan Order Produk </a>
                            </li>
                            <li>
                                <a href="#"> Laporan Order Detail <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="fa fa-sitemap"></i> Informasi <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url().'admin/aboutus'; ?>"> About Us </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/contactus'; ?>"> Contact Us </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/howtobuy'; ?>"> How To Buy </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/howtopay'; ?>"> How To Pay </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/no_rek'; ?>"> No . Rek </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/ongkir'; ?>"> Ongkir </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/wilayah_desa'; ?>"> Wilayah Desa </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/wilayah_kabupaten'; ?>"> Wilayah Kabupaten </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/wilayah_kecamatan'; ?>"> Wilayah Kecamatan </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'admin/wilayah_provinsi'; ?>"> Wilayah Provinsi </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
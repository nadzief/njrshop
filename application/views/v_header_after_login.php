<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php echo $judul; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/modal_bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/DataTables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main-style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/etalage.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.etalage.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/sweetalert.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr.custom.63321.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.catslider.js"></script>

<style>
#map-canvas {
    height: 100%;
    margin: 0px;
    padding: 0px
}
.navbar-login {
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}
.navbar-login-session {
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}
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
.mega-dropdown {
    position: static !important;
}
.mega-dropdown-menu {
    padding: 20px 0px;
    width: 100%;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.mega-dropdown-menu > li > ul {
    padding: 0;
    margin: 0;
}
.mega-dropdown-menu > li > ul > li {
    list-style: none;
}
.mega-dropdown-menu > li > ul > li > a {
    display: block;
    color: #222;
    padding: 3px 5px;
}
.mega-dropdown-menu > li ul > li > a:hover,
.mega-dropdown-menu > li ul > li > a:focus {
    text-decoration: none;
}
.mega-dropdown-menu .dropdown-header {
    font-size: 18px;
    color: #ff3546;
    padding: 5px 60px 5px 5px;
    line-height: 30px;
}
.carousel-control {
    width: 30px;
    height: 30px;
    top: -35px;
}
.left.carousel-control {
    right: 30px;
    left: inherit;
}
.carousel-control .fa-chevron-left,
.carousel-control .fa-chevron-right {
    font-size: 12px;
    background-color: #fff;
    line-height: 30px;
    text-shadow: none;
    color: #333;
    border: 1px solid #ddd;
}
.btn-fb {
    color: #fff;
    background-color: #3b5998;
}
.btn-fb:hover {
    color: #fff;
    background-color: #496ebc
}
.btn-tw {
    color: #fff;
    background-color: #55acee;
}
.btn-tw:hover {
    color: #fff;
    background-color: #59b5fa;
}
</style>

</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid" style="overflow-x: hidden;">
    
    <div class="preloader">
        <div class="loading"> 
            <img src="<?php echo base_url(); ?>image/preloader.gif" width="80"> 
        </div>
    </div>

    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top navbar-inverse" style="border-radius: 0px;">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo site_url().'web/home'; ?>">
                    NJr Shop
                </a>

            </div>

            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Men Collection</li>
                                    <div id="menCollection" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">  
                                            <div class="item active">
                                                <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1">
                                                </a>
                                                <h4><small>Summer dress floral prints</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>
                                            </div>
                                            
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2">
                                                </a>
                                                <h4><small>Gold sandals with shiny touch</small></h4>
                                                <button class="btn btn-primary" type="button">9,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>
                                            </div>
                                            
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3">
                                                </a>
                                                <h4><small>Denin jacket stamped</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>
                                            </div>
                                        </div>
                                        
                                    <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    
                                    </div>
    
                                    <li class="divider"></li>
                                    <li><a href="#">View all Collection <span class="fa fa-chevron-right"></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Features</li>
                                    <li><a href="#">Auto Carousel</a>
                                    </li>
                                    <li><a href="#">Carousel Control</a>
                                    </li>
                                    <li><a href="#">Left & Right Navigation</a>
                                    </li>
                                    <li><a href="#">Four Columns Grid</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Fonts</li>
                                    <li><a href="#">Glyphicon</a>
                                    </li>
                                    <li><a href="#">Google Fonts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Plus</li>
                                    <li><a href="#">Navbar Inverse</a>
                                    </li>
                                    <li><a href="#">Pull Right Elements</a>
                                    </li>
                                    <li><a href="#">Coloured Headers</a>
                                    </li>
                                    <li><a href="#">Primary Buttons & Default</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Much more</li>
                                    <li><a href="#">Easy to Customize</a>
                                    </li>
                                    <li><a href="#">Calls to action</a>
                                    </li>
                                    <li><a href="#">Custom Fonts</a>
                                    </li>
                                    <li><a href="#">Slide down on Hover</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Features</li>
                                    <li><a href="#">Auto Carousel</a>
                                    </li>
                                    <li><a href="#">Carousel Control</a>
                                    </li>
                                    <li><a href="#">Left and Right Navigation</a>
                                    </li>
                                    <li><a href="#">Four Columns Grid</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Fonts</li>
                                    <li><a href="#">Glyphicon</a>
                                    </li>
                                    <li><a href="#">Google Fonts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Plus</li>
                                    <li><a href="#">Navbar Inverse</a>
                                    </li>
                                    <li><a href="#">Pull Right Elements</a>
                                    </li>
                                    <li><a href="#">Coloured Headers</a>
                                    </li>
                                    <li><a href="#">Primary Buttons & Default</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Much more</li>
                                    <li><a href="#">Easy to Customize</a>
                                    </li>
                                    <li><a href="#">Calls to action</a>
                                    </li>
                                    <li><a href="#">Custom Fonts</a>
                                    </li>
                                    <li><a href="#">Slide down on Hover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Women Collection</li>
                                    <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1">
                                                </a>
                                                <h4><small>Summer dress floral prints</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2">
                                                </a>
                                                <h4><small>Gold sandals with shiny touch</small></h4>
                                                <button class="btn btn-primary" type="button">9,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3">
                                                </a>
                                                <h4><small>Denin jacket stamped</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>
                                            </div>
                                            <!-- End Item -->
                                        </div>
                                        <!-- End Carousel Inner -->
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- /.carousel -->
                                    <li class="divider"></li>
                                    <li><a href="#">View all Collection <span class="fa fa-chevron-right"></span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url().'web/kontak'; ?>">Store locator</a>
                    </li>
                </ul>
                <div class="col-sm-3 col-md-5">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" style="color: white; margin-top: -2px;"> 
                            <img style="width: 40px; height: 30px;" class="img-circle" src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" />  <?php echo $this->session->userdata('username') ?>!
                        </a>
                        <ul style="background-color:white;" class="dropdown-menu dropdown-menu-right">
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p class="text-center">
                                                <img style="width: 90px; height: 80px;" class="img-circle" src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" />
                                            </p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-left"><strong> <?php echo $this->session->userdata('username') ?> </strong>
                                            </p>
                                            <p class="text-left small">
                                                <?php echo $this->session->userdata('email') ?> </p>
                                            <p class="text-left">

                                                <a href="<?php echo base_url().'web/profil/'.$this->session->userdata('id_anggota'); ?>" class="btn btn-primary btn-block btn-sm">Lihat Profil Lengkap</a>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="navbar-login navbar-login-session">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>
                                                <a href="<?php echo base_url().'login/keluar' ?>" class="btn btn-danger btn-block btn-sm"> <span class="fa fa-sign-out"></span> Logout</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <script type="text/javascript">
        $(function() {
            $('#example1').dataTable();
        });

        $(document).ready(function() {
            $(".preloader").fadeOut();
        });

        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                    $(this).toggleClass('open');
                }
            );
        });

        $(function() {

            $('#mi-slider').catslider();

        });
    </script>
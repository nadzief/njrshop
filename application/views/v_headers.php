<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $judul; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/modal_bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/DataTables/media/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main-style.css">
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
      transform: translate(-50%,-50%);
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
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
</style>

</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid" style="overflow-x: hidden;">

<div class="preloader"> <div class="loading"> <img src="<?php echo base_url(); ?>image/loader.gif" width="80"> </div> </div>

<div class="container">
  <nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius: 0px;">
    
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url().'web/home'; ?>">NJr Shop</a>
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
                        <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                        <h4><small>Summer dress floral prints</small></h4>                                        
                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>       
                      </div>
                                
                      <div class="item">
                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                        <h4><small>Gold sandals with shiny touch</small></h4>                                        
                        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>        
                      </div>
                                
                      <div class="item">
                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                        <h4><small>Denin jacket stamped</small></h4>                                        
                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>      
                      </div>                                
                    
                    </div>
                  
                    <!-- Controls -->
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
                  <li><a href="#">View all Collection <span class="fa fa-chevron-right"></span></a></li>
            </ul>
          </li>

          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Features</li>
              <li><a href="#">Auto Carousel</a></li>
              <li><a href="#">Carousel Control</a></li>
              <li><a href="#">Left & Right Navigation</a></li>
              <li><a href="#">Four Columns Grid</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Fonts</li>
              <li><a href="#">Glyphicon</a></li>
              <li><a href="#">Google Fonts</a></li>
            </ul>
          </li>

          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Plus</li>
              <li><a href="#">Navbar Inverse</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li><a href="#">Coloured Headers</a></li>                            
              <li><a href="#">Primary Buttons & Default</a></li>              
            </ul>
          </li>

          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Much more</li>
              <li><a href="#">Easy to Customize</a></li>
              <li><a href="#">Calls to action</a></li>
              <li><a href="#">Custom Fonts</a></li>
              <li><a href="#">Slide down on Hover</a></li>                         
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
                <li><a href="#">Auto Carousel</a></li>
                <li><a href="#">Carousel Control</a></li>
                <li><a href="#">Left & Right Navigation</a></li>
                <li><a href="#">Four Columns Grid</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Fonts</li>
                <li><a href="#">Glyphicon</a></li>
                <li><a href="#">Google Fonts</a></li>
              </ul>
            </li>

            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Plus</li>
                <li><a href="#">Navbar Inverse</a></li>
                <li><a href="#">Pull Right Elements</a></li>
                <li><a href="#">Coloured Headers</a></li>                            
                <li><a href="#">Primary Buttons & Default</a></li>              
              </ul>
            </li>

            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Much more</li>
                <li><a href="#">Easy to Customize</a></li>
                <li><a href="#">Calls to action</a></li>
                <li><a href="#">Custom Fonts</a></li>
                <li><a href="#">Slide down on Hover</a></li>                         
              </ul>
            </li>
                    
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Women Collection</li>                            
                  <div id="womenCollection" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      
                      <div class="item active">
                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                        <h4><small>Summer dress floral prints</small></h4>                                        
                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>       
                      </div>
                      
                      <div class="item">
                        <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                        <h4><small>Gold sandals with shiny touch</small></h4>                                        
                        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>        
                      </div>
                                
                      <div class="item">
                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                        <h4><small>Denin jacket stamped</small></h4>                                        
                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="fa fa-heart"></span> Add to Wishlist</button>      
                      </div>                               
                    </div>
                              
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
                <li class="divider"></li>
              <li><a href="#">View all Collection <span class="fa fa-chevron-right"></span></a></li>
            </ul>
          </li>
        </ul>       
      </li>
      <li><a href="#">Store locator</a></li>
    </ul>

    <div class="col-sm-3 col-md-5">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
       
    <ul class="nav navbar-nav pull-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-sign-in"></span> Login </a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu" style="width: 355px;">
            <li>
              <div class="col-md-12" style="width: 350px;">
              <br>
                <form class="form" role="form" method="post" action="<?php echo base_url(); ?>login/cekLogin" accept-charset="UTF-8" id="loginform">
                  <div class="form-group">
                    <label class="sr-only" for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                  </div>
                      
                  <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> keep me logged-in
                      </label>
                    </div>

                    <div class="help-block text-right" style="margin-top: -30px;">
                      <a href="#">Forget the password ?</a>
                    </div>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-info btn-block"> 
                        <i class="fa fa-sign-in"></i> Sign in
                      </button>
                  </div>
                    
                  <p align="center"> atau </p>
                
                  <div class="social-buttons">
                    <a href="javascript:;" class="btn btn-fb btn-block"> Login via <i class="fa fa-facebook"></i> Facebook</a>
                    <a href="javascript:;" class="btn btn-tw btn-block"> Login via <i class="fa fa-twitter"></i> Twitter</a>
                  </div>
                  
                  <br>
                  
                  <p align="center"> Belum Punya Akun ?  </p>
                      
                  <div class="social-buttons">
                    <a href="#mymodal_register" data-toggle="modal" class="btn btn-success btn-block"> Daftar disini </a>
                  </div>
                </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </li>
  </ul>

<script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
            
            $(document).ready(function(){
      $(".preloader").fadeOut();
    });

$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

 $(function () {

            $('#mi-slider').catslider();

        });
</script>

<div id="mymodal_register" class="modal fade">
  <div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
    
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
        <span aria-hidden="true">&times;</span>
      </button>
      <h3 class="modal-title" id="myModalLabel"> Pendaftaran Akun </h3>
    </div>

    <div class="modal-body">
      <div class="row">
        <div class="col-xs-12">
          <div class="well">
            <form action="<?php echo site_url().'register'; ?>" method="post" accept-charset="utf-8">

            <div class="form-group">
              <label for="username" class="control-label"> Username </label>
              <input type="text" name="username" id="username" class="form-control" placeholder="username" value="<?php echo set_value('username'); ?>" required>
              <span class="help-block"></span>
            </div>

            <div class="form-group">
              <label for="password" class="control-label"> Password </label>
              <input type="password" name="password" id="password" class="form-control" placeholder="password" value="<?php echo set_value('password'); ?>" required>
              <span class="help-block"></span>
            </div>

            <div class="form-group">
              <label for="password_conf" class="control-label"> Re-Password </label>
              <input type="password" name="password_conf" id="password_conf" class="form-control" placeholder="konfirmasi password" value="<?php echo set_value('password_conf'); ?>" required>
              <span class="help-block"></span>
            </div>

            <div class="form-group">
              <label for="nama_lengkap" class="control-label"> Nama Lengkap </label>
              <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="nama lengkap" value="<?php echo set_value('nama_lengkap'); ?>" required>
              <span class="help-block"> </span>
            </div>

            <div class="form-group">
              <label for="email" class="control-label"> Email </label>
              <input type="text" name="email" id="email" class="form-control" placeholder="email" value="<?php echo set_value('email'); ?>" required>
              <span class="help-block"> </span>
            </div>

            <div class="form-group">
              <label for="no_hp" class="control-label"> No. Hp </label>
              <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="no_hp" value="<?php echo set_value('no_hp'); ?>" required>
              <span class="help-block"> </span>
            </div>

            <div class="form-group">
              <label for="jenis_kelamin" class="control-label"> Jenis Kelamin </label> <br>
              <input type="radio" name="jenis_kelamin" value="Laki" <?php if ('Laki') { 
                echo "selected=selected"; 
                } 
              ?>> Laki

              <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ('Perempuan') {
                echo "selected=selected";
                }
                ?>> Perempuan
              <span class="help-block"> </span>
            </div>

            <div class="form-group">
              <label for="alamat" class="control-label"> Alamat </label>
              <textarea name="alamat" id="alamat" class="form-control" value="<?php echo set_value('alamat'); ?>">
              </textarea>
              <span class="help-block"> </span>
            </div>

            <div class="form-group">
              <label for="kota" class="control-label"> Kota </label>
              <select name="kota" required class="form-control" placeholder="kota" value="<?php echo set_value('kota'); ?>">
                <option> --Pilih-- </option>
                <option value="Jakarta" <?php if('Jakarta') {
                  echo "selected=selected"; }
                  ?>> Jakarta </option>
                <option value="Bogor" <?php if('Bogor') {
                  echo "selected=selected"; }
                  ?>> Bogor </option>
                <option value="Depok" <?php if('Depok') {
                  echo "selected=selected"; }
                  ?>> Depok </option>
                <option value="Tangerang" <?php if('Tangerang') {
                  echo "selected=selected"; }
                  ?>> Tangerang </option>
                <option value="Bekasi" <?php if('Bekasi') {
                  echo "selected=selected"; }
                  ?>> Bekasi </option>
                <option value="Bandung" <?php if('Bandung') {
                  echo "selected=selected"; }
                  ?>> Bandung </option>
                <option value="Yogyakarta" <?php if('Yogyakarta') {
                  echo "selected=selected"; }
                  ?>> Yogyakarta </option>
                <option value="Surabaya" <?php if('Surabaya') {
                  echo "selected=selected"; }
                  ?>> Surabaya </option>
                <option value="Lainnya" <?php if('Lainnya') {
                  echo "selected=selected"; }
                  ?>> Lainnya </option>
              </select>
              <span class="help-block"> </span>
            </div>

            <div class="form-group">
              <label for="no_rek" class="control-label"> No. Rek </label>
              <input type="text" name="no_rek" id="no_rek" class="form-control" placeholder="no rek" value="<?php echo set_value('no_rek'); ?>" required>
              <span class="help-block"> </span>
            </div>

            <div class="loginerrormsg" class="alert alert-error hide"> Wrong Username and Password 
            </div>
              
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-info"> Daftar </button>
              <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"> Close </button>
            </div>
        </div>
       </form>
      </div>
    </div>

    </div>
  </div>
</div>
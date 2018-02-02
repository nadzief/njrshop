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
  <link  rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<style>
  .affix {
      top: 0;
      width: 100%;
      z-index: +99999;
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
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
  </style>
  <script>
    function simpleSlideshow(slideContainer, duration)
    {
        var currentSlide = $('img:nth-child(1)', slideContainer);
        $(currentSlide)
        .css({
            opacity: 0 
        })
        .appendTo(slideContainer)
        .animate({
            opacity: 1
        }, 'normal', function(){
            setTimeout(function(){
                simpleSlideshow(slideContainer, duration);
            }, duration);
        })
    }
    $(function(){
        var duration = 3000;       
        var slideContainer = $('#slideshow');
        simpleSlideshow(slideContainer, duration);
    });
     $(document).ready(function(){
      $(".preloader").fadeOut();
    });
    </script>

</head>
<body style="overflow-x: hidden; background: silver;">

<div class="preloader"> 
    <div class="loading"> 
        <img src="<?php echo base_url(); ?>image/loader.gif" width="80"> 
    </div>
</div>

<!--<img src="<?php echo base_url() ?>image/logo-header.jpg" class="container-fluid" style="width: 102%; margin-left: -13px; height: 200px;"> -->
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="205">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" class="active" href="<?php echo base_url() ?>"><span class="fa fa-home"> </span> NJr Shop</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"> Produk <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url().'web'; ?>">All Produk</a></li>
          <?php foreach ($datakategori as $katproduk) { ?>
          <li><a href="<?php echo site_url().'web/index_kategori_produk/'.$katproduk->id;?>"><?php echo $katproduk->category;?> </a></li>
          <?php } ?>
        </ul>
      </li>
      <li><a href="<?php echo base_url().'web/index_aboutus' ?>"> About Us</a></li>
      <li><a href="<?php echo base_url().'web/index_kontak' ?>"> Contact Us</a></li>
      <li><a href="<?php echo base_url().'web/index_howtobuy' ?>"> Cara Belanja</a></li>
      
    </ul>
    <div id="right">
      <ul class="nav navbar-nav">
      <li> <a href="#myModal" data-toggle="modal"> <span class="fa fa-sign-in"></span> Login </a> </li>
      </ul>
    </div>
  </div>
</nav>

<!--<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div> -->

<!-- <div id='slideshow'>
    <img src="<?php echo base_url(); ?>image/banner1.jpg">
    <img src="<?php echo base_url(); ?>image/banner2.png">
    <img src="<?php echo base_url(); ?>image/banner3.jpg">
    <img src="<?php echo base_url(); ?>image/banner4.jpg">
</div> -->


<div id="myModal" class="modal fade">
        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">Login To NJr - Shop </h2>
            </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="well">
                        <form id="loginform" role="form" method="POST" action="<?php echo base_url(); ?>login/cekLogin">
                        <div class="form-group">
                        <label for="username" class="control-label"> Username </label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="username" required>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="password" class="control-label"> Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                        <span class="help-block"></span>
                        <div id="loginerrormsg" class="alert alert-error hide"> Wrong Username and Password </div>
                        <button type="submit" class="btn btn-success"> Login </button>
                        </div>
                        </div>
                        </form>
                        </div>
                        <div class="modal-footer">
                        Belum punya akun? <a href="#mymodal_register" data-toggle="modal" class="btn btn-warning"> Daftar </a> disini 
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div id="myModals" class="modal fade">
        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Silahkan login dulu sebelum membeli barang </h4>
            </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="well">
                        <form id="loginform" role="form" method="POST" action="<?php echo base_url(); ?>login/cekLogin">
                        <div class="form-group">
                        <label for="username" class="control-label"> Username </label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="username" required>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="password" class="control-label"> Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                        <span class="help-block"></span>
                        <div id="loginerrormsg" class="alert alert-error hide"> Wrong Username and Password </div>
                        <button type="submit" class="btn btn-success"> Login </button>
                        </div>
                        </div>
                        </form>
                        </div>
                        <div class="modal-footer">
                        Belum punya akun? <a href="#mymodal_register" data-toggle="modal" class="btn btn-primary"> Daftar </a> disini 
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

<div id="mymodal_register" class="modal fade">
        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel"> Pendaftaran Akun </h3>
            </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="well">
                        <?php echo form_open('register'); ?>
                        <div class="form-group">
                        <label for="username" class="control-label"> Username </label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="username" value="<?php echo set_value('username'); ?>" autofocus required>
                        <p> <?php echo form_error('username'); ?> </p>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="password" class="control-label"> Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password" value="<?php echo set_value('password'); ?>" autofocus required>
                        <p> <?php echo form_error('password'); ?> </p>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="password_conf" class="control-label"> Re-Password </label>
                        <input type="password" name="password_conf" id="password_conf" class="form-control" placeholder="konfirmasi password" value="<?php echo set_value('password_conf'); ?>" autofocus required>
                        <p> <?php echo form_error('password_conf'); ?> </p>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="nama_lengkap" class="control-label"> Nama Lengkap </label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="nama lengkap" value="<?php echo set_value('nama_lengkap'); ?>" autofocus required>
                        <p> <?php echo form_error('nama_lengkap'); ?> </p>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="email" class="control-label"> Email </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="email" value="<?php echo set_value('email'); ?>" autofocus required>
                        <p> <?php echo form_error('email'); ?> </p>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="jenis_kelamin" class="control-label"> Jenis Kelamin </label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki" <?php if ('Laki') {
                            echo "selected=selected"; } ?>> Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ('Permepuan') {
                            echo "selected=selected"; } ?>> Perempuan
                        <p> <?php echo form_error('jenis_kelamin'); ?> </p> 
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="alamat" class="control-label"> Alamat </label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" value="<?php echo set_value('alamat'); ?>" autofocus required>
                        <p> <?php echo form_error('alamat'); ?> </p>
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="kota" class="control-label"> Kota </label>
                        <select name="kota" required class="form-control" placeholder="kota" value="<?php echo set_value('kota'); ?>"> 
                                    <option> -- Pilih -- </option> 
                                    <option value="Jakarta" <?php if ('Jakarta') { 
                                      echo "selected=selected"; } ?>> Jakarta </option> 
                                    <option value="Bogor" <?php if ('Bogor') { 
                                      echo"selected"; } ?>> Bogor </option> 
                                    <option value="Depok" <?php if ('Depok') { 
                                      echo"selected"; } ?>> Depok </option> 
                                    <option value="Tangerang" <?php if ('Tangerang') { 
                                      echo"selected"; } ?>> Tangerang </option> 
                                    <option value="Bekasi" <?php if ('Bekasi') { 
                                      echo"selected"; } ?>> Bekasi </option> 
                                    <option value="Bandung" <?php if ('Bandung') { 
                                      echo"selected"; } ?>> Bandung </option> 
                                    <option value="Yogyakarta" <?php if ('Yogyakarta') { 
                                      echo"selected"; } ?>> Yogyakarta </option> 
                                    <option value="Surabaya" <?php if ('Surabaya') { 
                                      echo"selected"; } ?>> Surabaya </option> 
                                    <option value="Palembang" <?php if ('Palembang') { 
                                      echo"selected"; } ?>> Palembang </option> 
                                    <option value="Lainnya" <?php if ('Lainnya') { 
                                      echo"selected"; } ?>> Lainnya </option> 
                        </select>
                        <p> <?php echo form_error('jenis_kelamin'); ?> </p> 
                        <span class="help-block"></span>
                        <div class="form-group">
                        <label for="no_rek" class="control-label"> No. Rek </label>
                        <input type="text" name="no_rek" id="no_rek" class="form-control" placeholder="no_rek" value="<?php echo set_value('no_rek'); ?>" autofocus required>
                        <p> <?php echo form_error('no_rek'); ?> </p>
                        <span class="help-block"></span>
                        <div id="loginerrormsg" class="alert alert-error hide"> Wrong Username and Password </div>
                        <button type="submit" class="btn btn-success"> Daftar </button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"> Close </button> 
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div> 
</body>
</html>
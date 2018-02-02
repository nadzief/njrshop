<div class="col-md-pull-2">
<div id="kiri">
    <div class="row">
        <div class="col-sm-4" style="margin-left: 5px; margin-top: 1px;">
            <div class='panel panel-primary' style="width: 230px; border-radius: 0;">
                <div class='panel-heading' style="border-radius: 0;">
                    <h3 class='panel-title'> <span class="glyphicon glyphicon-shopping-cart"></span> Keranjang Belanja Saya</h3>
                </div>
                <div class='panel-body'>
                    <p>
                        <?php echo $this->cart->total_items();?> items produk </p>
                    <p style="border: 1px solid;"></p>
                    <p> Total : Rp.
                        <?php echo $this->cart->format_number($this->cart->total()); ?> </p>
                    <p>
                        <a href="<?php echo base_url('web/cart'); ?>">
                            <button type="button" class="btn btn-primary" style="border-radius: 17px;"> To Cart </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4" style="margin-left: 5px; border-radius: 0;">
            <div class='panel panel-primary' style="width: 230px; border-radius: 0;">
                <div class='panel-heading' style="border-radius: 0;">
                    <h3 class='panel-title'> <span class="glyphicon glyphicon-list-alt"> </span> Kategori Produk  <button type="button" class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#demo2" style="float: right; margin-top: -5px;"> <span class="glyphicon glyphicon-chevron-down"> </span> </button></h3>
                </div>
                <div class='panel-body' id="demo2" class="collapse in">
                    <table>
                        <tbody>
                            <?php foreach ($datakategori as $kategori) { ?>
                            <tr>
                                <td> <b> <span class="glyphicon glyphicon-chevron-right"> </span> <a href="<?php echo site_url().'web/kategori_produk/'.$kategori->id;?>"><?php echo $kategori->category; ?> </a>  </b> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div id="testimoni" class="col-sm-4" style="margin-left: 5px;">
        <div class='panel panel-primary' style="width: 230px; border-radius: 0;">
            <div class='panel-heading' style="border-radius: 0;">
                <h3 class='panel-title'> <span class="glyphicon glyphicon-comment"> </span> Testimonial <button type="button" class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#demo3" style="float: right; margin-top: -5px;"> <span class="glyphicon glyphicon-chevron-down"> </span> </button></h3>
            </div>
            <div class='panel-body' id="demo3" class="collapse in" style="background: silver;">
                <table>
                    <tbody>
                        <p> Silahkan klik tombol di bawah ini untuk mengisi testimonial anda </p>
                        <p>
                            <a href="#testimoni_modal" data-toggle="modal">
                                <button type="button" class="btn btn-primary" style="border-radius: 17px;"> Isi Testimoni </button>
                            </a>
                        </p>
                        <p>
                            <a href="#lihat_testimoni_modal" data-toggle="modal">
                                <button type="button" class="btn btn-success" style="border-radius: 17px;"> Lihat Data Testimoni </button>
                            </a>
                        </p>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-sm-4" style="margin-left: 5px; margin-top: 1px;">
            <div class='panel panel-primary' style="width: 230px; border-radius: 0;">
                <div class='panel-heading' style="border-radius: 0;">
                    <h3 class='panel-title'> <span class="fa fa-chain"></span> Produk Terlaris </h3>
                </div>
                <div class='panel-body'>
                  
                <div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
            <div class="row">
                <div class="col-md-4">
                    <!-- <span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up "
                        style="font-size: 30px"></span> --> 
                </div>
                <div class="col-md-8"> 
                </div>
            </div>
            <br />
            <!-- Carousel items -->
            <div class="carousel-inner">
                
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="<?php echo base_url() ?>/produk/dj1.jpg"  class="thumbnail"
                                alt="Image" style="width: 160px; height: 150px;" class="best">
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="item ">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="<?php echo base_url() ?>/produk/hp11.jpg"  class="thumbnail"
                                alt="Image" style="width: 160px; height: 150px;" class="best">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="row">
                      <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="<?php echo base_url() ?>/produk/pc1.jpg" class="thumbnail"
                                alt="Image" style="width: 160px; height: 150px;" class="best">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="row">
                      <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img  src="<?php echo base_url() ?>/produk/laptop1.jpg" class="thumbnail"
                                alt="Image" style="width: 160px; height: 150px;" class="best">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="row">
                      <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="<?php echo base_url() ?>/produk/sepatu3.jpg" class="thumbnail"
                                alt="Image" style="width: 160px; height: 150px;" class="best">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="row">
                      <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="<?php echo base_url() ?>/produk/jersey3.jpg" class="thumbnail"
                                alt="Image" style="width: 160px; height: 150px;" class="best">
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- <span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
                        style="color: Black; font-size: 30px"></span> -->
                </div>
                <div class="col-md-8">
                </div>
            </div>
    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4" style="margin-left: 5px; margin-top: 1px;">
            <div class='panel panel-primary' style="width: 230px; border-radius: 0;">
                <div class='panel-heading' style="border-radius: 0;">
                    <h3 class='panel-title'> <span class="fa fa-bookmark"> </span> Social Media Kami </h3>
                </div>
                <div class='panel-body'>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item visitor">
                    <h3 class="pull-right">
                        <i class="fa fa-eye"></i>
                    </h3>
                    <h4 class="list-group-item-heading count">
                        1000</h4>
                    <p class="list-group-item-text">
                        Profile Views</p>
                </a>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item facebook-like">
                    <h3 class="pull-right">
                        <i class="fa fa-facebook-square"></i>
                    </h3>
                    <h4 class="list-group-item-heading count">
                        1000</h4>
                    <p class="list-group-item-text">
                        Facebook Likes</p>
                </a>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item google-plus">
                    <h3 class="pull-right">
                        <i class="fa fa-google-plus-square"></i>
                    </h3>
                    <h4 class="list-group-item-heading count">
                        1000</h4>
                    <p class="list-group-item-text">
                        Google+</p>
                </a>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item twitter">
                    <h3 class="pull-right">
                        <i class="fa fa-twitter-square"></i>
                    </h3>
                    <h4 class="list-group-item-heading count">
                        1000</h4>
                    <p class="list-group-item-text">
                        Twitter Followers</p>
                </a>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item tumblr">
                    <h3 class="pull-right">
                        <i class="fa fa-tumblr-square"></i>
                    </h3>
                    <h4 class="list-group-item-heading count">
                        1000</h4>
                    <p class="list-group-item-text">
                        Tumblr</p>
                </a>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item linkedin">
                        <h3 class="pull-right">
                            <i class="fa fa-linkedin-square"></i>
                        </h3>
                        <h4 class="list-group-item-heading count">
                            1000</h4>
                        <p class="list-group-item-text">
                            Linkedin</p>
                </a>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item youtube">
                        <h3 class="pull-right">
                            <i class="fa fa-youtube-play"></i>
                        </h3>
                        <h4 class="list-group-item-heading count">
                            1000</h4>
                        <p class="list-group-item-text">
                            Youtub Play</p>
                </a>
                <a href="<?php echo site_url().'web/home'; ?>" class="list-group-item vimeo">
                        <h3 class="pull-right">
                            <i class="fa fa-vimeo-square"></i>
                        </h3>
                        <h4 class="list-group-item-heading count">
                            1000</h4>
                        <p class="list-group-item-text">
                            Vimeo</p>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimoni_modal" class="modal fade">
    <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title" id="myModalLabel" style="color: black;"> Isi Testimoni Anda </h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="well">
                            <form id="testimoni" role="form" method="POST" action="<?php echo base_url(); ?>web/testimoni">
                                <div class="form-group">
                                    <label for="nama" class="control-label"> Nama </label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" value="<?php echo $this->session->userdata('username') ?>" required>
                                    <span class="help-block"></span>
                                    <div class="form-group">
                                        <label for="alamat" class="control-label"> Alamat </label>
                                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" required>
                                        <span class="help-block"></span>
                                        <div class="form-group">
                                            <label for="pesan" class="control-label"> Pesan </label>
                                            <textarea name="pesan" id="pesan" class="form-control" placeholder="pesan" required></textarea>
                                            <span class="help-block"></span>
                                            <div id="loginerrormsg" class="alert alert-error hide"> Wrong Username and Password </div>
                                            <button type="submit" class="btn btn-success"> Kirim </button>
                                        </div>
                                    </div>
                            </form>
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

<div id="lihat_testimoni_modal" class="modal fade">
    <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title" id="myModalLabel" style="color: black;"> Data Testimoni </h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="well">
                            <div class="table-responsive">
                                <div class="page-header">
                                    <h3> Data Testimonial </h3>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="info">
                                            <th> No </th>
                                            <th> Nama </th>
                                            <th> Alamat </th>
                                            <th> Pesan </th>
                                        </tr>
                                    </thead>
                                    <?php $no=1 ; foreach ($datatestimoni as $testimoni) { ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <?php echo $testimoni->nama ?> </td>
                                            <td>
                                                <?php echo $testimoni->alamat ?> </td>
                                            <td>
                                                <?php echo $testimoni->pesan ?> </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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

<script>
        $(document).ready(function () {

    $('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#myCarousel').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#myCarousel').carousel('prev')
        }

    });
});
</script>
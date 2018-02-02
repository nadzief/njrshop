<div class="container-fluid">
<div class="col-md-offset-10">
<div id="content" style="margin-top: 70px;">
    <!-- <div class="1" style="border: 1px solid;"></div> -->
    <div style="width: 1080px;">
        <ol class="breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li>Produk</li>
            <li class="active">Detail Produk</li>
        </ol>
    </div>

    <div class="row" align="center">

        <?php if (isset($dataproduk)) { foreach ($dataproduk as $produk) { ?>
        
        <div class="isi" style="width: 410px; height: 500px; float: left; margin-left: 20px;">
            
            <!-- <img class="etalage_thumb_image" src="<?php echo base_url() ?>/produk/<?php echo $produk->gambar; ?>" style="width: 500px; height: 300px; float: left;"> -->

            <ul id="etalage" style="margin-left: 5px;">
                <li>
                    <img class="etalage_thumb_image" src="<?php echo base_url() ?>/produk/<?php echo $produk->gambar; ?>">
                    <img class="etalage_source_image" src="<?php echo base_url() ?>/produk/<?php echo $produk->gambar; ?>">
                </li>
            </ul>

        </div>

        <div class="caption">
            <div class="col-md-7" style="margin-left: 35px;">
            <h3> Rp. <?php echo number_format($produk->harga); ?> </h3>
            <p>
                <?php if ($produk->stok > 1) { ?>
                <a href="<?php echo site_url().'web/add/'.$produk->id_produk; ?>">
                    <button class="btn btn-primary" style="border-radius: 0px; width: 100px;"> Beli </button>
                </a>
                <?php } else { ?>
                <button class="btn btn-default" disabled style="border-radius: 0px; width: 100px;"> Stok Habis </button>
                <?php } ?>
            </p>
            <br>
            <p><b> Deskripsi Produk </b>
            </p>
            <p>
                <?php echo $produk->deskripsi; ?></p>
            <p> =========================================== </p>
            <div class="dess" style="text-align: left; margin-left: 210px;">
                <p> Nama Produk :
                    <?php echo $produk->nama_produk; ?> </p>
                <p> Kategori Produk :
                    <?php echo $produk->nama_kategori; ?> </p>
                <p> Bahan :
                    <?php echo $produk->bahan; ?> </p>
                <p> Berat :
                    <?php echo $produk->berat; ?> </p>
                <p> Warna :
                    <?php echo $produk->warna; ?> </p>
                <p> Stok :
                    <?php echo number_format($produk->stok); ?> </p>
                <p> Harga Rp.
                    <?php echo number_format($produk->harga); ?> </p>
            </div>
            <p> =========================================== </p>
            </div>
        </div>

    <div class="row">
        <div  class="col-sm-6" style="margin-left: 50px; width: 1000px;">
        <hr> 
        <div class="col-xs-3">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#home" data-toggle="tab" class="fa fa-comments"> Deksripsi Produk </a></li>
                <li><a href="#profile" data-toggle="tab" class="fa fa-bookmark"> Produk Tags </a></li>
                <li><a href="#messages" data-toggle="tab" class="fa fa-info-circle"> Produk Review </a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home"> 
                <p> <b> <h3> Deskripsi Produk </h3> </b> </p>
                <p> <?php echo $produk->deskripsi; ?> </p>
                </div>
                <div class="tab-pane" id="profile">
                <p> <b> <h3> Tags Produk </h3> </b> </p>
                <p> 
                    <input type="text" class="form-control" name="produk_tags" placeholder="Input Your Produk Tags"> 
                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;"> Kirim </button>
                </p>
                </div>
                <div class="tab-pane" id="messages">
                <p> <b> <h3> Produk Review </h3> </b> </p>
                <p>
                    <input type="text" class="form-control" name="produk_review" placeholder="Input Your Produk Review">
                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;"> Kirim </button>
                </p>    
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
        <?php } } ?>

        </form>
    </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $('#etalage').etalage({
            thumb_image_width: 450,
            thumb_image_height: 350,
            source_image_width: 1500,
            source_image_height: 1500
        });
    });
    $({ someValue: 0 }).animate({ someValue: Math.floor(Math.random() * 3000) }, {
    duration: 3000,
    easing: 'swing', // can be anything
    step: function () { // called on every step
        // Update the element's text with rounded-up value:
        $('.count').text(commaSeparateNumber(Math.round(this.someValue)));
    }
});

function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
}
</script>

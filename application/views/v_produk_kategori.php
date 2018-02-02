<div id="content">
    <p>
        <h2 align="center"> Daftar Produk </h2>
    </p>
    <p>
        <div class="1" style="border: 1px solid;"> </div>
    </p>


    <div class="row">
        <!-- <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a></li>
            <li>Kategori Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_laptop'; ?>"> Alat Musik </a> </li>
        </ol>
    </div> -->

        <?php if(isset($dataprodukkategori)) { foreach ($dataprodukkategori as $produk) { $id=$produk->id_produk; $nama = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

        <div class="col-sm-3 col-md-3">
            <div class="thumbnail" class="img-responsive">
                <img src="<?php echo base_url() ?>/produk/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">
                <div class="caption">
                    <h3 style="min-height:60px; text-align: center;"><?php echo $nama; ?></h3>
                    <p align="center">Stock :
                        <?php echo $stok ?>
                    </p>
                    <p align="center">Rp.
                        <?php echo number_format($harga); ?>
                    </p>
                    <p align="center">
                        <?php if ($stok> 1) { ?>
                        <a href="<?php echo site_url().'web/add/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Beli </button>
                        </a>
                        <?php } else { ?>
                        <button class="btn btn-default" disabled> Stok Habis </button>
                        <?php } ?>
                        <a href="<?php echo base_url().'web/detail_produk/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Details </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>

    <div class="row">
        <!-- <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a></li>
            <li>Kategori Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_laptop'; ?>"> Handphone </a> </li>
        </ol>
        </div> -->

        <?php if(isset($dataprodukkategorihp)) { foreach ($dataprodukkategorihp as $produk) { $id=$produk->id_produk; $nama = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

        <div class="col-sm-3 col-md-3">
            <div class="thumbnail" class="img-responsive">
                <img src="<?php echo base_url() ?>/produk/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">
                <div class="caption">
                    <h3 style="min-height:60px; text-align: center;"><?php echo $nama; ?></h3>
                    <p align="center">Stock :
                        <?php echo $stok ?>
                    </p>
                    <p align="center">Rp.
                        <?php echo number_format($harga); ?>
                    </p>
                    <p align="center">
                        <?php if ($stok> 1) { ?>
                        <a href="<?php echo site_url().'web/add/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Beli </button>
                        </a>
                        <?php } else { ?>
                        <button class="btn btn-default" disabled> Stok Habis </button>
                        <?php } ?>
                        <a href="<?php echo base_url().'web/detail_produk/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Details </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>

    <div class="row">
        <!-- <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a></li>
            <li>Kategori Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_laptop'; ?>"> Komputer </a> </li>
        </ol>
        </div> -->

        <?php if(isset($dataprodukkategorikomputer)) { foreach ($dataprodukkategorikomputer as $produk) { $id=$produk->id_produk; $nama = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

        <div class="col-sm-3 col-md-3">
            <div class="thumbnail" class="img-responsive">
                <img src="<?php echo base_url() ?>/produk/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">
                <div class="caption">
                    <h3 style="min-height:60px; text-align: center;"><?php echo $nama; ?></h3>
                    <p align="center">Stock :
                        <?php echo $stok ?>
                    </p>
                    <p align="center">Rp.
                        <?php echo number_format($harga); ?>
                    </p>
                    <p align="center">
                        <?php if ($stok> 1) { ?>
                        <a href="<?php echo site_url().'web/add/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Beli </button>
                        </a>
                        <?php } else { ?>
                        <button class="btn btn-default" disabled> Stok Habis </button>
                        <?php } ?>
                        <a href="<?php echo base_url().'web/detail_produk/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Details </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>

    <div class="row">
        <!-- <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a></li>
            <li>Kategori Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_laptop'; ?>"> Laptop </a> </li>
        </ol>
        </div> -->

        <?php if(isset($dataprodukkategorilaptop)) { foreach ($dataprodukkategorilaptop as $produk) { $id=$produk->id_produk; $nama = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

        <div class="col-sm-3 col-md-3">
            <div class="thumbnail" class="img-responsive">
                <img src="<?php echo base_url() ?>Produk/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">
                <div class="caption">
                    <h3 style="min-height:60px; text-align: center;"><?php echo $nama; ?></h3>
                    <p align="center">Stock :
                        <?php echo $stok ?>
                    </p>
                    <p align="center">Rp.
                        <?php echo number_format($harga); ?>
                    </p>
                    <p align="center">
                        <?php if ($stok> 1) { ?>
                        <a href="<?php echo site_url().'web/add/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Beli </button>
                        </a>
                        <?php } else { ?>
                        <button class="btn btn-default" disabled> Stok Habis </button>
                        <?php } ?>
                        <a href="<?php echo base_url().'web/detail_produk/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Details </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>

    <div class="row">
        <!-- <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a></li>
            <li>Kategori Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_laptop'; ?>"> Sepatu Futsal </a> </li>
        </ol>
        </div> -->
        <?php if(isset($dataprodukkategorisepatu)) { foreach ($dataprodukkategorisepatu as $produk) { $id=$produk->id_produk; $nama = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

        <div class="col-sm-3 col-md-3">
            <div class="thumbnail" class="img-responsive">
                <img src="<?php echo base_url() ?>Produk/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">
                <div class="caption">
                    <h3 style="min-height:60px; text-align: center;"><?php echo $nama; ?></h3>
                    <p align="center">Stock :
                        <?php echo $stok ?>
                    </p>
                    <p align="center">Rp.
                        <?php echo number_format($harga); ?>
                    </p>
                    <p align="center">
                        <?php if ($stok> 1) { ?>
                        <a href="<?php echo site_url().'web/add/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Beli </button>
                        </a>
                        <?php } else { ?>
                        <button class="btn btn-default" disabled> Stok Habis </button>
                        <?php } ?>
                        <a href="<?php echo base_url().'web/detail_produk/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Details </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>


    <div class="row">
        <!-- <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a></li>
            <li>Kategori Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_laptop'; ?>"> Jersey </a> </li>
        </ol>
        </div> -->
        <?php if(isset($dataprodukkategorijersey)) { foreach ($dataprodukkategorijersey as $produk) { $id=$produk->id_produk; $nama = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

        <div class="col-sm-3 col-md-3">
            <div class="thumbnail" class="img-responsive">
                <img src="<?php echo base_url() ?>Produk/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">
                <div class="caption">
                    <h3 style="min-height:60px; text-align: center;"><?php echo $nama; ?></h3>
                    <p align="center">Stock :
                        <?php echo $stok ?>
                    </p>
                    <p align="center">Rp.
                        <?php echo number_format($harga); ?>
                    </p>
                    <p align="center">
                        <?php if ($stok> 1) { ?>
                        <a href="<?php echo site_url().'web/add/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Beli </button>
                        </a>
                        <?php } else { ?>
                        <button class="btn btn-default" disabled> Stok Habis </button>
                        <?php } ?>
                        <a href="<?php echo base_url().'web/detail_produk/'.$id; ?>">
                            <button type="button" class="btn btn-primary" style="width: 100px; border-radius: 0px;"> Details </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php } } ?>
     </div>
</div>
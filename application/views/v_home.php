<div class="col-md-offset-10">
    <div id="content">
        <div class="row">
        <div style="width: 1080px; margin-left: 20px;">
            <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li>Produk</li>
                <li class="active"> <a href="<?php echo site_url().'web/katalog_alat_musik'; ?>"> Alat Musik </a> </li>
            </ol>
        </div>

        <?php $no=1 ; foreach ($produk_alatmusik as $produk) { $id=$produk->id_produk; $nama_produk = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

        <div class="col-sm-3 col-md-3">
            <div class="thumbnail" class="img-responsive">
                <img src="<?php echo base_url() ?>/produk/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">
                <div class="caption">
                    <h3 style="min-height:60px; text-align: center;"><?php echo $nama_produk; ?></h3>
                    <p align="center">Stok :
                        <?php echo $stok; ?>
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
        <?php } ?>
    </div>


    <div style="width: 1080px; margin-left: 20px;">
        <ol class="breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li>Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_hp'; ?>"> HP </a> </li>
        </ol>
    </div>

    <?php $no=1 ; foreach ($produk_hp as $produkhp) { $id=$produkhp->id_produk; $nama_produk = $produkhp->nama_produk; $stok = $produkhp->stok; $harga = $produkhp->harga; ?>

    <div class="col-sm-3 col-md-3">
        <div class="thumbnail" class="img-responsive">
            <img src="<?php echo base_url() ?>/produk/hp/<?php echo $produkhp->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">

            <div class="caption">
                <h3 style="min-height:60px; text-align: center;"><?php echo $nama_produk; ?></h3>
                <p align="center">Stok :
                    <?php echo $stok; ?>
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
    <?php } ?>

    <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a>
            </li>
            <li>Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_komputer'; ?>"> Komputer </a> </li>
        </ol>
    </div>

    <?php $no=1 ; foreach ($produk_komputer as $produkpc) { $id=$produkpc->id_produk; $nama_produk = $produkpc->nama_produk; $stok = $produkpc->stok; $harga = $produkpc->harga; ?>

    <div class="col-sm-3 col-md-3">
        <div class="thumbnail" class="img-responsive">
            <img src="<?php echo base_url() ?>/produk/komputer/<?php echo $produkpc->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">

            <div class="caption">
                <h3 style="min-height:60px; text-align: center;"><?php echo $nama_produk; ?></h3>
                <p align="center">Stok :
                    <?php echo $stok; ?>
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
    <?php } ?>

    <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a>
            </li>
            <li>Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_laptop'; ?>"> Laptop </a> </li>
        </ol>
    </div>

    <?php $no=1 ; foreach ($produk_laptop as $produklaptop) { $id=$produklaptop->id_produk; $nama_produk = $produklaptop->nama_produk; $stok = $produklaptop->stok; $harga = $produklaptop->harga; ?>

    <div class="col-sm-3 col-md-3">
        <div class="thumbnail" class="img-responsive">
            <img src="<?php echo base_url() ?>/produk/laptop/<?php echo $produklaptop->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">

            <div class="caption">
                <h3 style="min-height:60px; text-align: center;"><?php echo $nama_produk; ?></h3>
                <p align="center">Stok :
                    <?php echo $stok; ?>
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
    <?php } ?>

    <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a>
            </li>
            <li>Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_sepatu'; ?>"> Sepatu Futsal </a> </li>
        </ol>
    </div>

    <?php $no=1 ; foreach ($produk_sepatu as $produksepatu) { $id=$produksepatu->id_produk; $nama_produk = $produksepatu->nama_produk; $stok = $produksepatu->stok; $harga = $produksepatu->harga; ?>

    <div class="col-sm-3 col-md-3">
        <div class="thumbnail" class="img-responsive">
            <img src="<?php echo base_url() ?>/produk/olahraga/sepatu/<?php echo $produksepatu->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">

            <div class="caption">
                <h3 style="min-height:60px; text-align: center;"><?php echo $nama_produk; ?></h3>
                <p align="center">Stok :
                    <?php echo $stok; ?>
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
    <?php } ?>

    <div>
        <ol class="breadcrumb" style="background-color: white;">
            <li><a href="#">Home</a>
            </li>
            <li>Produk</li>
            <li class="active"> <a href="<?php echo site_url().'web/katalog_jersey'; ?>"> Jersey </a> </li>
        </ol>
    </div>

    <?php $no=1 ; foreach ($produk_jersey as $produk) { $id=$produk->id_produk; $nama_produk = $produk->nama_produk; $stok = $produk->stok; $harga = $produk->harga; ?>

    <div class="col-sm-3 col-md-3">
        <div class="thumbnail" class="img-responsive">
            <img src="<?php echo base_url() ?>/produk/olahraga/jersey/<?php echo $produk->gambar; ?>" style="max-width: 100%; max-height: 100%; height: 100px;">

            <div class="caption">
                <h3 style="min-height:60px; text-align: center;"><?php echo $nama_produk; ?></h3>
                <p align="center">Stok :
                    <?php echo $stok; ?>
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
    <?php } ?>
</div>
</div>
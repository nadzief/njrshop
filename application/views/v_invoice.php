<div id="content">
    <?php $tgl_skrg=date( "d/m/y"); $jam_skrg=date( "H:i:s"); ?>


    <div style="margin:0px auto; width:800px;">
        <div style="padding-bottom:10px">
            <h1 align="center"> <u> Invoice </u> </h1>
        </div>
        <?php if (isset($datapembelian)) { foreach ($datapembelian as $pembelian) { ?>
        <table style="width: 200px;" class="table table-responsive">
            <tr>
                <td> Nama </td>
                <td> : </td>
                <td>
                    <?php echo $pembelian['nama']; ?> </td>
            </tr>
            <tr>
                <td> No.Hp </td>
                <td> : </td>
                <td>
                    <?php echo $pembelian['no_hp']; ?> </td>
            </tr>
            <tr>
                <td> Email </td>
                <td> : </td>
                <td>
                    <?php echo $pembelian['email']; ?> </td>
            </tr>
            <tr>
                <td> Tanggal </td>
                <td> : </td>
                <td>
                    <?php echo $tgl_skrg; ?> </td>
            </tr>
            <tr>
                <td> Jam </td>
                <td> : </td>
                <td>
                    <?php echo $jam_skrg; ?> </td>
            </tr>
        </table>

        <table style="width: 350px; float: right; margin-top: -200px;" class="table table-hover">
            <tr>
            <td> Alamat </td>
            <td> : </td>
            <td>
                <?php echo $pembelian['alamat']; ?>
            </td>
        </tr>
        <tr>
            <td> Provinsi </td>
            <td> : </td>
            <td>
                <?php echo $pembelian['provinsi']; ?> </td>
           
        </tr>
        <tr>
            <td> Kabupaten</td>
            <td> : </td>
            <td>
                <?php echo $pembelian['kabupaten']; ?> </td>
        </tr>
        <tr>
            <td> Kecamatan </td>
            <td> : </td>
            <td>
                <?php echo $pembelian['kecamatan']; ?> </td>
        </tr>
        <tr>
            <td> Desa </td>
            <td> : </td>
            <td>
                <?php echo $pembelian['desa']; ?> </td>
        </tr>
        <tr>
            <td> Kode Pos </td>
            <td> : </td>
            <td>
                <?php echo $pembelian['kode_pos']; ?> </td>
            
        </tr>
        </table>

        <table class="table table-bordered" disabled style="width:800px;">
            <tr style="background-color: black; color: white;">
                <th>No. </th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th style="text-align:right">Sub Total</th>
            </tr>

            <!-- <?php $i = 0; ?> -->
            <?php $i=0 ; $i++; ?>
            <?php foreach ($this->cart->contents() as $items): ?>

            <?php echo form_hidden($i. '[rowid]', $items[ 'rowid']); ?>

            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $items[ 'name']; ?>

                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                    <p>
                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                        <strong><?php echo $option_name; ?>:</strong>
                        <?php echo $option_value; ?>
                        <br />

                        <?php endforeach; ?>
                    </p>

                    <?php endif; ?>

                </td>
                <td>
                    <?php echo $items[ 'qty']; ?> </td>
                <td>Rp.
                    <?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">Rp.
                    <?php echo $this->cart->format_number($items['subtotal']); ?></td>
            </tr>

            <?php $i++; ?>

            <?php endforeach; ?>

            <tr>
                <td colspan="1"> </td>
                <td class="right" align="right"> <strong> Jumlah Produk </strong> </td>
                <td class="right" align="left"> <b> <?php echo $this->cart->total_items();?> </b> </td>
                <td class="right" align="right"><strong>Total</strong> </td>
                <td class="right" align="right"> <b> Rp. <?php echo $this->cart->format_number($this->cart->total()); ?> </b> </td>
            </tr>
            <tr>
                <td colspan="3"> </td>
                <td align="right"> <b> Jasa Pengiriman ( <?php echo $pembelian['jasa_pengiriman']; ?> ) </b> </td>
                <td align="right"> <b> 
                                <?php if ($pembelian['jasa_pengiriman'] == 'JNE') {
                                echo $harga = 20000; 
                                } 
                                elseif ($pembelian['jasa_pengiriman'] == 'TiKi') {
                                echo $harga = 30000; 
                                }
                                else { 
                                echo $harga = 40000; } ?> </b> </td>
            </tr>
            <tr>
                <td colspan="3"> </td>
                <td align="right"> <b> Grand Total </b> </td>
                <td align="right" style="color: red;">
                    <?php $grand_total=$this->cart->total() + $harga; ?> <b> Rp. <?php echo $this->cart->format_number($grand_total); ?> </b> </td>
            </tr>
        </table>

        <a href="<?php echo base_url().'web/selesai/'.$pembelian['id'] ?>">
            <button type="submit" class="btn btn-primary" style="border-radius: 0px;"> Selesai </button>
        </a>
        <a href="<?php echo base_url().'web/cetak_invoice/'.$pembelian['id'] ?>">
            <button type="submit" class="btn btn-default" style="border-radius: 0px; float: right;"> Cetak Invoice </button>
        </a>
        <br>
        <br>
        <p style="font-size: 11px; color: red;"> *Proses Pembayaran Paling Lambat 3 Hari Setelah Melakukan Pembelian Barang </p>
        <p style="font-size: 11px; color: red;"> *Jika Dalam Waktu 3 Hari Belum Melakukan Pembayaran Maka Transaksi Pembelian Produk Dianggap Batal </p>
        <p style="font-size: 11px; color: red;"> *Cara Membayar Bisa Dilihat Di Halaman Cara Pembayaran </p>
        <p style="font-size: 11px; color: red;"> *Harga Ongkir Sudah Termasuk Kota Tujuan </p>
        <p style="font-size: 11px; color: red;"> *Harap Simpan Invoice Ini Untuk Bukti Pembelian Anda </p>
    </div>
</div>
<?php } } ?>
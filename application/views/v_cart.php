<div id="content">

    <?php if ($this->cart->total_items()
    < 1) { echo "<script> swal({ 
    title: 'Maaf!',   
    text: 'Keranjang Belanja Anda Kosong',   
    type: 'warning',   
    showCancelButton: false,   
    confirmButtonColor: '#DD6B55',   
    confirmButtonText: 'OK!',      
    closeOnConfirm: false,   
    closeOnCancel: false }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        window.location = 'home';   
        } 
        else {     
            swal('You are not redirected!', 'success');   
            } }); </script>"; } else { ?>

        <div style="margin:0px auto; width:800px;">
            <div style="padding-bottom:10px">
                <h1 align="center">Keranjang Belanja Anda</h1>
                <a href="<?php echo base_url().'web/home' ?>">
                    <button type="button" class="btn btn-default"> <span class="glyphicon glyphicon-shopping-cart"></span> Lanjut Belanja </button>
                </a>
            </div>

            <?php echo form_open( 'web/update'); ?>

            <table class="table table-striped table-responsive" style="width:800px;">

                <tr>
                    <th>No. </th>
                    <!-- <th>Id Produk </th> -->
                    <th>Gambar </th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>QTY</th>
                    <th style="text-align:right">Sub Total</th>
                    <th> Aksi </th>
                </tr>

               
                <?php   
                        $cart = $this->cart->contents(); 

                        $no = 1; 
                
                        foreach ($cart as $items):

                        echo form_hidden($no.'[rowid]', $items['rowid']); 
                ?>

                <tr>
                    <td> <?php echo $no ?> </td>
                    <!-- <td> <?php echo $items['id']; ?> </td> -->
                    <td> <img src="<?php echo base_url();?>Produk/<?php echo $items['gambar'];?>" style="width: 150px; height: 120px;"> </td>
                    <td> <?php echo $items['name']; ?>
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
                    <td>Rp. <?php echo $this->cart->format_number($items['price']); ?> </td>
                    <td> <?php echo form_input(array( 'name'=> 'qty'.$no,  'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                    <td style="text-align:right">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?> </td>
                    <td> <a href="<?php echo base_url().'web/hapus/'.$items['rowid']; ?>">
                        <button type="button" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-remove"></span> </button>
                        </a>
                    </td>
                </tr>

                <?php 
                    $no++;
                    endforeach; ?>

                <tr>
                    <td colspan="3"> </td>
                    <td class="right" align="right"> <strong> Jumlah Produk </strong> </td>
                    <td> <b> <?php echo $this->cart->total_items();?> </b> </td>
                    <td class="right" align="right">
                        <p> <strong>Total</strong> <b> 
                        Rp. <?php echo $this->cart->format_number($this->cart->total()); ?> </b> </p>
                    </td>
                </tr>
            </table>

            <p>
                <a href="<?php echo base_url().'web/clear_cart' ?>">
                    <button type="button" class="btn btn-success" style="border-radius: 0px;"> Delete Cart </button>
                </a>
                <?php echo form_submit(array( 'value' => 'Update Cart', 'class' => 'btn btn-info', 'style' => 'border-radius: 0px;' )); ?>
                <a href="<?php echo base_url().'web/check_out' ?>">
                    <button type="button" class="btn btn-primary" style="border-radius: 0px;"> Check Out </button>
                </a>
            </p>
        </div>
        </form>
</div>

<?php } ?>
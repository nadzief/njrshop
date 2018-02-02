<div id="content">
        <div style="margin:0px auto; width:800px;">
            <div style="padding-bottom:10px">
                <h1 align="center"> Check Out </h1>
            </div>

            <div class="data_pembeli" style=" width: 700px;">
                <h3 style="font-style: Verdana, Arial, Helvetica, sans-serif;"> Data Pembeli </h3>
                <p style="border: 1px solid;"></p>
                <?php $tgl_skrg=date( "d/m/y"); $jam_skrg=date( "H:i:s"); ?>

                <table class="table table-responsive">
                    <form id="data_pembeli" role="form" method="POST" action="<?php echo base_url(); ?>web/insert_check_out">
                        <tr>
                            <td>
                                <label for="id" class="control-label"> Id </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="id" id="id" placeholder="id" required readonly value="<?php echo $id; ?>"> </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nama" class="control-label"> Nama </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required value="<?php echo $this->session->userdata('nama_lengkap') ?>"> </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="no_hp" class="control-label"> No. Hp </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="no hp" required value="0<?php echo $this->session->userdata('no_hp') ?>"> </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email" class="control-label"> Email </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="email" id="email" placeholder="email" required value="<?php echo $this->session->userdata('email') ?>"> </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tgl" class="control-label"> Tanggal </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="tgl" id="tgl" placeholder="tgl" required value="<?php echo $tgl_skrg; ?>"> </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jam" class="control-label"> Jam </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="jam" id="jam" placeholder="jam" required value="<?php echo $jam_skrg; ?>"> </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jasa_pengiriman" class="control-label"> Jasa Pengiriman </label>
                            </td>
                            <td>
                                <select name="jasa_pengiriman" id="jasa_pengiriman" class="form-control" required>
                                    <option value="-"> -- PILIH -- </option>
                                    <?php foreach($dataongkir as $item) : ?>
                                    <option value="<?php echo $item->jasa_pengiriman?>" <?php if($this->input->get_post('jasa_pengiriman') == $item->jasa_pengiriman) echo 'selected' ?>>
                                        <?php echo $item->jasa_pengiriman?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                </table>
                <!-- <div id="locationField">
                    <input type="text" class="form-control" id="autocomplete" class="span6" placeholder="Masukan alamat anda" onFocus="geolocate()"></input>
                </div>
                 <table id="address" class="table table-responsive">
                    <tr>
                        <td>
                            <label for="nama_jalan" class="control-label"> Alamat </label>
                        </td>
                        <td>
                            <input class="form-control" name="alamat" id="route" disabled required></input>
                        </td>
                        <td colspan="2">
                            <input class="form-control" name="alamat2" id="street_number" disabled required></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="kota" class="control-label"> Kota </label>
                        </td>
                        <td colspan="3">
                            <input class="form-control" name="kota" id="locality" disabled required></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="provinsi" class="control-label"> Provinsi </label>
                        </td>
                        <td class="slimField">
                            <input class="form-control" name="provinsi" id="administrative_area_level_1" disabled required></input>
                        </td>

                        <td>
                            <label for="kode_pos" class="control-label"> Kode Pos </label>
                        </td>
                        <td class="wideField">
                            <input class="form-control" name="kode_pos" id="postal_code" disabled required></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="negara" class="control-label"> Negara </label>
                        </td>
                        <td class="wideField" colspan="3">
                            <input class="form-control" name="negara" id="country" disabled required></input>
                        </td>
                    </tr>
                </table> -->
                <table class="table table-responsive"> 
                    <tr>
                        <td> <label class="control-label"> Provinsi </label> </td>
                        <td> <select name="provinsi" class="form-control" id="provinsi" required>
                                <option>- Select Provinsi -</option>
                                <?php 
                                    foreach($provinsi as $prov)
                                    {
                                        echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                    }
                                ?>
                            </select> </td>
                    </tr>
                    <tr>
                        <td> <label class="control-label"> Kabupaten </label> </td>
                        <td> <select name="kabupaten" class="form-control" id="kabupaten" required>
                             <option value=''>Select Kabupaten</option> </select> </td>
                    </tr>
                    <tr>
                        <td> <label class="control-label"> Kecamatan </label> </td>
                        <td> <select name="kecamatan" class="form-control" id="kecamatan" required>
                             <option>Select Kecamatan</option> </select> </td>
                    </tr>
                    <tr>
                        <td> <label class="control-label"> Desa </label> </td>
                        <td> <select name="desa" class="form-control" id="desa" required>
                             <option>Select Desa</option> </select> </td>
                    </tr>
                    <tr>
                        <td> <label class="control-label"> Kode Pos </label> </td>
                        <td> <input class="form-control" name="kode_pos" id="postal_code" required> </td>
                    </tr>
                    <tr>
                        <td> <label class="control-label"> Alamat Lengkap </label> </td>
                        <td> <textarea name="alamat" class="form-control" id="alamat" required> </textarea> </td>
                    </tr>
                </table>
        
                <a href="<?php echo base_url().'web/cart' ?>">
                    <button type="submit" class="btn btn-success" style="border-radius: 0px;"> Kembali </button>
                </a>
                <button type="submit" class="btn btn-primary" style="border-radius: 0px; float: right;"> Kirim </button>
                </form>
                <br>

                </p>
            </div>

            <h3 style="font-style: sans-serif;"> Konfirmasi Keranjang Belanja Anda </h3>

            <?php echo form_open( 'web/update'); ?>
            <table class="table table-striped table-responsive" disabled style="width:800px;">
                <tr style="background-color: black; color: white;">
                    <th>No. </th>
                    <!-- <th> Id Produk </th> -->
                    <th>Gambar </th>
                    <th>Nama Produk</th>
                    <th>QTY</th>
                    <th>Harga</th>
                    <th style="text-align:right">Sub Total</th>
                </tr>
                
                <?php
                    
                $no = 1; 

                foreach ($this->cart->contents() as $items): 

                echo form_hidden($no. '[rowid]', $items['rowid']); ?>

                <tr>
                    <td>
                        <?php echo $no ?> </td>
                    <!-- <td> <?php echo $items['id']; ?> </td> -->
                    <td> <img src="<?php echo base_url();?>/Produk/<?php echo $items['gambar'];?>" style="width: 150px; height: 120px;"> </td>
                    <td>
                        <?php echo $items['name']; ?>

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
                         <?php echo $items['qty']; ?> </td>
                    <td>Rp.
                        <?php echo $this->cart->format_number($items['price']); ?></td>
                    <td style="text-align:right">Rp.
                        <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>
                
                <?php $no++; endforeach; ?>

                <tr>
                    <td colspan="2"> </td>
                    <td class="right" align="right"> <strong> Jumlah Produk </strong> </td>
                    <td class="right" align="left"> <b> <?php echo $this->cart->total_items();?> </b> </td>
                    <td class="right" align="right"><strong>Total</strong> </td>
                    <td class="right" align="right"> <b> Rp. <?php echo $this->cart->format_number($this->cart->total()); ?> </b> </td>
                </tr>
            </table>
        </div>
    </div>


<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCbuLesUraXOKRo0cRY06ihmTOojTu_ex8&libraries=places"></script> -->

<script>
    /*  var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'long_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initialize() {

        autocomplete = new google.maps.places.Autocomplete(
             @type {HTMLInputElement} 
            (document.getElementById('autocomplete')), {
                types: ['geocode']
            });

        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            fillInAddress();
        });
    }


    function fillInAddress() {

        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }


        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = new google.maps.LatLng(
                    position.coords.latitude, position.coords.longitude);
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    } */
    $(document).ready(function(){
                $("#provinsi").change(function (){
                    var url = "<?php echo site_url('web/add_ajax_kab');?>/"+$(this).val();
                    $('#kabupaten').load(url);
                    return false;
                })
       
                $("#kabupaten").change(function (){
                    var url = "<?php echo site_url('web/add_ajax_kec');?>/"+$(this).val();
                    $('#kecamatan').load(url);
                    return false;
                })
       
                $("#kecamatan").change(function (){
                    var url = "<?php echo site_url('web/add_ajax_des');?>/"+$(this).val();
                    $('#desa').load(url);
                    return false;
                })
            });
</script>
<div id="content">
    <br>

    <?php if (isset($datadetailanggota)) { 
          foreach ($datadetailanggota as $anggota) { ?>
    <div class="row" align="center">
        <div class="date" align="left" style="margin-left: 20px;">
        </div>
        <div class="isi" style="width: 700px; height: 500px; float: left; margin-left: 20px;">

            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                    <div class="page-header">
                        <h3> <b> Edit Data <?php echo $anggota->nama_lengkap; ?> </b> </h3>
                    </div>
                        <form action="<?php echo site_url().'web/update_data'; ?>" method="post" accept-charset="utf-8">
                            
                            <div class="form-group">
                                <label for="id" class="control-label"> Id </label>
                                <input type="text" name="id_anggota" id="id_anggota" class="form-control" value="<?php echo $anggota->id_anggota; ?>" disabled>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group">
                                <label for="nama" class="control-label"> Nama </label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?php echo $anggota->nama_lengkap; ?>">
                                <span class="help-block"> </span>
                            </div>

                            <div class="form-group">
                                <label for="username" class="control-label"> Username </label>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $anggota->username; ?>">
                                <span class="help-block"> </span>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label"> Password </label>
                                <input type="text" name="password" id="password" class="form-control" value="<?php echo $anggota->password; ?>">
                                <span class="help-block"> </span>
                            </div>

                            <div class="form-group">
                                <label for="no_hp" class="control-label"> No. Hp </label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $anggota->no_hp; ?>">
                                <span class="help-block"> </span>
                            </div>

                            <div class="form-group">
                                <label for="email" class="control-label"> Email </label>
                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $anggota->email; ?>">
                                <span class="help-block"> </span>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin" class="control-label"> Jenis Kelamin </label>
                                <br>
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
                                <textarea name="alamat" id="alamat" class="form-control"> <?php echo $anggota->alamat; ?> </textarea>
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
                                <input type="text" name="no_rek" id="no_rek" class="form-control" value="<?php echo $anggota->no_rek; ?>">
                                <span class="help-block"> </span>
                            </div>

                            <div class="col-md-6 col-md-offset-4">
                                
                                <div class="col-md-4">
                                    <input type="submit" id="submit" name="submit" value="Update" class="btn btn-primary">
                                </div>

                                <div class="col-md-3">
                                    <a href="<?php echo site_url().'web/home'; ?>"> 
                                        <button type="button" class="btn btn-default"> Batal </button> 
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- <div class="form_input" style="margin-left: 300px;">
               
                <?php echo form_open( 'web/update_data/'.$anggota->id_anggota); ?>
                <table class="table table-responsive">
                    <tr>
                        <td>
                            <label for="id" class="control-label"> Id </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'id_anggota', 'disabled' => 'true', 'id' => 'id_anggota', 'class' => 'form-control', 'value' => $anggota->id_anggota)); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama" class="control-label"> Nama </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'nama_lengkap', 'id' => 'nama_lengkap', 'class' => 'form-control', 'value' => $anggota->nama_lengkap)); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username" class="control-label"> Username </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'username', 'id' => 'username', 'class' => 'form-control', 'value' => $anggota->username)); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password" class="control-label"> Password </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'password', 'id' => 'password', 'class' => 'form-control', 'value' => $anggota->password)); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="no_hp" class="control-label"> No. Hp </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', 'value' => $anggota->no_hp)); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email" class="control-label"> Email </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'email', 'id' => 'email', 'class' => 'form-control', 'value' => $anggota->email)); ?> </td>
                    </tr>
                    <tr style="margin-left: 50px;">
                        <td>
                            <label for="jenis_kelamin" class="control-label"> Jenis Kelamin </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'jenis_kelamin', 'id' => 'jenis_kelamin', 'class' => 'form-control', 'value' => $anggota->jenis_kelamin)); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat" class="control-label"> Alamat </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'alamat', 'id' => 'alamat', 'class' => 'form-control', 'value' => $anggota->alamat)); ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="kota" class="control-label"> Kota </label>
                        </td>
                        <td> </td>
                        <td>
                            <?php echo form_input(array( 'name'=> 'kota', 'id' => 'kota', 'class' => 'form-control', 'value' => $anggota->kota)); ?> </td>
                    </tr>
                    <?php echo form_open_multipart( 'web/aksi_upload');?>
                    <tr>
                        <td>
                            <label for="foto" class="control-label"> Foto </label>
                        </td>
                        <td> </td>
                        <td> <img src="<?php echo base_url() ?>/foto/<?php echo $anggota->foto; ?>" class="img-thumbnail" style="width: 300px; height: 200px;">
                            <input type="file" name="foto" /> </td>
                    </tr>
                    <br>

                    
                </table>

                <?php echo form_submit(array( 'name'=> 'submit', 'id' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Simpan')); ?>
                <?php echo form_close(); ?>


            </div> -->


        </div>
    </div>
    <?php } } ?>
    </form>
</div>
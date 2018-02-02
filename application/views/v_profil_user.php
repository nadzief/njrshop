<div id="content">
    <br>
    <?php 
        if (isset($datadetailanggota)) { 
            foreach ($datadetailanggota as $anggota) { 
    ?>
    <div class="row" align="center">
        <div class="date" align="left" style="margin-left: 20px;">
            <?php 
                $tgl_skrg=date( "d/m/y"); $jam_skrg=date( "H:i:s"); 
                echo $tgl_skrg;
                echo $jam_skrg; 
            ?>
        </div>
        <br>
        <div class="isi" style="width: 410px; height: 500px; float: left; margin-left: 20px;">
            <img src="<?php echo base_url() ?>/foto/<?php echo $anggota->foto; ?>" class="img-thumbnail" style="width: 500px; height: 300px; float: left; margin-left: 30px;">
            <br>
        </div>

        <table id="edit_profil" class="table table-responsive" style="width:600px;">
            <tr>
                <td> Nama </td>
                <td> : </td>
                <td>
                    <?php echo $anggota->nama_lengkap; ?> </td>
            </tr>
            <tr>
                <td> Email </td>
                <td> : </td>
                <td>
                    <?php echo $anggota->email; ?> </td>
            </tr>
            <tr>
                <td> No.Hp </td>
                <td> : </td>
                <td> 0
                    <?php echo $anggota->no_hp; ?> </td>
            </tr>
            <tr>
                <td> Username </td>
                <td> : </td>
                <td>
                    <?php echo $anggota->username; ?> </td>
            </tr>
            <tr>
                <td> Jenis Kelamin </td>
                <td> : </td>
                <td>
                    <?php echo $anggota->jenis_kelamin; ?> </td>
            </tr>
            <tr>
                <td> Alamat </td>
                <td> : </td>
                <td>
                    <?php echo $anggota->alamat; ?> </td>
            </tr>
            <tr>
                <td> Kota </td>
                <td> : </td>
                <td>
                    <?php echo $anggota->kota; ?> </td>
            </tr>
        </table>
            <button type="submit" class="btn btn-primary" onclick="edit_profil(<?php echo $anggota->id_anggota;?>)"> <span class="glyphicon glyphicon-pencil"> </span> Edit Data </button>
    </div>
</div>
<?php } } ?>

<script type="text/javascript">
$(document).ready(function(){
    $('#edit_profil').show();
});

var save_method;
var table;

function edit_profil(id_anggota){
    save_method = 'update';
    $('#form')[0].reset();

    $.ajax({
        url : "<?php echo site_url().'web/profil_edit/'; ?>" + id_anggota,
        type : "GET",
        dataType : "JSON",
        success: function(data)
        {
            $('[name = "id_anggota"]').val(data.id_anggota);
            $('[name = "nama_lengkap"]').val(data.nama_lengkap);
            $('[name = "username"]').val(data.username);
            $('[name = "password"]').val(data.password);
            $('[name = "no_hp"]').val(data.no_hp);
            $('[name = "email"]').val(data.email);
            $('[name = "jenis_kelamin"]').val(data.jenis_kelamin);
            $('[name = "alamat"]').val(data.alamat);
            $('[name = "kota"]').val(data.kota);
            $('[name = "no_rek"]').val(data.no_rek);

            $('#modal_form').modal('show');
            $('#modal-title').text('Edit Profil');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error Get Data From AJAX');
        }
    });
}

function save(){
    var url;
    if(save_method == 'update'){
        url = "<?php echo site_url().'web/profil_update'; ?>";
    }

    $.ajax({
        url : url,
        type : "POST",
        data : $('#form').serialize(),
        dataType : "JSON",
        success: function(data)
        {
            $('#modal_form').modal('hide');
            window.location.reload();
            // reload();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error Update Data');
        }
    });
}

function reload(){
    $('#edit_profil').table().ajax.reload(null, false);
}
</script>

<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"> Edit Profil </h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id_anggota"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Id</label>
              <div class="col-md-9">
                <input name="id_anggota" placeholder="Masukan ID" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama</label>
              <div class="col-md-9">
                <input name="nama_lengkap" placeholder="Masukan Nama" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-9">
                <input name="username" placeholder="Masukan Username" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Password</label>
              <div class="col-md-9">
                <input name="password" placeholder="Masukan Password" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">No. Hp</label>
                    <div class="col-md-9">
                        <input name="no_hp" placeholder="Masukan No. Hp" class="form-control" type="text">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Email</label>
                    <div class="col-md-9">
                        <input name="email" placeholder="Masukan Email" class="form-control" type="text">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Jenis Kelamin</label>
                    <div class="col-md-9">
                        <select name="jenis_kelamin" required class="form-control" placeholder="jenis_kelamin" value="<?php echo set_value('jenis_kelamin'); ?>">
                            <option> --Pilih-- </option>
                            <option value="Laki" <?php if('Laki') {
                                echo "selected=selected"; }
                                ?>> Laki </option>
                            <option value="Perempuan" <?php if('Perempuan') {
                                echo "selected=selected"; }
                                ?>> Perempuan </option>
                        </select>
                        <!-- <input type="radio" name="jenis_kelamin" required value="Laki-laki" <?php if('Laki-laki') {?> checked="checked" <?php }?>> Laki-laki
                        <input type="radio" name="jenis_kelamin" re value="Perempuan" <?php if('Perempuan') {?> checked="checked" <?php }?>> Perempuan -->
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Alamat</label>
                    <div class="col-md-9">
                        <input name="alamat" placeholder="Masukan Alamat" class="form-control" type="text">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Kota</label>
                    <div class="col-md-9">
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
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">No. Rek</label>
                    <div class="col-md-9">
                        <input name="no_rek" placeholder="Masukan No. Rek" class="form-control" type="text">
                    </div>
            </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-info">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- End Bootstrap modal -->
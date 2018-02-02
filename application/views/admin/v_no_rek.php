<!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                             Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler">
                </div>
                <div class="toggler-close">
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span>
                        THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                            </li>
                            <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                            </li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                            </li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                            </li>
                            <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                            </li>
                            <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                            </li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span>
                        Theme Style </span>
                        <select class="layout-style-option form-control input-sm">
                            <option value="square" selected="selected">Square corners</option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Layout </span>
                        <select class="layout-option form-control input-sm">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Header </span>
                        <select class="page-header-option form-control input-sm">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Top Menu Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-sm">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Sidebar Mode</span>
                        <select class="sidebar-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-sm">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Sidebar Style </span>
                        <select class="sidebar-style-option form-control input-sm">
                            <option value="default" selected="selected">Default</option>
                            <option value="light">Light</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-sm">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                        Footer </span>
                        <select class="page-footer-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Data No. Rek</a>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <br>
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_no_rek"> <span class="fa fa-plus"> </span> Add No. Rek </button>
        <button class="btn btn-default" onclick="reload_table_no_rek()"><i class="fa fa-refresh"></i> Reload</button>
        <br>
        <br>
        <div class="box-body table-responsive">
            <table id="table_no_rek" class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr class="bg-primary">
                        <th> ID </th>
                        <th> Bank 1 </th>
                        <th> No.Rek 1 </th>
                        <th> A/N 1 </th>
                        <th> Bank 2 </th>
                        <th> No.Rek 2 </th>
                        <th> A/N 2 </th>
                        <th> Bank 3 </th>
                        <th> No.Rek 3 </th>
                        <th> A/N 3 </th>
                        <th> Bank 4 </th>
                        <th> No.Rek 4 </th>
                        <th> A/N 4 </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

var save_method; 
var table10;

$(document).ready(function() {
    table10 = $('#table_no_rek').dataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [], 
        "ajax": {
            "url": "<?php echo site_url('admin/no_rek_list')?>",
            "type": "POST"
        },
        "columnDefs": [
        { 
            "targets": [ -1 ], 
            "orderable": false, 
        },
        ],
    });
});

function add_no_rek()
{
    save_method = 'add';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#modal_form').modal('show'); 
    $('.modal-title').text('Add No.Rek');
}

function edit_no_rek(id)
{
    save_method = 'update';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 

    $.ajax({
        url : "<?php echo site_url('admin/no_rek_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="bank1"]').val(data.bank1);
            $('[name="no_rek1"]').val(data.no_rek1);
            $('[name="an1"]').val(data.an1);
            $('[name="bank2"]').val(data.bank2);
            $('[name="no_rek2"]').val(data.no_rek2);
            $('[name="an2"]').val(data.an2);
            $('[name="bank3"]').val(data.bank3);
            $('[name="no_rek3"]').val(data.no_rek3);
            $('[name="an3"]').val(data.an3);
            $('[name="bank4"]').val(data.bank4);
            $('[name="no_rek4"]').val(data.no_rek4);
            $('[name="an4"]').val(data.an4);
            $('#modal_form_no_rek').modal('show');
            $('.modal-title').text('Edit Data No.Rek'); 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table_no_rek()
{
    table10.api().ajax.reload(null,false);  
}

function save_add()
{
    $('#btnSave').text('saving...'); 
    $('#btnSave').attr('disabled',true);  
    var url;

    url = "<?php echo site_url('admin/no_rek_add')?>";
    
    $.ajax({
        url : url,
        type: "POST",
        data: $('#forms').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) 
            {
                $('#modal_add_no_rek').modal('hide');
                reload_table_no_rek();
            }
            $('#btnSave').text('save'); 
            $('#btnSave').attr('disabled',false);  
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); 
            $('#btnSave').attr('disabled',false);  
        }
    });
}

function save_edit()
{
    $('#btnSave').text('saving...'); 
    $('#btnSave').attr('disabled',true);  
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('admin/no_rek_add')?>";
    } else {
        url = "<?php echo site_url('admin/no_rek_update')?>";
    }

    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) 
            {
                $('#modal_form_no_rek').modal('hide');
                reload_table_no_rek();
            }
            $('#btnSave').text('save'); 
            $('#btnSave').attr('disabled',false);  
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); 
            $('#btnSave').attr('disabled',false);  
        }
    });
}

function delete_no_rek(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        $.ajax({
            url : "<?php echo site_url('admin/no_rek_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                $('#modal_form_no_rek').modal('hide');
                reload_table_no_rek();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    }
}
</script>

<div class="modal fade" id="modal_form_no_rek" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Form Data No.Rek</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="form-group">
                            <br>
                            <label class="control-label col-md-3">ID :</label>
                            <div class="col-md-9">
                                <input name="id" class="form-control" type="text" style="height: 30px;" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 1 :</label>
                            <div class="col-md-9">
                                <input name="bank1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 1 :</label>
                            <div class="col-md-9">
                                <input name="no_rek1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 1 :</label>
                            <div class="col-md-9">
                                <input name="an1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 2 :</label>
                            <div class="col-md-9">
                                <input name="bank2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 2 :</label>
                            <div class="col-md-9">
                                <input name="no_rek2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 2 :</label>
                            <div class="col-md-9">
                                <input name="an2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 3 :</label>
                            <div class="col-md-9">
                                <textarea name="bank3" id="alamat" class="form-control" style="height: 100px;"> </textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 3 :</label>
                            <div class="col-md-9">
                                <input name="no_rek3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 3 :</label>
                            <div class="col-md-9">
                                <input name="an3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 4 :</label>
                            <div class="col-md-9">
                                <input name="bank4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 4 :</label>
                            <div class="col-md-9">
                                <input name="no_rek4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 4 :</label>
                            <div class="col-md-9">
                                <input name="an4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_edit()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_add_no_rek" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Form Data No.Rek</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="forms" class="form-horizontal">
                    <input type="hidden" value="" name="id_anggota" />
                   <div class="form-body">
                        <div class="form-group">
                            <br>
                            <label class="control-label col-md-3">ID :</label>
                            <div class="col-md-9">
                                <input name="id" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 1 :</label>
                            <div class="col-md-9">
                                <input name="bank1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 1 :</label>
                            <div class="col-md-9">
                                <input name="no_rek1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 1 :</label>
                            <div class="col-md-9">
                                <input name="an1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 2 :</label>
                            <div class="col-md-9">
                                <input name="bank2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 2 :</label>
                            <div class="col-md-9">
                                <input name="no_rek2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 2 :</label>
                            <div class="col-md-9">
                                <input name="an2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 3 :</label>
                            <div class="col-md-9">
                                <textarea name="bank3" id="alamat" class="form-control" style="height: 100px;"> </textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 3 :</label>
                            <div class="col-md-9">
                                <input name="no_rek3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 3 :</label>
                            <div class="col-md-9">
                                <input name="an3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bank 4 :</label>
                            <div class="col-md-9">
                                <input name="bank4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No.Rek 4 :</label>
                            <div class="col-md-9">
                                <input name="no_rek4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">A/N 4 :</label>
                            <div class="col-md-9">
                                <input name="an4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_add()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
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
                        <a href="#">Data Order Detail</a>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <br>
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_order_detail"> 
                <span class="fa fa-plus"> </span> Add Order Detail 
            </button>

            <button class="btn btn-default" onclick="reload_table_order_detail()">
                <i class="fa fa-refresh"></i> Reload
            </button>

            <a href="<?php echo site_url().'admin/cetak_pdf_order_detail'; ?>">
                <button type="button" class="btn btn-default">
                    <i class="fa fa-file-pdf-o"> </i> Cetak PDF
                </button>
            </a>

             <a href="<?php echo site_url().'admin/cetak_excel_order_detail'; ?>">
                <button type="button" class="btn btn-default">
                    <i class="fa fa-file-excel-o"> </i> Cetak Excel
                </button>
            </a>

        <br>
        <br>
        <div class="box-body table-responsive">
            <table id="table_order_detail" class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr class="bg-primary">
                        <th> ID Order </th>
                        <th> ID Produk </th>
                        <th> Jumlah </th>
                        <th> Harga </th>
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
var table18;

$(document).ready(function() {
    table18 = $('#table_order_detail').dataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [], 
        "ajax": {
            "url": "<?php echo site_url('admin/order_detail_list')?>",
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

function add_order_detail()
{
    save_method = 'add';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#modal_form').modal('show'); 
    $('.modal-title').text('Add Order Detail');
}

function edit_order_detail(id_order)
{
    save_method = 'update';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 

    $.ajax({
        url : "<?php echo site_url('admin/order_detail_edit/')?>/" + id_order,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_order"]').val(data.id_order);
            $('[name="id_produk"]').val(data.id_produk);
            $('[name="jumlah"]').val(data.jumlah);
            $('[name="harga"]').val(data.harga);
            $('#modal_form_order_detail').modal('show');
            $('.modal-title').text('Edit Data Order Detail'); 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table_order_detail()
{
    table18.api().ajax.reload(null,false);  
}

function save_add()
{
    $('#btnSave').text('saving...'); 
    $('#btnSave').attr('disabled',true);  
    var url;

    url = "<?php echo site_url('admin/order_detail_add')?>";
    
    $.ajax({
        url : url,
        type: "POST",
        data: $('#forms').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) 
            {
                $('#modal_add_order_detail').modal('hide');
                reload_table_order_detail();
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
        url = "<?php echo site_url('admin/order_detail_add')?>";
    } else {
        url = "<?php echo site_url('admin/order_detail_update')?>";
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
                $('#modal_form_order_detail').modal('hide');
                reload_table_order_detail();
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

function delete_order_detail(id_order)
{
    if(confirm('Are you sure delete this data?'))
    {
        $.ajax({
            url : "<?php echo site_url('admin/order_detail_delete')?>/"+id_order,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                $('#modal_form_order_detail').modal('hide');
                reload_table_order_detail();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    }
}
</script>

<div class="modal fade" id="modal_form_order_detail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Form Data Order Detail</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_order" />
                    <div class="form-body">
                        <div class="form-group">
                            <br>
                            <label class="control-label col-md-3">ID Order :</label>
                            <div class="col-md-9">
                                <input name="id_order" class="form-control" type="text" style="height: 30px;" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Produk :</label>
                            <div class="col-md-9">
                                <input name="id_produk" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah :</label>
                            <div class="col-md-9">
                                <input name="jumlah" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga :</label>
                            <div class="col-md-9">
                                <input name="harga" class="form-control" type="text" style="height: 30px;">
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

<div class="modal fade" id="modal_add_order_detail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Form Data Order Detail</h3>
            </div>
           <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_order" />
                    <div class="form-body">
                        <div class="form-group">
                            <br>
                            <label class="control-label col-md-3">ID Order:</label>
                            <div class="col-md-9">
                                <input name="id_order" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Produk :</label>
                            <div class="col-md-9">
                                <input name="id_produk" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah :</label>
                            <div class="col-md-9">
                                <input name="jumlah" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga :</label>
                            <div class="col-md-9">
                                <input name="harga" class="form-control" type="text" style="height: 30px;">
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
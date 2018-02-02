<div class="page-content-wrapper">
    <div class="page-content">
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
            </div>
        </div>
        
        <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"> </div>
                <div class="toggler-close"></div>
                    <div class="theme-options">
                        <div class="theme-option theme-colors clearfix">
                        <span> THEME COLOR </span>
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
                        <span> Theme Style </span>
                        <select class="layout-style-option form-control input-sm">
                            <option value="square" selected="selected">Square corners</option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Layout </span>
                        <select class="layout-option form-control input-sm">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Header </span>
                        <select class="page-header-option form-control input-sm">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Top Menu Dropdown </span>
                        <select class="page-header-top-dropdown-style-option form-control input-sm">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Mode </span>
                        <select class="sidebar-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-sm">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Style </span>
                        <select class="sidebar-style-option form-control input-sm">
                            <option value="default" selected="selected">Default</option>
                            <option value="light">Light</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-sm">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Footer </span>
                        <select class="page-footer-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>

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
                        <a href="#">Data How To Buy</a>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <br>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_howtobuy"> 
                <span class="fa fa-plus"> </span> Add How To Buy 
            </button>
            <button class="btn btn-default" onclick="reload_table_howtobuy()">
                <i class="fa fa-refresh"></i> Reload
            </button>
        
            <br> <br>
            
        <div class="box-body table-responsive">
            <table id="table_howtobuy" class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr class="bg-primary">
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Q 1</th>
                        <th>A 1</th>
                        <th>Q 2</th>
                        <th>A 2</th>
                        <th>Q 3</th>
                        <th>A 3</th>
                        <th>Q 4</th>
                        <th>A 4</th>
                        <th>Q 5</th>
                        <th>A 5</th>
                        <th>Q 6</th>
                        <th>A 6</th>
                        <th>Q 7</th>
                        <th>A 7</th>
                        <th>Q 8</th>
                        <th>A 8</th>
                        <th>Q 9</th>
                        <th>A 9</th>
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
var table8;

$(document).ready(function() {
    table8 = $('#table_howtobuy').dataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('admin/howtobuy_list')?>",
            "type": "POST"
        },
        "columnDefs": [
        {
            "targets": [-1],
            "orderable": false,
        },
        ],
    });
});

function add_howtobuy(){
    save_method = 'add';
    $('#forms')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $('#modal_add_howtobuy').modal('show');
    $('.modal-title').text('Add How To Buy');
}

function edit_howtobuy(id){
    save_method = 'update';
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $('#modal_form_howtobuy').modal('show');
    $('.modal-title').text('Edit How To Buy');

    $.ajax({
        url : "<?php echo site_url('admin/howtobuy_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="judul"]').val(data.judul);
            $('[name="q1"]').val(data.q1);
            $('[name="a1"]').val(data.a1);
            $('[name="q2"]').val(data.q2);
            $('[name="a2"]').val(data.a2);
            $('[name="q3"]').val(data.q3);
            $('[name="a3"]').val(data.a3);
            $('[name="q4"]').val(data.q4);
            $('[name="a4"]').val(data.a4);
            $('[name="q5"]').val(data.q5);
            $('[name="a5"]').val(data.a5);
            $('[name="q6"]').val(data.q6);
            $('[name="a6"]').val(data.a6);
            $('[name="q7"]').val(data.q7);
            $('[name="a7"]').val(data.a7);
            $('[name="q8"]').val(data.q8);
            $('[name="a8"]').val(data.a8);
            $('[name="q9"]').val(data.q9);
            $('[name="a9"]').val(data.a99);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table_howtobuy(){
    table8.api().ajax.reload(null, false);
}

function save_add(){

    $('#btnSave').text('saving...');
    $('#btnSave').attr('disabled',true);
    var url;

    url = "<?php echo site_url('admin/howtobuy_add')?>";

    $.ajax({
        url: url,
        type: "POST",
        data: $('#forms').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status)
            {
                $('#modal_add_howtobuy').modal('hide');
                reload_table_howtobuy();
            }
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled',false);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error Adding / Update Data');
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled',false);
        }
    });
}

function save_edit(){
    $('#btnSave').text('Saving...');
    $('#btnSave').attr('disable',true);
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('admin/howtobuy_add')?>";
    }
    else {
        url = "<?php echo site_url('admin/howtobuy_update')?>";
    }

    $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status)
            {
                $('#modal_form_howtobuy').modal('hide');
                reload_table_howtobuy();
            }
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled',false);
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('Error addin / update data');
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled', false);
        }
    });
}

function delete_howtobuy(id){
    if(confirm('Are you sure delete this data?')){
        $.ajax({
            url: "<?php echo site_url('admin/howtobuy_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){
                $('#modal_form_howtobuy').modal('hide');
                reload_table_howtobuy();
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('Error deleting data');
            }
        });
    }
}
</script>

<div class="modal fade" id="modal_form_howtobuy" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Form Data How To Buy </h3>
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
                            <label class="control-label col-md-3"> Judul:</label>
                            <div class="col-md-9">
                                <input name="judul" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Q 1:</label>
                            <div class="col-md-9">
                                <input name="q1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> A 1:</label>
                            <div class="col-md-9">
                                <input name="a1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Q 2:</label>
                            <div class="col-md-9">
                                <input name="q2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> A 2:</label>
                            <div class="col-md-9">
                                <input name="a2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Q 3:</label>
                            <div class="col-md-9">
                                <input name="q3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> A 3:</label>
                            <div class="col-md-9">
                                <input name="a3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 4:</label>
                            <div class="col-md-9">
                                <input name="q4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 4:</label>
                            <div class="col-md-9">
                                <input name="a4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 5:</label>
                            <div class="col-md-9">
                                <input name="q5" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 5:</label>
                            <div class="col-md-9">
                                <input name="a5" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 6:</label>
                            <div class="col-md-9">
                                <input name="q6" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 6:</label>
                            <div class="col-md-9">
                                <input name="a6" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 7:</label>
                            <div class="col-md-9">
                                <input name="q7" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 7:</label>
                            <div class="col-md-9">
                                <input name="a7" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 8:</label>
                            <div class="col-md-9">
                                <input name="q8" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 8:</label>
                            <div class="col-md-9">
                                <input name="a8" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 9:</label>
                            <div class="col-md-9">
                                <input name="q9" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 9:</label>
                            <div class="col-md-9">
                                <input name="a9" class="form-control" type="text" style="height: 30px;">
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

<div class="modal fade" id="modal_add_howtobuy" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Form Data How To Buy</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="forms" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
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
                            <label class="control-label col-md-3"> Judul:</label>
                            <div class="col-md-9">
                                <input name="judul" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Q 1:</label>
                            <div class="col-md-9">
                                <input name="q1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> A 1:</label>
                            <div class="col-md-9">
                                <input name="a1" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Q 2:</label>
                            <div class="col-md-9">
                                <input name="q2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> A 2:</label>
                            <div class="col-md-9">
                                <input name="a2" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Q 3:</label>
                            <div class="col-md-9">
                                <input name="q3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> A 3:</label>
                            <div class="col-md-9">
                                <input name="a3" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 4:</label>
                            <div class="col-md-9">
                                <input name="q4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 4:</label>
                            <div class="col-md-9">
                                <input name="a4" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 5:</label>
                            <div class="col-md-9">
                                <input name="q5" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 5:</label>
                            <div class="col-md-9">
                                <input name="a5" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 6:</label>
                            <div class="col-md-9">
                                <input name="q6" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 6:</label>
                            <div class="col-md-9">
                                <input name="a6" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 7:</label>
                            <div class="col-md-9">
                                <input name="q7" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 7:</label>
                            <div class="col-md-9">
                                <input name="a7" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 8:</label>
                            <div class="col-md-9">
                                <input name="q8" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 8:</label>
                            <div class="col-md-9">
                                <input name="a8" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> Q 9:</label>
                            <div class="col-md-9">
                                <input name="q9" class="form-control" type="text" style="height: 30px;">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3"> A 9:</label>
                            <div class="col-md-9">
                                <input name="a9" class="form-control" type="text" style="height: 30px;">
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
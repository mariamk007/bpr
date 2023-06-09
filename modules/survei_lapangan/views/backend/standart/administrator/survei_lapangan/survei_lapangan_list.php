<script type="text/javascript">
function domo() {

    $('*').bind('keydown', 'Ctrl+a', function() {
        window.location.href = BASE_URL + '/administrator/Survei_lapangan/add';
        return false;
    });

    $('*').bind('keydown', 'Ctrl+f', function() {
        $('#sbtn').trigger('click');
        return false;
    });

    $('*').bind('keydown', 'Ctrl+x', function() {
        $('#reset').trigger('click');
        return false;
    });

    $('*').bind('keydown', 'Ctrl+b', function() {

        $('#reset').trigger('click');
        return false;
    });
}

jQuery(document).ready(domo);
</script>
<section class="content-header">
    <h1>
        <?= cclang('survei_lapangan') ?><small><?= cclang('list_all'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active"><?= cclang('survei_lapangan') ?></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">

        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-body ">
                    <div class="box box-widget widget-user-2">
                        <div class="widget-user-header ">
                            <div class="row pull-right">
                                <?php is_allowed('survei_lapangan_add', function(){?>
                                <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new"
                                    title="<?= cclang('add_new_button', [cclang('survei_lapangan')]); ?>  (Ctrl+a)"
                                    href="<?=  site_url('administrator/survei_lapangan/add'); ?>"><i
                                        class="fa fa-plus-square-o"></i>
                                    <?= cclang('add_new_button', [cclang('survei_lapangan')]); ?></a>
                                <?php }) ?>
                                <!-- <?php is_allowed('survei_lapangan_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> <?= cclang('survei_lapangan') ?> " href="<?= site_url('administrator/survei_lapangan/export?q='.$this->input->get('q').'&f='.$this->input->get('f')); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?> XLS</a>
                        <?php }) ?> -->
                                <!-- <?php is_allowed('survei_lapangan_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf <?= cclang('survei_lapangan') ?> " href="<?= site_url('administrator/survei_lapangan/export_pdf?q='.$this->input->get('q').'&f='.$this->input->get('f')); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
                        <?php }) ?> -->
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username"><?= cclang('survei_lapangan') ?></h3>
                            <h5 class="widget-user-desc"><?= cclang('list_all', [cclang('survei_lapangan')]); ?> <i
                                    class="label bg-yellow"><?= $survei_lapangan_counts; ?> <?= cclang('items'); ?></i>
                            </h5>
                        </div>

                        <form name="form_survei_lapangan" id="form_survei_lapangan"
                            action="<?= base_url('administrator/survei_lapangan/index'); ?>">



                            <!-- /.widget-user -->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-sm-2 padd-left-0 ">
                                        <select type="text" class="form-control chosen chosen-select" name="bulk"
                                            id="bulk" placeholder="Site Email">
                                            <option value="delete">Delete</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 padd-left-0 ">
                                        <button type="button" class="btn btn-flat" name="apply" id="apply"
                                            title="<?= cclang('apply_bulk_action'); ?>"><?= cclang('apply_button'); ?></button>
                                    </div>
                                    <div class="col-sm-3 padd-left-0  ">
                                        <input type="text" class="form-control" name="q" id="filter"
                                            placeholder="<?= cclang('filter'); ?>"
                                            value="<?= $this->input->get('q'); ?>">
                                    </div>
                                    <div class="col-sm-3 padd-left-0 ">
                                        <select type="text" class="form-control chosen chosen-select" name="f"
                                            id="field">
                                            <option value=""><?= cclang('all'); ?></option>
                                            <option
                                                <?= $this->input->get('f') == 'petugas_pemeriksa' ? 'selected' :''; ?>
                                                value="petugas_pemeriksa">Nama Petugas Pemeriksa</option>
                                            <option <?= $this->input->get('f') == 'jaminan_kredit' ? 'selected' :''; ?>
                                                value="jaminan_kredit">Jaminan Kredit</option>
                                            <option <?= $this->input->get('f') == 'lokasi_jaminan' ? 'selected' :''; ?>
                                                value="lokasi_jaminan">Lokasi Jaminan</option>
                                            <option
                                                <?= $this->input->get('f') == 'informasi_harga_jaminan' ? 'selected' :''; ?>
                                                value="informasi_harga_jaminan">Informasi Harga Jaminan</option>
                                            <option <?= $this->input->get('f') == 'situasi_jaminan' ? 'selected' :''; ?>
                                                value="situasi_jaminan">Deskripsi Jaminan</option>
                                            <option
                                                <?= $this->input->get('f') == 'nilai_taksasi_jaminan' ? 'selected' :''; ?>
                                                value="nilai_taksasi_jaminan">Nilai Taksasi Jaminan</option>
                                            <option <?= $this->input->get('f') == 'created_at' ? 'selected' :''; ?>
                                                value="created_at">Created At</option>
                                            <option <?= $this->input->get('f') == 'username' ? 'selected' :''; ?>
                                                value="username">Nama Debitur</option>
                                            <option <?= $this->input->get('f') == 'status_layak' ? 'selected' :''; ?>
                                                value="status_layak">Status Layak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1 padd-left-0 ">
                                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply"
                                            title="<?= cclang('filter_search'); ?>">
                                            Filter
                                        </button>
                                    </div>
                                    <div class="col-sm-1 padd-left-0 ">
                                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply"
                                            href="<?= base_url('administrator/survei_lapangan');?>"
                                            title="<?= cclang('reset_filter'); ?>">
                                            <i class="fa fa-undo"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dataTables_paginate paging_simple_numbers pull-right"
                                        id="example2_paginate">
                                        <?= $pagination; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">

                                <br>
                                <table class="table table-bordered table-striped dataTable">
                                    <thead>
                                        <tr class="">
                                            <th>
                                                <input type="checkbox" class="flat-red toltip" id="check_all"
                                                    name="check_all" title="check all">
                                            </th>
                                            <th data-field="petugas_pemeriksa" data-sort="1" data-primary-key="0">
                                                <?= cclang('petugas_pemeriksa') ?></th>
                                            <th data-field="jaminan_kredit" data-sort="1" data-primary-key="0">
                                                <?= cclang('jaminan_kredit') ?></th>
                                            <th data-field="lokasi_jaminan" data-sort="1" data-primary-key="0">
                                                <?= cclang('lokasi_jaminan') ?></th>
                                            <th data-field="informasi_harga_jaminan" data-sort="1" data-primary-key="0">
                                                <?= cclang('informasi_harga_jaminan') ?></th>
                                            <th data-field="situasi_jaminan" data-sort="1" data-primary-key="0">
                                                <?= cclang('situasi_jaminan') ?></th>
                                            <th data-field="nilai_taksasi_jaminan" data-sort="1" data-primary-key="0">
                                                <?= cclang('nilai_taksasi_jaminan') ?></th>
                                            <th data-field="created_at" data-sort="1" data-primary-key="0">
                                                <?= cclang('created_at') ?></th>
                                            <th data-field="username" data-sort="1" data-primary-key="0">
                                                Username Debitur</th>
                                            <th data-field="status_layak" data-sort="1" data-primary-key="0">
                                                <?= cclang('status_layak') ?></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_survei_lapangan">
                                        <?php foreach($survei_lapangans as $survei_lapangan): ?>
                                        <tr>
                                            <td width="5">
                                                <input type="checkbox" class="flat-red check" name="id[]"
                                                    value="<?= $survei_lapangan->id; ?>">
                                            </td>

                                            <td><span
                                                    class="list_group-petugas_pemeriksa"><?= _ent($survei_lapangan->petugas_pemeriksa); ?></span>
                                            </td>

                                            <td><span
                                                    class="list_group-jaminan_kredit"><?= _ent($survei_lapangan->jaminan_kredit); ?></span>
                                            </td>

                                            <td><span
                                                    class="list_group-lokasi_jaminan"><?= _ent($survei_lapangan->lokasi_jaminan); ?></span>
                                            </td>

                                            <td><span
                                                    class="list_group-informasi_harga_jaminan"><?= _ent($survei_lapangan->informasi_harga_jaminan); ?></span>
                                            </td>

                                            <td><span
                                                    class="list_group-situasi_jaminan"><?= _ent($survei_lapangan->situasi_jaminan); ?></span>
                                            </td>

                                            <td><span
                                                    class="list_group-nilai_taksasi_jaminan"><?= _ent($survei_lapangan->nilai_taksasi_jaminan); ?></span>
                                            </td>

                                            <td><span
                                                    class="list_group-created_at"><?= _ent($survei_lapangan->created_at); ?></span>
                                            </td>

                                            <td><?= $survei_lapangan->username ?></td>

                                            <td><span
                                                    class="list_group-status_layak"><?= _ent($survei_lapangan->status_layak); ?></span>
                                            </td>

                                            <td width="200">

                                                <?php is_allowed('survei_lapangan_view', function() use ($survei_lapangan){?>
                                                <a href="<?= site_url('administrator/survei_lapangan/view/' . $survei_lapangan->id); ?>"
                                                    class="label-default"><i class="fa fa-newspaper-o"></i>
                                                    <?= cclang('view_button'); ?>
                                                    <?php }) ?>
                                                    <?php is_allowed('survei_lapangan_update', function() use ($survei_lapangan){?>
                                                    <a href="<?= site_url('administrator/survei_lapangan/edit/' . $survei_lapangan->id); ?>"
                                                        class="label-default"><i class="fa fa-edit "></i>
                                                        <?= cclang('update_button'); ?></a>
                                                    <?php }) ?>
                                                    <?php is_allowed('survei_lapangan_delete', function() use ($survei_lapangan){?>
                                                    <a href="javascript:void(0);"
                                                        data-href="<?= site_url('administrator/survei_lapangan/delete/' . $survei_lapangan->id); ?>"
                                                        class="label-default remove-data"><i class="fa fa-close"></i>
                                                        <?= cclang('remove_button'); ?></a>
                                                    <?php }) ?>

                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php if ($survei_lapangan_counts == 0) :?>
                                        <tr>
                                            <td colspan="100">
                                                Survei Lapangan data is not available
                                            </td>
                                        </tr>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <hr>

                </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
$(document).ready(function() {

    "use strict";



    $('.remove-data').click(function() {

        var url = $(this).attr('data-href');

        swal({
                title: "<?= cclang('are_you_sure'); ?>",
                text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
                cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    document.location.href = url;
                }
            });

        return false;
    });


    $('#apply').click(function() {

        var bulk = $('#bulk');
        var serialize_bulk = $('#form_survei_lapangan').serialize();

        if (bulk.val() == 'delete') {
            swal({
                    title: "<?= cclang('are_you_sure'); ?>",
                    text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
                    cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
                    closeOnConfirm: true,
                    closeOnCancel: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        document.location.href = BASE_URL +
                            '/administrator/survei_lapangan/delete?' + serialize_bulk;
                    }
                });

            return false;

        } else if (bulk.val() == '') {
            swal({
                title: "Upss",
                text: "<?= cclang('please_choose_bulk_action_first'); ?>",
                type: "warning",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Okay!",
                closeOnConfirm: true,
                closeOnCancel: true
            });

            return false;
        }

        return false;

    }); /*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event) {
        if (checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });
    initSortable('survei_lapangan', $('table.dataTable'));
}); /*end doc ready*/
</script>
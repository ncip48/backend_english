<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h1 class="h3 mb-4 text-gray-800"></i> <?= $title ?>
                        <div class="float-right mr-1">
                            <a href="" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#importData"><i class="fa fa-plus"></i> Tambahkan</a>
                        </div>
                        <div class="float-right pr-1">
                            <button id="refresh-data" class="btn btn-block btn-outline-danger btn-sm"><i class="fa fa-sync-alt"></i> Refresh</button>
                        </div>
                    </h1>
                    <div id="result_wrapper" class="d-none alert alert-danger alert-dismissible fade show" role="alert">
                        <div id="result_error"></div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-4 mb-4" id="loader">
                        <div class="spinner-border text-danger text-center" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div id="mytablediv" class="table-responsive">
                        <table class="table table-hover" id="mytable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Verb One</th>
                                    <th scope="col">Verb Two</th>
                                    <th scope="col">Verb Three</th>
                                    <th scope="col">Verb ing</th>
                                    <th scope="col">Artinya</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="table-result">
                                <!-- <td colspan="7">Loading...</td> -->
                                <!--  -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->

<!-- Modal -->

<!--print Data-->
<div id="print_modal">
    <div class="modal fade" id="printData" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewDataLabel"><i class="fa fa-print"></i> Print Absen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form target="_blank" action="<?= base_url('laporan/laporan_absen_pegawai/') ?>" method="post">
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Print</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--batal Data-->
<div id="batal_modal">
    <div class="modal fade" id="batalData" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewDataLabel">Batal Absensi Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="batal-data">
                </div>
            </div>
        </div>
    </div>
</div>

<!--tutup Data-->
<div id="tutup_modal">
    <div class="modal fade" id="tutupData" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="addNewDataLabel">Tutup Absen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div id="tutup-data">
                </div>

            </div>
        </div>
    </div>
</div>

<!--delete Data-->
<div id="delete_modal">
    <div class="modal fade" id="deleteData" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewDataLabel">Hapus Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="delete-data">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Print" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewDataLabel">Laporan Absensi Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form target="_blank" action="<?= base_url('laporan/laporan_absen_pegawai_bulanan') ?>" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="tgl_awal">Dari Tanggal</label>
                        <input class="form-control" type="date" id="tgl_awal" name="tgl_awal" value="<?= set_value('tgl_awal') ?>">
                        <small class="text-danger pl-3"></small>
                    </div>

                    <div class="form-group">
                        <label for="tgl_akhir">Sampai Tanggal</label>
                        <input class="form-control" type="date" id="tgl_akhir" name="tgl_akhir" value="<?= set_value('tgl_akhir') ?>">
                        <small class="text-danger pl-3"></small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                </div>

            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="importData" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewDataLabel">Import Data Absensi Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= form_open_multipart(); ?>

                <div class="form-group files">
                    <label>Upload File Excel</label>
                    <input type="file" class="form-control" multiple="" name="excel">
                </div>

                <label>Contoh data excel
                    <a href="<?= base_url('assets/contoh/data_absen.xlsx') ?>" class="badge badge-pill badge-success" download>Download</a></label>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" value="upload" class="btn btn-success"><i class="fa fa-file-import"></i> Import</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#mytablediv").hide();
        loadData();
        BindTable();
        // $('#dynamic_content').html(make_skeleton());

        $("#refresh-data").click(function() {
            $("#mytable").DataTable().clear()
            loadData();
        });

    });

    //untuk modal print
    $(document).on("click", "#print-modal", function() {
        var idprint = $(this).data('idprint');
        $.ajax({
            type: "POST",
            data: {
                idprint
            },
            url: "<?= site_url('api/get_absen_print'); ?>",
            success: function(response) {
                $('#print_modal #printData .modal-body').html(response)
            }
        });
    });

    //untuk modal hapus
    $(document).on("click", "#delete-modal", function() {
        var id = $(this).data('iddelete');
        var nama = $(this).data('nama');
        var tgl = $(this).data('tgl');
        $('#delete_modal #deleteData #delete-data').html('<div class="modal-body"><p>Anda yakin ingin menghapus <b>' + nama + '</b></p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button><a href="<?= base_url('hapus/hapus_absen_pegawai?id=') ?>' + id + '" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></div>')
    });

    //untuk modal batal
    $(document).on("click", "#batal-modal", function() {
        var id = $(this).data('idbatal');
        var nama = $(this).data('nama');
        var tgl = $(this).data('tgl');
        $('#batal_modal #batalData #batal-data').html('<div class="modal-body"><p>Anda yakin ingin membatalkan absensi tanggal <b>' + tgl + '</b> atas nama <b>' + nama + '</b></p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button><a href="<?= base_url('update/batal_absen_pegawai/') ?>' + tgl + '?id=' + id + '" class="btn btn-danger">Batalkan</a></div >')
    });

    //untuk modal tutup
    $(document).on("click", "#tutup-modal", function() {
        var id = $(this).data('idtutup');
        var nama = $(this).data('nama');
        var tgl = $(this).data('tgl');
        $('#tutup_modal #tutupData #tutup-data').html('<div class="modal-body"><p>Anda yakin ingin menutup absen pegawai tanggal <b>' + tgl + '</b> atas nama <b>' + nama + '</b></p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button><a href="<?= base_url('update/tutup_absen_pegawai/daftar_absen/') ?>' + tgl + '?id=' + id + '" class="btn btn-warning">Tutup Absen</a></div>')
    });

    function make_skeleton() {
        var output = '';
        for (var count = 0; count < 5; count++) {
            output += '<div class="ph-row">';
            output += '<div class="ph-col-6"></div>';
            output += '</div>';
        }
        return output;
    }

    function BindTable() {
        myTable = $("#mytable").DataTable({
            "autoWidth": false,
            'columnDefs': [{
                "targets": 0, // your case first column
                "className": "text-center",
                "width": "4%"
            }]

        });
    }

    function loadData() {
        $(".table-loading").hide();
        $.ajax({
            type: "GET",
            url: "<?= site_url('api/irregular'); ?>",
            beforeSend: function(xhr) {
                $("#mytablediv").hide();
                $("#loader").addClass("d-flex");
            },
            complete: function() {
                $("#loader").removeClass("d-flex").addClass('d-none');
                $("#mytablediv").show();
            },
            success: function(response) {
                var jsonObject = (response.data);
                if (!response.success) {
                    $("#loader").removeClass("d-flex").addClass('d-none');
                    $("#mytablediv").show();
                    $('#result_wrapper').removeClass('d-none')
                    $('#result_error').html(response.error)
                } else {
                    var result = jsonObject.map(function(item, index) {
                        var result = [];
                        result.push(index + 1);
                        result.push(item.verb_one);
                        result.push(item.verb_two);
                        result.push(item.verb_three);
                        result.push(item.verb_ing);
                        result.push(item.translate);
                        result.push('<a href="<?= base_url('admin/view_absen_pegawai/') ?>' + item.tgl + '?id=' + item.role_absen + '" class="badge badge-success mr-1"><i class="fa fa-edit"></i> Edit</a><a href="" id="delete-modal" class="badge badge-danger" data-toggle="modal" data-iddelete=' + item.id + ' data-nama="' + item.nama + '" data-target="#deleteData"><i class="fa fa-trash"></i> Hapus</a>');
                        return result;
                    });
                    myTable.rows.add(result);
                    myTable.draw();
                    $('#result_wrapper').addClass('d-none')
                }
            },
            failure: function() {
                $("#loader").removeClass("d-flex").addClass('d-none')
                $("#mytablediv").show();
                $('#result_error').html('Error!!')
            }
        });
    }
</script>
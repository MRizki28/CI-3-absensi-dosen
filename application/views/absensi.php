<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form</h4>
            <p class="card-description">Silahkan isi sesuai ketentuan</p>
            <form action="<?php echo site_url('absensi_controller/simpan'); ?>" method="post" class="forms-sample">
                <?php if (isset($absensi)) { ?>

                    <div class="form-group">
                        <label for="id_dosen">Nama Dosen</label>
                        <select class="form-control" id="id_dosen" name="id_dosen" required>
                            <?php foreach ($dosens as $abs) { ?>
                                <option value="<?php echo $prd[$abs['id']] = $abs['id'] ?>"><?php echo $prd[$abs['id']] = $abs['nama_dosen'] ?></option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('id_dosen') ?></small>
                    </div>
                <?php } ?>
                <input type="hidden" name="id_absensi" value="<?= $absensi['id_absensi'] ?>">

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <select class="form-control" id="keterangan" name="keterangan" required>
                        <option>Hadir</option>
                        <option>Tidak Hadir</option>
                    </select>
                    <small class="text-danger"><?= form_error('keterangan') ?></small>
                </div>


                <div class="card-footer">
                    <input type="submit" class="btn btn-primary btn-sm" name="save" value="Save" />
                    <a class="btn btn-secondary btn-sm" href="<?php echo site_url('admin/index') ?>" role="button">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">

            </div>
            <h4 class="card-title">Data Dosen</h4>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dosen</th>
                            <th>NIDN</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $no = 1;
                        foreach ($detilss as $det) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?= $det['nama_dosen'] ?></td>
                                <td><?= $det['nidn'] ?></td>
                                <td><?= $det['keterangan'] ?></td>



                                <td>

                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticModal<?= $det['id_detail_absensi'] ?>" onclick="confirm_modal('<?php echo site_url('absensi_controller/hapus/' . $det['id_detail_absensi']) ?>','Title');" class="btn btn-small"><i class="fa fa-trash-o"></i>Hapus</a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal fade" id="modal_delete_m_n" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="" data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Konfirmasi Hapus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Yakin ingin menghapus ini?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <a type="button" class="btn btn-primary" id="delete_link_m_n">Ya, Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function confirm_modal(delete_url, title) {
                    jQuery('#modal_delete_m_n').modal('show', {
                        backdrop: 'static',
                        keyboard: false
                    });
                    jQuery("#modal_delete_m_n .grt").text(title);
                    document.getElementById('delete_link_m_n').setAttribute("href", delete_url);
                    document.getElementById('delete_link_m_n').focus();
                }
            </script>
        </div>
    </div>
</div>
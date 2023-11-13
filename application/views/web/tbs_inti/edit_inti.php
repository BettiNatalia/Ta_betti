<div class="container-fluid">
    <div class="card shadow">
<!-- 1. membuat page heading -->
        <div class="card-header">Form Edit Data TBS Inti</div>
        <div class="card-body">
            <div class="row">
<!-- 2. col-sm-3 sudah di isi sehingga konten lainnya harus melewati 3 kolom -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_inti/inti/') ?>" class="btn btn-primary btn-sm">Kembali</a> -->
                </div>
<!-- 3. col-sm-6 untuk membuat panjang form -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_inti/inti/update/') ?>" class="user form-horizontal" method="POST">
                    <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal ?>">
<!-- 4. untuk membuat file edit kita harus menggunakan 2 input sehingga input ke dua menjadi keyword posisi dari data yang dimaksud -->
<!-- 5. keyword dari edit yang dibuat sesuai dengan parameter di button edit view -->
                            <input type="hidden" class="form-control" name="id_tanggal" value="<?= $data->id_tanggal ?>">
                        </div>
<!-- 6. untuk membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                        <a href="<?= base_url('web/data_inti/inti') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

<!-- 1. Page Heading -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Divisi</div>
        <div class="card-body">
            <div class="row">
<!-- 2. col sm-3 dan tg div penutup untuk membuat form dimulai pada kolom ke 3 -->
            <div class="col-sm-3">
                </div>
<!-- 3. col-sm-4 untuk mengatur panjang form -->
                <div class="col-sm-4">
                    <form action="<?= base_url('web/data_divisi/divisi/create/') ?>"class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <input type="text" class="form-control" name="divisi" value="">
                        </div>

<!-- 4. membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_divisi/divisi') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow">
<!-- 1. page heading -->
        <div class="card-header">Form Tambah Data Pemasaran Produksi</div>
        <div class="card-body">
            <div class="row">
<!-- 2. untuk col-sm-3 telah diisi maka konten lainya harus melewati 3 kolom sehingga konten akan tampil -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_inti/inti/') ?>" class="btn btn-primary btn-sm">Kembali</a> -->
                </div>
<!-- 3. untuk col-sm-6 untuk membuat panjang form yaitu 6 -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_pem/pem/create/') ?>" class="user form-horizontal" method="POST">
                    <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
<!-- 4. untuk membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_pem/pem') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

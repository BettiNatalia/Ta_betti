<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Produksi CPO</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_produksi_cpo/cpo/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_produksi_cpo/cpo/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_asisten_pemasaran">ID Asisten Pemasaran</label>
                            <input type="text" class="form-control" name="id_asisten_pemasaran"
                                value="<?= $data->id_asisten_pemasaran ?>">
                            <input type="hidden" name="where" value="<?= $data->id_asisten_pemasaran ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_asisten">Nama Asisten</label>
                            <input type="text" class="form-control" name="nama_asisten" value="<?= $data->nama_asisten ?>">
                        </div>
                        <div class="form-group">
                            <label for="ukuran_tank">Ukuran Tank</label>
                            <input type="text" class="form-control" name="ukuran_tank" value="<?= $data->ukuran_tank ?>">
                        </div>
                        <div class="form-group">
                            <label for="tinggi">Tinggi</label>
                            <input type="text" class="form-control" name="tinggi" value="<?= $data->tinggi ?>">
                        </div>
                        <div class="form-group">
                            <label for="volume">Volume</label>
                            <input type="text" class="form-control" name="volume" value="<?= $data->volume ?>">
                        </div>
                        <div class="form-group">
                            <label for="suhu">Suhu</label>
                            <input type="text" class="form-control" name="suhu" value="<?= $data->suhu ?>">
                        </div>
                        <div class="form-group">
                            <label for="bj_suhu">BJ Suhu</label>
                            <input type="text" class="form-control" name="bj_suhu" value="<?= $data->bj_suhu ?>">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" name="stok" value="<?= $data->stok ?>">
                        </div>
                        <div class="form-group">
                            <label for="cpo_hi">CPO HI</label>
                            <input type="text" class="form-control" name="cpo_hi" value="<?= $data->cpo_hi ?>">
                        </div>
                        <div class="form-group">
                            <label for="total_cpo">Total CPO</label>
                            <input type="text" class="form-control" name="total_cpo" value="<?= $data->total_cpo ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
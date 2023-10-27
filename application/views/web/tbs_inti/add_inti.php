<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">Form Tambah Data TBS Inti</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_inti/inti/') ?>" class="btn btn-primary btn-sm">Kembali</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_inti/inti/create/') ?>" class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_inti">ID Inti</label>
                            <input type="text" class="form-control" name="id_inti" value="">
                        </div>
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <select name="divisi" class="form-control" id="divisi">
                                <?php foreach ($divisi_list as $divisi): ?>
                                    <option value="<?= $divisi['divisi'] ?>">
                                        <?= $divisi['divisi'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="janjang">Janjang</label>
                            <input type="text" class="form-control" name="janjang" value="">
                        </div>
                        <div class ="form-group">
                            <label for="tonase">Tonase</label>
                            <input type="text" class="form-control" name="tonase" value="">
                        </div>
                        <div class="form-group">
                            <label for="BJR">BJR</label>
                            <input type="text" class="form-control" name="BJR" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

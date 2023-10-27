<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data TBS Luar</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_luar/luar/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_luar/luar/update/') ?>" class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_tbs">ID TBS</label>
                            <input type="text" class="form-control" name="id_tbs" value="<?= $data['id_tbs'] ?>">
                            <input type="hidden" name="where" value="<?= $data['id_tbs'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="asal_tbs">Asal TBS Luar</label>
                            <select name="asal_tbs" class="form-control" id="asal_tbs">
                                <?php foreach ($suplier_list as $suplier): ?>
                                    <option value="<?= $suplier['suplier'] ?>" <?php if ($data['asal_tbs'] == $suplier['suplier']) echo 'selected' ?>>
                                        <?= $suplier['suplier'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="janjang">Janjang</label>
                            <input type="text" class="form-control" name="janjang" value="<?= $data['janjang'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="bruto">Bruto</label>
                            <input type="text" class="form-control" name="bruto" value="<?= $data['bruto'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="potong">Potong</label>
                            <input type="text" class="form-control" name="potong" value="<?= $data['potong'] ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="netto">Netto</label>
                            <input type="text" class="form-control" name="netto" value="<?= $data['netto'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Data TBS Luar</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_luar/luar/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_luar/luar/create/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_tbs">ID TBS</label>
                            <input type="text" class="form-control" name="id_tbs" value="">
                        </div>
                        <div class="form-group">
                            <label for="asal_tbs">asal tbs luar</label>
                            <select name="asal_tbs" class="form-control" id="asal_tbs">
                                <?php foreach ($suplier_list as $suplier): ?>
                                    <option value="<?= $suplier['suplier'] ?>">
                                        <?= $suplier['suplier'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="janjang">Janjang</label>
                            <input type="text" class="form-control" name="janjang" value="">
                        </div>
                        <div class="form-group">
                            <label for="bruto">Bruto</label>
                            <input type="text" class="form-control" name="bruto" value="">
                        </div>
                        <div class="form-group">
                            <label for="potong">Potong</label>
                            <input type="text" class="form-control" name="potong" value="">
                        </div>
                        <div class="form-group">
                            <label for="netto">Netto</label>
                            <input type="text" class="form-control" name="netto" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
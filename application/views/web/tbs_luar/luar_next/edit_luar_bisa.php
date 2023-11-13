<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">Form Edit Data TBS Luar</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url();?>web/data_inti/inti/tbs_inti/<?=$id;?>" class="btn btn-primary btn-sm">Kembali</a> -->
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_luar/luar/update_tbs_luar/') ?>" class="user form-horizontal" method="POST">
                        
                        <div class="form-group"> 
                            <label for="asal_tbs">Asal TBS</label>
                            <select name="asal_tbs" class="form-control" id="asal_tbs">
                            <option value="" disabled selected>--Pilih Divisi--</option> <!-- Ini adalah placeholder -->
                                <?php foreach ($suplier_list as $suplier): ?>
                                    <option value="<?= $suplier['id_suplier'] ?>" <?php if ($data['suplier'] == $suplier['suplier']) echo 'selected' ?>>
                                        <?= $suplier['suplier'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="janjang">Janjang</label>
                            <input type="text" class="form-control" name="janjang" value="<?= $data['janjang'] ?>">
                            <input type="hidden" class="form-control" name="id_luar" value="<?= $data['id_luar'] ?>">
                            <input type="hidden" class="form-control" name="id_tanggal" value="<?=$id;?>">
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
                        <a href="<?= base_url();?>web/data_luar/luar/tbs_luar/<?=$id;?>" class="btn btn-secondary btn-sm">close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

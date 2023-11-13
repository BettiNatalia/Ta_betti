<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">Form Edit Data TBS Inti</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url();?>web/data_inti/inti/tbs_inti/<?=$id;?>" class="btn btn-primary btn-sm">Kembali</a> -->
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_inti/inti/update_tbs_inti/') ?>" class="user form-horizontal" method="POST">
                        
                        <div class="form-group"> 
                            <label for="divisi">Divisi</label>
                            <select name="divisi" class="form-control" id="divisi">
                            <option value="" disabled selected>--Pilih Divisi--</option> <!-- Ini adalah placeholder -->
                                <?php foreach ($divisi_list as $divisi): ?>
                                    <option value="<?= $divisi['id_divisi'] ?>" <?php if ($data['divisi'] == $divisi['divisi']) echo 'selected' ?>>
                                        <?= $divisi['divisi'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="janjang">Janjang</label>
                            <input type="text" class="form-control" name="janjang" value="<?= $data['janjang'] ?>">
                            <input type="hidden" class="form-control" name="id_inti" value="<?= $data['id_inti'] ?>">
                            <input type="hidden" class="form-control" name="id_tanggal" value="<?=$id;?>">
                        </div>
                        <div class="form-group">
                            <label for="tonase">Tonase</label>
                            <input type="text" class="form-control" name="tonase" value="<?= $data['tonase'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="BJR">BJR</label>
                            <input type="text" class="form-control" name="BJR" value="<?= $data['BJR'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                        <a href="<?= base_url();?>web/data_inti/inti/tbs_inti/<?=$id;?>" class="btn btn-secondary btn-sm">close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

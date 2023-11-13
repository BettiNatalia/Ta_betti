<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Pemasaran Produksi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    
                </div>
                <div class="col-sm-6">
                <form action="<?= base_url('web/data_pem/pem/update_pem_pro') ?>" class="user form-horizontal" method="POST">
                        
                        <div class="form-group">
                    <label for="delivery">Jenis Produksi</label>
                        <select name="jenis_produksi" class="form-control" id="jenis_produksi">
                        <option value="" disabled selected>--Pilih Jenis Produksi--</option>
                        <option value="CPO">CPO</option>
                        <option value="Kernel">Kernel</option>
                        </select>
                        </div>
                        <div class="form-group"> 
                            <label for="delivery">Delivery</label>
                            <select name="delivery" class="form-control" id="delivery">
                            <option value="" disabled selected>--Pilih Delivery--</option> <!-- Ini adalah placeholder -->
                                <?php foreach ($delivery_list as $delivery): ?>
                                    <option value="<?= $delivery['id_delikernel'] ?>" <?php if ($data['delivery'] == $delivery['delivery']) echo 'selected' ?>>
                                        <?= $delivery['delivery'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="via">VIA</label>
                            <input type="text" class="form-control" name="via" value="<?= $data['via'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="do_no">Do No</label>
                            <input type="text" class="form-control" name="do_no" value="<?= $data['do_no'] ?>"> 
                            <input type="hidden" class="form-control" name="id_pem" value="<?= $data['id_pem'] ?>">
                            <input type="hidden" class="form-control" name="id_tanggal" value="<?=$id;?>">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="<?= $data['quantity'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="bulan_lalu">Bulan Lalu</label>
                            <input type="text" class="form-control" name="bulan_lalu" value="<?= $data['bulan_lalu'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="hi">HI</label>
                            <input type="text" class="form-control" name="hi" value="<?= $data['hi'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="sd_hi">S/D HI</label>
                            <input type="text" class="form-control" name="sd_hi" value="<?= $data['sd_hi'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="sisa_do">Sisa Do</label>
                            <input type="text" class="form-control" name="sisa_do" value="<?= $data['sisa_do'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="pemasaran_kemarin">Pemasaran S/D Kemarin</label>
                            <input type="text" class="form-control" name="pemasaran_kemarin" value="<?= $data['pemasaran_kemarin'] ?>"> 
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url();?>web/data_pem/pem/pem_pro/<?=$id;?>" class="btn btn-secondary btn-sm">close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

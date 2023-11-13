<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">Form Tambah Data Pemasaran Produksi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url();?>web/data_inti/inti/tbs_inti/<?=$id;?>" class="btn btn-primary btn-sm">Kembali</a> -->
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_pem/pem/create_pem_pro/') ?>" class="user form-horizontal" method="POST">

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
                            <option value="" disabled selected>--Pilih Delivery--</option> <!-- Ini adalah placeholder di atas nilai list divisi-->
                                <?php foreach ($delivery_list as $delivery): ?>
                                    <option value="<?= $delivery['id_delikernel'] ?>">
                                        <?= $delivery['delivery'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="via">VIA</label>
                            <input type="text" class="form-control" name="via" id="viaInput" value="">
                        </div>

                        <div class="form-group">
                            <label for="do_no">Do No</label>
                            <input type="text" class="form-control" name="do_no" id="do_noInput" value="">
                            <input type="hidden" class="form-control" name="id_tanggal" value="<?=$id;?>">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" id="quantityInput" value="">
                        </div>

                        <div class="form-group">
                            <label for="bulan_lalu">Bulan Lalu</label>
                            <input type="text" class="form-control" name="bulan_lalu" id="bulan_laluInput" value="">
                        </div>
                        <div class="form-group">
                            <label for="hi">HI</label>
                            <input type="text" class="form-control" name="hi" id="hiInput" value="">
                        </div>
                        <div class="form-group">
                            <label for="sd_hi">S/D HI</label>
                            <input type="text" class="form-control" name="sd_hi" id="sd_hiInput" value="">
                        </div>
                        <div class="form-group">
                            <label for="sisa_do">Sisa Do</label>
                            <input type="text" class="form-control" name="sisa_do" id="sisa_doInput" value="">
                        </div>
                        <div class="form-group">
                            <label for="pemasaran_kemarin">Pemasaran S/D Kemarin</label>
                            <input type="text" class="form-control" name="pemasaran_kemarin" id="pemasaran_kemarinInput" value="">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                        <!-- Tombol "Close" -->
                        <a href="<?= base_url();?>web/data_pem/pem/pem_pro/<?=$id;?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
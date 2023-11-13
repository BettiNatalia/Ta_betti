<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">Form Tambah Data TBS Inti</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url();?>web/data_inti/inti/tbs_inti/<?=$id;?>" class="btn btn-primary btn-sm">Kembali</a> -->
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_inti/inti/create_tbs_inti/') ?>" class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <select name="divisi" class="form-control" id="divisi">
                                
                            <option value="" disabled selected>--Pilih Divisi--</option> <!-- Ini adalah placeholder di atas nilai list divisi-->
                                <?php foreach ($divisi_list as $divisi): ?>
                                    <option value="<?= $divisi['id_divisi'] ?>">
                                        <?= $divisi['divisi'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="janjang">Janjang</label>
                            <input type="text" class="form-control" name="janjang" id="janjangInput" value="">
                            <input type="hidden" class="form-control" name="id_tanggal" value="<?=$id;?>">
                        </div>
                        <div class="form-group">
                            <label for="tonase">Tonase</label>
                            <input type="text" class="form-control" name="tonase" id="tonaseInput" value="">
                        </div>
                        <div class="form-group">
                            <label for="BJR">BJR</label>
                            <input type="text" class="form-control" name="BJR" id="BJRInput" value="" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                        <!-- Tombol "Close" -->
                        <a href="<?= base_url();?>web/data_inti/inti/tbs_inti/<?=$id;?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Ambil referensi ke elemen-elemen input
    var janjangInput = document.getElementById("janjangInput");
    var tonaseInput = document.getElementById("tonaseInput");
    var BJRInput = document.getElementById("BJRInput");

    // Tambahkan event listener untuk input "Janjang" dan "Tonase"
    janjangInput.addEventListener("input", updateBJR);
    tonaseInput.addEventListener("input", updateBJR);

    function updateBJR() {
        // Ambil nilai dari input "Janjang" dan "Tonase" dan ubah ke tipe angka (float)
        var janjangValue = parseFloat(janjangInput.value) || 0;
        var tonaseValue = parseFloat(tonaseInput.value) || 0;

        // Hitung nilai BJR sebagai hasil penjumlahan Janjang dan Tonase
        var bjrValue = Math.round(tonaseValue / janjangValue);

        // Tampilkan hasilnya di input "BJR"
        BJRInput.value = bjrValue;
    }
</script>

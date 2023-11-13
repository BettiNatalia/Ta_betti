<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">Form Tambah Data TBS Luar</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url();?>web/data_inti/inti/tbs_inti/<?=$id;?>" class="btn btn-primary btn-sm">Kembali</a> -->
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_luar/luar/create_tbs_luar/') ?>" class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="asal_tbs">Asal TBS</label>
                            <select name="asal_tbs" class="form-control" id="asal_tbs">
                                
                            <option value="" disabled selected>--Pilih Asal TBS--</option> <!-- Ini adalah placeholder di atas nilai list divisi-->
                                <?php foreach ($suplier_list as $suplier): ?>
                                    <option value="<?= $suplier['id_suplier'] ?>">
                                        <?= $suplier['suplier'] ?>
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
                            <label for="bruto">Bruto</label>
                            <input type="text" class="form-control" name="bruto" id="brutoInput" value="">
                        </div>
                        <div class="form-group">
                            <label for="potong">Potong</label>
                            <input type="text" class="form-control" name="potong" id="potongInput" value="">
                        </div>
                        <div class="form-group">
                            <label for="netto">Netto</label>
                            <input type="text" class="form-control" name="netto" id="nettoInput" value="" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                        <!-- Tombol "Close" -->
                        <a href="<?= base_url();?>web/data_luar/luar/tbs_luar/<?=$id;?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Ambil referensi ke elemen-elemen input
    var brutoInput = document.getElementById("brutoInput");
    var potongInput = document.getElementById("potongInput");
    var nettoInput = document.getElementById("nettoInput");

    // Tambahkan event listener untuk input "Bruto" dan "Potong"
    brutoInput.addEventListener("input", updatenetto);
    potongInput.addEventListener("input", updatenetto);

    function updatenetto() {
        // Ambil nilai dari input "Bruto" dan "Potong" dan ubah ke tipe angka (integer)
        var brutoValue = parseInt(brutoInput.value) || 0;
        var potongValue = parseInt(potongInput.value) || 0;

        // Hitung nilai Netto sebagai hasil pengurangan Bruto dan Potong
        var nettoValue = brutoValue - potongValue;

        // Tampilkan hasilnya di input "Netto"
        nettoInput.value = nettoValue;
    }

    // Panggil fungsi updatenetto untuk memberikan nilai awal saat halaman dimuat
    updatenetto();
</script>

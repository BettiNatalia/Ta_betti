<div class="container-fluid">

<!-- 1. membuat tampilan alert di tengah dan paling atas jika ingin membuat alert di bawah letakkan source code di bawah -->
    <div class="row mt-5 d-sm-flex">
        <div class="col-12">
            <?php if ($this->session->flashdata('primary')) : ?>
                <div class="alert alert-primary" role="alert" style="text-align: center;">
                <?= $this->session->flashdata('primary') ?>
            </div>
            <?php endif ?>
        </div>
    </div>

<!-- 2. untuk membuat teks data tbs inti -->
    <div>
        <h1 class="h3 mb-3 font-weight-bold" style="color: black">Data TBS Inti</h1>
    </div>

    

<!-- 3. untuk membuat card -->
    <div class="row">
        <div class="card col-sm-12">


<!-- 4. untuk membuat button tambah data dimana berada pada card header & untuk membuat print di ujung tambahkan beetwen &justify-content untuk membuat horizontal -->
            <div class="mt-3 mb-0 d-flex justify-content-between">
                <a href="<?= base_url();?>web/data_inti/inti/add_tbs_inti/<?=$id;?>" class=" btn btn-sm shadow-sm" style="color: black; background-color: lightcyan">Tambah Data</a>
                <a href="<?php echo base_url('web/data_inti/inti/print'); ?>" class="btn btn-info btn-sm" style="color: black;"> <i class="fa fa-print"></i>Print</a>
            </div>

<!-- 5. untuk membuat konten bagian isi card body dan tag hr membuat garis lurus   -->
            <hr style="color: black; border-style: solid; border-width: 1px;">

<!-- 6. untuk membuat tabel user dan tabel button tambah data menyatu jika dihapus maka akan terpisah-->
            <div class="">
                <div class="row">

<!-- 7. Teks "Search:" dan kotak pencarian yang berada -->
                    <div class="col-md-3 col-12 d-flex align-items-center">
                        <span class="h6 mb-0 font-weight-bold" style="margin right: 10px; color: black;">Search:</span>
<!-- 8. untuk membuat panah tetap berada di pencarian maka gunakan autofocus,  -->
                        <input type="search" id="searchInput" class="form-control form-control-sm" placeholder="Cari Data TBS" name="keyword" autocomplete="off" autofocus style="color: black; height: 35px;">
                    </div>

<!-- 9. untuk Penambahan elemen Show dan Entries yang membuat show entries disebelah kanan paling ujung, harus menggunakan col-12 -->
                    <div class="col-md-9 col-12 d-flex align-items-center justify-content-end">
                        <div class="dataTables_length" id="dataTable_length">
                            <label class="d-flex align-items-center">
                                Show
                                <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                Entries
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-2">
<!-- 10. tabel hover untuk membuat kolom data tabel lebih gelap ketika kursor tertuju -->
                    <table id="yourTableID" class=" table table-striped table-hover">
                        <thead style="font-size: 13px; font-weight: bold; color: black">
                            <tr>
                                <th>Divisi <i class="fas fa-sort"></i></th>
                                <th>Janjang <i class="fas fa-sort"></i></th>
                                <th>Tonase <i class="fas fa-sort"></i></th>
                                <th>BJR <i class="fas fa-sort"></i></th>
<!-- 11. d-flex tidak bisa memindahkan teks karena itu digunakan untuk mengubah posisi button sedangkan mengubah posisi teks menggunakan class: text-center -->
                                <th class="text-center" colspan="2" style=" color: black;">Aksi</th>
                            </tr>
                        </thead>

<!-- 12. membuat tbody untuk mengisi data tabel perbaris -->
                        <tbody>
                            <?php
// 13. menginisalisasi total dengan 3 elemen yaitu janjang, tonase, dan bjr
                            $total = array(
                                'janjang' => 0,
                                'tonase' => 0,
                                'BJR' => 0,
                                
                            );
                            ?>
                            <?php foreach ($data as $datas): ?>
                                <tr style="font-size: 13px; color: black">
                                    <td><?= $datas->divisi ?></td>
                                    <td><?= $datas->janjang ?></td>
                                    <td><?= $datas->tonase ?></td>
                                    <td><?= $datas->BJR ?></td>
<!-- 14. membuat button edit dan hapus -->
                                    <td style="width: 90px;">
                                    <a class=" btn-sm bg-gradient-primary" onclick="return confirm('Anda Yakin Ingin Edit')" href="<?= base_url();?>web/data_inti/inti/edit_tbs_inti/<?=$datas->id_inti;?>/<?=$datas->id_tanggal;?>" class="btn btn-info btn-sm"><i class="far fa-edit" style="color: #fcfcfd;"></i></a>
                                    <a class="btn-sm bg-gradient-danger" onclick="return confirm('Anda Yakin Ingin Hapus')" href="<?= base_url();?>web/data_inti/inti/delete_tbs_inti/<?=$datas->id_inti;?>/<?=$datas->id_tanggal;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color: #f1f2f4;"></i></a>
                                    </td>
                                </tr>
<!-- 15. membuat operasi hitung janjang, tonase -->
                                <?php
                                $total['janjang'] += $datas->janjang;
                                $total['tonase'] += $datas->tonase;
                            ?>
                            <?php endforeach ?>

<!-- 16 membuat baris baru dengan menambahkan nilai total ke masing-masing kolom dimulai dari kolom divisi-->
                                <tr style="color: black;">
                                    <td><strong>Total:</strong></td>
                                    <td><strong><?= $total['janjang'] ?></strong></td>
                                    <td><strong><?= $total['tonase'] ?></strong></td>
<!-- 17. number_format digunkaan untuk mengkonversi angka menjadi bilangan bulat. -->
<!-- 18. td dibawah merupakan RUMUS untuk membuat nilai pada kolom BJR -->
                                    <td>
                                    <?php if($total['tonase'] == 0 && $total['janjang'] == 0) : ?>
                                    <strong>0</strong>
                                    <?php else : ?>
                                        <?=number_format($total['tonase'] / $total['janjang']) ?>
                                    <?php endif;?>
                                    </td>
                                </tr>
                        </tbody>
                    </table>

<!-- 19. membuat kolom KHUSUS MENAMPUNG NILAI TONASE untuk mengetahui seluruh total TBS INti -->
                    <table>
                        <tr class="mb-5" style="color: black; font-weight: bold; text-align: center; font-size: 13px">
                            <td style="border: 4px solid blue; background-color: #e0e0e0;"><strong>Total TBS Inti : <?= $total['tonase'] ?></strong></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>


<!-- 20. untuk membuat ke halaman sebelumnya atau kembali -->
        <div class="row container-fluid">
                    <div class="col-sm-3 mt-3 mb-3">
                        <a href="<?= base_url('web/data_inti/inti') ?>" class="btn btn-primary btn-sm"> <i class="fas fa-sort-amount-up fa-rotate-270"></i>Kembali</a>
                    </div>
        </div>

<script>
    // Fungsi JavaScript untuk melakukan pencarian
    document.getElementById('searchInput').addEventListener('input', function () {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        let hasResults = false; // Tambahkan variabel ini

        rows.forEach(row => {
// 21. input setiap kolom yang akan di cari datanya
            const divisiCell = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
            const janjangCell = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const tonaseCell = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const BJRCell = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
            

// 22. input semua kolom yang akan di cari nilainya
            if (divisiCell.includes(searchValue) || janjangCell.includes(searchValue) || tonaseCell.includes(searchValue) || BJRCell.includes(searchValue)) {
                row.style.display = 'table-row';
                hasResults = true; // Set hasResults ke true jika ada hasil
            } else {
                row.style.display = 'none';
            }
        });

        // Tampilkan pesan jika tidak ada hasil pencarian
        if (!hasResults) {
            alert("Data tidak ditemukan");
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Mendapatkan elemen "Show Entries" dan tabel
        var dataTableLength = document.querySelector('select[name="dataTable_length"]');
        var table = document.getElementById('yourTableID'); // Gantilah 'yourTableID' dengan ID tabel yang sesuai

        // Mendapatkan semua baris data
        var rows = table.querySelectorAll('tbody tr');
        
        // Fungsi untuk menampilkan baris sesuai dengan pilihan "Show Entries"
        function displayRows() {
            // Mendapatkan nilai yang dipilih oleh pengguna
            var selectedValue = parseInt(dataTableLength.value);
            
            // Menyembunyikan semua baris
            rows.forEach(function (row) {
                row.style.display = 'none';
            });
            
            // Menampilkan jumlah baris yang sesuai dengan pilihan pengguna
            for (var i = 0; i < selectedValue && i < rows.length; i++) {
                rows[i].style.display = '';
            }
        }
        
        // Mendengarkan perubahan pada elemen "Show Entries"
        dataTableLength.addEventListener('change', function () {
            displayRows();
        });
        
        // Fungsi JavaScript untuk melakukan pencarian
        document.getElementById('searchInput').addEventListener('input', function () {
            const searchValue = this.value.toLowerCase();
            
            // Menyembunyikan semua baris
            rows.forEach(function (row) {
                row.style.display = 'none';
            });
            
// 23. Menampilkan baris yang sesuai dengan pencarian berdasarkan lokasi kolom
            rows.forEach(function (row) {
                const divisiCell = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                const janjangCell = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const tonaseCell = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const BJRCell = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                
// 24. menginisialiasai data yang akan di cari kolom
                if (divisiCell.includes(searchValue) || janjangCell.includes(searchValue) || tonaseCell.includes(searchValue) || BJRCell.includes(searchValue)) {
                    row.style.display = '';
                }
            });
        });

        // Inisialisasi tampilan baris saat halaman dimuat
        displayRows();
    });
</script>





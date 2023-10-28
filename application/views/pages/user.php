<div class="container-fluid">

    <!-- 1. Page Heading -->

    <!-- 2. membuat tampilan alert di tengah dan paling atas jika ingin membuat alert di bawah letakkan source code di bawah -->
    <div class="row mt-5 d-sm-flex justify-content-end align-items-center">
        <div class="col-6">
        <?php if ($this->session->flashdata('primary')) : ?>
            <div class="alert alert-primary" role="alert" style="text-align: center;">
                <?= $this->session->flashdata('primary') ?>
            </div>
            <?php endif ?>
        </div>
    </div>

    <!-- 3. untuk membuat data user -->
	<div>
        <h1 class="h3 mb-3 font-weight-bold" style="color: black">Data User</h1>
    </div>

    <!-- 4. untuk membuat card -->
    <div class="row">
    <div class="card col-sm-12">
            
    <!-- 5. untuk membuat button tambah data dimana berada pada card header -->
    <div class="mt-3 mb-0">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <a href="<?= base_url('admin/user/add'); ?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="color: black; background-color: lightcyan">Tambah Data</a>
            </div>
        </div>

    <!-- 6. untuk membuat konten bagian isi card body dan tag hr membuat garis lurus   -->
    <hr class="" style="color: black; border-style: solid; border-width: 1px;">
        <div class="">
		<div class="row">

    <!-- 7. Teks "Search:" dan kotak pencarian -->
        <div class="col-md-6 col-12 d-flex align-items-center">
            <span class="h6 mb-0 font-weight-bold" style="margin-right: 10px; color: black;">Search:</span>
            <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Cari pengguna" name="keyword" autocomplete="off" autofocus style="color: black; background-color: lightcyan; height: 35px;">
        </div>

    <!-- 8. Penambahan elemen Show dan Entries -->
    <div class="col-md-6 col-12 d-flex align-items-center justify-content-end">
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

    <!-- 9. untuk menambahkan tabel data  -->
    <div class="table-responsive p-2">
        <table id="yourTableID" class="table table-bordered table table-striped table-hover">
            <thead style="font-size: 13px; font-weight: bold; color: black">
            <tr>
                <th>#<i class="fas fa-sort"></i></th>
                <th>Nama <i class="fas fa-sort"></i></th>
                <th>Email <i class="fas fa-sort"></i></th>
                <th>Aktif <i class="fas fa-sort"></i></th>
                <th colspan="3" style="text-align: center;">Aksi</th>
            </tr>

    <!--  10. untuk membuat isi dari data tabel di database-->
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $datas) : ?>
                <tr style="font-size: 13px; color: black">
                <td><?= $i ?></td>
                <td><?= $datas->nama ?></td>
                <td><?= $datas->email ?></td>
                <td><?= $datas->aktif ?></td>


    <!--11. untuk membuat aksi di tabel user  -->
                <td>
                    <a href="<?= base_url('admin/user/detail/' . $datas->id_user) ?>" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i> Detail</a>
                </td>
                <td onclick="javascript: return confirm('anda yakin edit')">
                    <a href="<?= base_url('admin/user/edit/' . $datas->email) ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                </td>
                <td>
                    <a href="<?= base_url('admin/user/delete/' . $datas->email) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin hapus')"><i class="fa fa-trash"></i> Hapus</a>
                </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>  
</div>


<script>
    // Fungsi JavaScript untuk melakukan pencarian
    document.getElementById('searchInput').addEventListener('input', function () {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        let hasResults = false; // Tambahkan variabel ini

        rows.forEach(row => {
            const nameCell = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const emailCell = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

            if (nameCell.includes(searchValue) || emailCell.includes(searchValue)) {
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
            
            // Menampilkan baris yang sesuai dengan pencarian
            rows.forEach(function (row) {
                const nameCell = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const emailCell = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                
                if (nameCell.includes(searchValue) || emailCell.includes(searchValue)) {
                    row.style.display = '';
                }
            });
        });

        // Inisialisasi tampilan baris saat halaman dimuat
        displayRows();
    });
</script>






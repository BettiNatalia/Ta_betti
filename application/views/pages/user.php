<div class="container-fluid">

    <!-- 1. Page Heading -->
    

    <!-- 2. untuk membuat warna peringatan atau alert notifikasi warna biru -->
        <?php if ($this->session->flashdata('primary')) : ?>
            <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?></div>
        <?php endif ?>

	    <div>
	        <h1 class="h3 mb-3 font-weight-bold" style="color: black">Data User</h1>
	    </div>

    <!-- 3. Penambahan elemen Show dan Entries -->
        <div class="row">
        <div class="card col-sm-12">
        <div class="card-header">
		    <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <a href="<?= base_url('admin/user/add'); ?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="color: black; background-color: lightcyan">Tambah Data</a>
            </div>
        </div>
            <div class="card-body">
			<div class="row">
                    <!-- 4. Teks "Search:" dan kotak pencarian -->
                    <div class="col-md-3 col-12 d-flex align-items-center">
                        <span class="h6 mb-0 font-weight-bold" style="margin-right: 10px; color: black;">Search:</span>
                        <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Cari pengguna" name="keyword" autocomplete="off" autofocus style="color: black; background-color: lightcyan; height: 35px;">
                    </div>
                    <div class="col-md-9 col-12 d-flex align-items-center justify-content-end">
                        <div class="dataTables_length" id="dataTable_length">
                            <label class="d-flex align-items-center">
                                Show 
                                <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                Entries
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-2">
                    <table class="table table-bordered table table-striped table-hover">
                        <thead style="font-size: 13px; font-weight: bold; color: black">
                            <tr>
                                <th>#<i class="fas fa-sort"></i></th>
                               
                                <th>Nama <i class="fas fa-sort"></i></th>
                                <th>Email <i class="fas fa-sort"></i></th>
                                <th>Aktif <i class="fas fa-sort"></i></th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data as $datas) : ?>
                                <tr style="font-size: 13px; color: black">
                                    <td><?= $i ?></td>
                                    
                                    <td><?= $datas->nama ?></td>
                                    <td><?= $datas->email ?></td>
                                    <td><?= $datas->aktif ?></td>
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

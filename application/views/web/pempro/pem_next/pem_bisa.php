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
        <h1 class="h3 mb-3 font-weight-bold" style="color: black">Data Pemasaran Produksi</h1>
    </div>

    

<!-- 3. untuk membuat card -->
    <div class="row">
        <div class="card col-sm-12">


<!-- 4. untuk membuat button tambah data dimana berada pada card header & untuk membuat print di ujung tambahkan beetwen &justify-content untuk membuat horizontal -->
            <div class="mt-3 mb-0 d-flex justify-content-between">
                <a href="<?= base_url();?>web/data_pem/pem/add_pem_pro/<?=$id;?>" class=" btn btn-sm shadow-sm" style="color: black; background-color: lightcyan">Tambah Data</a>
                <a href="<?php echo base_url('web/data_pem/pem/print'); ?>" class="btn btn-info btn-sm" style="color: black;"> <i class="fa fa-print"></i>Print</a>
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
							
                            <th rowspan="2" class="text-center" style="color: black;">Jenis Produksi</th>
							<th rowspan="2" class="text-center" style="color: black;">Delivery</th>
                            <th colspan="3" class="text-center" style="color: black;">Delivery Order</th>
                            
                            <th rowspan="2" class="text-center" style="color: black;">Bulan Lalu</th>
                            <th colspan="2"  class="text-center" style="color: black;">Pemasaran</th>
                            
                            <th rowspan="2" class="text-center" style="color: black;">Sisa Do</th>
                            <th rowspan="2" class="text-center" style="color: black;">Pemasaran S/D Kemarin</th>
							<th rowspan="2" class="text-center" style=" color: black;">Aksi</th>
                    	</tr>

                        <tr>
                        <th class="text-center" style="color: black;">VIA</th>
                            <th class="text-center" style="color: black;">Do_No</th>
                            <th class="text-center" style="color: black;">Quantity</th>
                            <th class="text-center" style="color: black;">HI</th>
                            <th class="text-center" style="color: black;">S/D HI</th>
                        </tr>
                    </thead>
<!-- 7. untuk membuat isi tabel atau tbody -->
                    <tbody>
                    <?php
// 13. menginisalisasi total dengan 3 elemen yaitu janjang, tonase, dan bjr
                            $total = array(
                                'bulan_lalu' => 0,
                                'hi' => 0,
                                'sd_hi' => 0,
                                'sisa_do' => 0,
                                'pemasaran_kemarin' => 0,
                                
                            );
                            ?>
<!-- 8. inisalisasi dulu i-1 untuk membuat data tabel di simbol # -->
							
                    	    <?php foreach ($data as $datas) : ?>
<!-- 9. mulai isi data  -->
                    	<tr style="font-size: 13px; color: black">
													
                    							<td><?= $datas->jenis_produksi ?></td>
                                                <td><?= $datas->delivery ?></td>
                                                <td><?= $datas->via ?></td>
                                                <td><?= $datas->do_no ?></td>
                                                <td><?= $datas->quantity ?></td>
                                                <td><?= $datas->bulan_lalu ?></td>
                                                <td><?= $datas->hi ?></td>
                                                <td><?= $datas->sd_hi ?></td>
                                                <td><?= $datas->sisa_do ?></td>
                                                <td><?= $datas->pemasaran_kemarin ?></td>
<!-- 10. untuk membuat isi kolom aksi dengan lebar 70px -->
                                    <td style="width: 90px;">
                                    <a class=" btn-sm bg-gradient-primary" onclick="return confirm('Anda Yakin Ingin Edit')" href="<?= base_url();?>web/data_pem/pem/edit_pem_pro/<?=$datas->id_pem;?>/<?=$datas->id_tanggal;?>" class="btn btn-info btn-sm"><i class="far fa-edit" style="color: #fcfcfd;"></i></a>
                                    <a class="btn-sm bg-gradient-danger" onclick="return confirm('Anda Yakin Ingin Hapus')" href="<?= base_url();?>web/data_pem/pem/delete_pem_pro/<?=$datas->id_pem;?>/<?=$datas->id_tanggal;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color: #f1f2f4;"></i></a>
                                    </td>
                    </tr>
<!-- 8. membuat akhir dari endforeach -->
                            <?php
                                $total['bulan_lalu'] += $datas->bulan_lalu;
                                $total['hi'] += $datas->hi;
                                $total['sd_hi'] += $datas->sd_hi;
                                $total['sisa_do'] += $datas->sisa_do;
                                $total['pemasaran_kemarin'] += $datas->pemasaran_kemarin;
                                
                            ?>
                <?php endforeach ?>
                <tr style="color: black;">
                                    <td><strong>Total</strong></td>
                                    <td><strong></strong></td>
                                    <td><strong></strong></td>
                                    <td><strong></strong></td>
                                    <td><strong></strong></td>
                                    <td><strong><?= $total['bulan_lalu'] ?></strong></td>
                                    <td><strong><?= $total['hi'] ?></strong></td>
                                    <td><strong><?= $total['sd_hi'] ?></strong></td>
                                    <td><strong><?= $total['sisa_do'] ?></strong></td>
                                    <td><strong><?= $total['pemasaran_kemarin'] ?></strong></td>            
                </tr>
            </tbody>
        </table>
        </div>
</div>
</div>
</div>
</div>

<div class="row container-fluid">
                    <div class="col-sm-3 mt-3 mb-3">
                        <a href="<?= base_url('web/data_pem/pem') ?>" class="btn btn-primary btn-sm"> <i class="fas fa-sort-amount-up fa-rotate-270"></i>Kembali</a>
                    </div>
        </div>




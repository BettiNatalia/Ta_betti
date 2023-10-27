<div class="container-fluid">
    <section class="content">
        <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a class="nav-link font-weight-bold" style="color: black;" href="<?= base_url() ?>dashboard">
    <span class="h3 font-weight-bold">Dashboard</span></a>
    </div>

    <div class="card shadow">
        <div class="card-header" style="color: black">Detail Data User</div>
        <div class="card-body">
            <div class="row">
            <div class="col-sm-3">
                    <a href="<?= base_url('admin/user') ?>" class="btn btn-primary btn-sm">Kembali</a>
                </div>
                
                <div class="col-sm-6">
        <table class="table">
            <tr>
                <th style="color: black">Password :</th>
                <td style="color: black"><?php echo $detail->password ?></td>
            </tr>
            <tr>
                <th style="color: black"> Telepon :</th>
                <td style="color: black"><?php echo $detail->telepon ?></td>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="100">
                </td>
            </tr>
        </table>
    </section>
</div>
</div>
</div>
</div>
</div>
</div>
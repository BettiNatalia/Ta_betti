<div class="container-fluid">
    <section class="content">
        <!-- Page Heading -->
    

    <div class="card shadow">
        <div class="card-header" style="color: black">Detail Data User</div>
        <div class="card-body">
            <div class="row">
            <div class="col-2">
                    
                    
                </div>
                
                <div class="col-sm-6">
        <table class="table">
            <tr>
                <th style="color: black">Nama :</th>
                <td style="color: black"><?php echo $detail->nama ?></td>
            </tr>
            <tr>
                <th style="color: black"> Telepon :</th>
                <td style="color: black"><?php echo $detail->telepon ?></td>
            </tr>
            <tr>
                <th style="color: black"> Email :</th>
                <td style="color: black"><?php echo $detail->email ?></td>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="100">
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-12 mt-3 mb-0 d-flex align-items-center justify-content-end">
            <a href="<?= base_url('admin/user') ?>" class="btn btn-secondary btn-sm">Close</a>
            </div>
            </div>
    </section>
</div>
</div>
</div>
</div>
</div>
</div>
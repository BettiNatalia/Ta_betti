<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: paleturquoise">

<!-- Page Heading -->
        
                
    <!-- untuk mengganti foto profil -->    
   <center>
    <div>
        <img class="img-profile rounded-circle mt-4 mb-2" src="<?= $base_url ?>foto/1a.jpg"  style="width: 80px; height: 60px;">
        </div>
        </center>
        
        
        <center>
        <p>   
        <span style="color : black; text-align: center;">
                    <?= $this->session->userdata('username') ?>
                    </p> 
                </span>
                </center>
                
            

    <!-- Dropdown - User Information -->
       

    

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" style="color: black; font-weight: bold" href="<?= base_url() ?>dashboard">
        <i class="fa-sharp fa-solid fa-cube fa-lg" style="color: black;"></i>
            <span>Dashboard </span>
        </a>
    </li>

    <!-- Divider -->
    

    <!-- Heading -->

     <!-- Menu 1 dan Submenu -->
     <hr class="sidebar-divider">
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenuData" aria-expanded="true" aria-controls="submenuData">
        <i class="fa-regular fa-circle-dot" style="color: black;"></i>
            <span style="color: black; font-weight: bold">  Data Master</span>
        </a>
        <div id="submenuData" class="collapse show"  aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-black py-2 collapse-inner rounded" style="color: black">
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>admin/user"><i class="fa-regular fa-circle fa-2xs"></i> Data User</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_role/role"><i class="fa-regular fa-circle fa-2xs"></i> Data Role</a>
                <!-- Submenu Item: Produksi CPO -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_divisi/divisi"><i class="fa-regular fa-circle fa-2xs"></i> Data TBS Divisi</a>
                <!-- Submenu Item: Produksi Kernel -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_suplier/suplier"><i class="fa-regular fa-circle fa-2xs"></i> Data Supplier TBS</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_delicpo/delicpo"><i class="fa-regular fa-circle fa-2xs"></i> Data Delivery CPO</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_delikernel/delikernel"><i class="fa-regular fa-circle fa-2xs"></i> Data Delivery Kernel</a>
            </div>
        </div>
    </li>


    <!-- Menu 2 dan Submenu -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenuData" aria-expanded="true" aria-controls="submenuData" style="color: black;">
        <i class="fa-regular fa-circle-dot" style="color: black;"></i>
            <span style="color: black; font-weight: bold">Data TBS</span>
        </a>
        <div id="submenuData" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-paleturquoise py-2 collapse-inner rounded" style="color: black">
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_inti/inti">Data TBS Inti</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_luar/luar">Data TBS Luar</a>
            </div>
        </div>
    </li>


    <!-- Menu 2 dan Submenu -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenuData" aria-expanded="true" aria-controls="submenuData">
        <i class="fa-regular fa-circle-dot" style="color: black;"></i>
            <span style="color: black; font-weight: bold">Data Pemasaran</span>
        </a>
        <div id="submenuData" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-paleturquoise py-2 collapse-inner rounded" style="color: black">
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>admin/user">Data Pemasaran CPO</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_luar/luar">Data Pemasaran Kernel</a>
            </div>
        </div>
    </li>


    


    <!-- membuat menu ke 2 data olah tbs -->
    <hr class="sidebar-divider">
    <li class="nav-item">
    <a class="nav-link" href="<?= base_url() ?>web/data_olah/olah">
    <i class="fa-sharp fa-solid fa-cube fa-lg" style="color: black;"></i>
    <span style="color: black; font-weight: bold">Data Olah TBS</span>
    </a>
    </li>

    <!-- membuat menu ke 3 data Perhitungan produksi -->
    <hr class="sidebar-divider">
    <li class="nav-item">
    <a class="nav-link" href="<?= base_url() ?>web/data_olah/olah">
    <i class="fa-sharp fa-solid fa-cube fa-lg" style="color: black;"></i>
    <span style="color: black; font-weight: bold">Data Perhitungan Produksi</span>
    </a>
    </li>


    <!-- membuat menu ke 6 menu laporan -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
        <i class="fa-regular fa-circle-dot" style="color: black;"></i>
            <span style="color: black; font-weight: bold">Laporan</span>
        </a>
        <div id="laporan" class="collapse show" aria-labelledby="headingLaporan" data-parent="#accordionSidebar">
            <div class="bg-paleturquoise py-2 collapse-inner" style="border-radius: 10px; padding: 0px">
                <!-- Submenu Item: Laporan data tbs -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/cpo">Laporan Data TBS</a>
                <!-- Submenu Item: Laporan data olah -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel">Laporan Data Olah TBS</a>
                <!-- Submenu Item: Laporan produksi -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel">Laporan Data Produksi</a>
                <!-- Submenu Item: Laporan pemasaran produksi -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel">Laporan Pemasaran 
                <br>Produksi</a>
                <!-- Submenu Item: Laporan perhitungan produksi -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel">Laporan Perhitungan
                <br>Produksi</a>
                <!-- Submenu Item: Laporan harian produksi -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel">Laporan Harian Produksi</a>
                
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0 bg-info" id="sidebarToggle">
        <!-- Ganti ikon panah dengan ikon yang sesuai -->
    </button>
</div>



    

</ul>
<!-- End of Sidebar -->
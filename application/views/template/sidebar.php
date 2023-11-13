<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: paleturquoise">

    <!-- Page Heading -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <img class="mt-2" src="<?= $base_url ?>image/12.png" style="width: 60px; height: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3" style="color:black">PT Johan Sentosa</div>
            </a>
    <!-- <center>
        <div>
            <img class="img-profile rounded-circle mt-4 mb-2" src="<?= $base_url ?>foto/1a.jpg" style="width: 80px; height: 60px;">
        </div>
    </center> -->

    <!-- <center>
        <p>
            <span style="color: black; text-align: center;">
                <?= $this->session->userdata('username') ?>
            </span>
        </p>
    </center> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" style="color: black; font-weight: bold" href="<?= base_url() ?>dashboard">
        <i class="fas fa-tachometer-alt" style="color: black;"></i>
            <span>Dashboard </span>
        </a>
    </li>

    <!-- Divider -->

    <!-- Heading -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#submenuData1" aria-expanded="true" aria-controls="submenuData1">
        <i class="fas fa-file" style="color: black;"></i>
            <span style="color: black; font-weight: bold">Data Master</span>
        </a>
        <div id="submenuData1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-black py-2 collapse-inner rounded" style="color: black">
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>admin/user">
                <i class="fa-regular fa-circle-dot" style="color: black;"></i> Data User
                </a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_role/role"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Role</a>
                <!-- Submenu Item: Produksi CPO -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_divisi/divisi"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data TBS Divisi</a>
                <!-- Submenu Item: Produksi Kernel -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_suplier/suplier"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Supplier TBS</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_delicpo/delicpo"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Delivery CPO</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_delikernel/delikernel"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Delivery Kernel</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_shift/shift"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Shift</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_tankicpo/tankicpo"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Tanki CPO</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_tankikernel/tankikernel"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Tanki Kernel</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_suhu/suhu"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data Suhu</a>
            </div>
        </div>
    </li>

    <!-- Menu 2 dan Submenu -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#submenuData2" aria-expanded="true" aria-controls="submenuData2">
        <i class="fa-sharp fa-solid fa-cube fa-lg" style="color: black;"></i>
            <span style="color: black; font-weight: bold">Data TBS</span>
        </a>
        <div id="submenuData2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-paleturquoise py-2 collapse-inner rounded" style="color: black">
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_inti/inti"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data TBS Inti</a>
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_luar/luar"><i class="fa-regular fa-circle-dot" style="color: black;"></i> Data TBS Luar</a>
            </div>
        </div>
    </li>


    <!-- membuat menu ke 2 data olah tbs -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>web/data_pem/pem">
            <i class="fa-sharp fa-solid fa-cube fa-lg" style="color: black;"></i>
            <span style="color: black; font-weight: bold">Pemasaran Produksi</span>
        </a>
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
        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
        <i class="fa-sharp fa-solid fa-cube fa-lg" style="color: black;"></i>
            <span style="color: black; font-weight: bold">Laporan</span>
        </a>
        <div id="laporan" class="collapse" aria-labelledby="headingLaporan" data-parent="#accordionSidebar">
            <div class="bg-paleturquoise py-2 collapse-inner" style="border-radius: 10px; padding: 0px">
                <!-- Submenu Item: Laporan data tbs -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/cpo"><i class="fa-regular fa-circle fa-2xs"></i> Laporan Data TBS</a>
                <!-- Submenu Item: Laporan data olah -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel"><i class="fa-regular fa-circle fa-2xs"></i> Laporan Data Olah TBS</a>
                <!-- Submenu Item: Laporan produksi -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel"><i class="fa-regular fa-circle fa-2xs"></i> Laporan Data Produksi</a>
                <!-- Submenu Item: Laporan pemasaran produksi -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel"><i class="fa-regular fa-circle fa-2xs"></i> Laporan Pemasaran <br>Produksi</a>
                <!-- Submenu Item: Laporan perhitungan produksi -->
                <a class="collapse-item bg-paleturquoise" style="color: black" href="<?= base_url() ?>web/data_produksi/kernel"><i class="fa-regular fa-circle fa-2xs"></i> Laporan Perhitungan <br>Produksi</a>
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


<script>
  // Fungsi untuk menangani klik pada menu dengan submenu
  function toggleSubMenu(submenuId, iconId) {
    var submenu = document.getElementById(submenuId);
    var icon = document.getElementById(iconId);

    // Periksa apakah submenu saat ini terlihat
    if (submenu.style.display === "block") {
      submenu.style.display = "none";
      icon.classList.remove("fa-chevron-down");
      icon.classList.add("fa-chevron-right");
    } else {
      submenu.style.display = "block";
      icon.classList.remove("fa-chevron-right");
      icon.classList.add("fa-chevron-down");
    }
  }

  // Menambahkan event listener ke setiap menu dengan submenu
  document.querySelectorAll('.nav-link[data-toggle="collapse"]').forEach(function (element) {
    element.addEventListener("click", function () {
      var submenuId = element.getAttribute("data-target").substring(1); // Hilangkan tanda '#' di depan ID submenu
      var iconId = element.querySelector("span[id^='icon']").id; // ID ikon panah
      toggleSubMenu(submenuId, iconId);
    });
  });
</script>

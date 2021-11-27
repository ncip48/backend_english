<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-home"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Administrator</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <?php if ($menu == 'barang') : ?>
        <li class="nav-item active">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUU" aria-expanded="true" aria-controls="collapseUU">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Data Barang </span>
        </a>
        <div id="collapseUU" class="collapse" aria-labelledby="headingUU" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilih Menu:</h6>
                <a class="collapse-item" href="<?= base_url('admin/konseling'); ?>">Konseling</a>
                <a class="collapse-item" href="<?= base_url('admin/perizinan'); ?>">Perizinan</a>
                <a class="collapse-item" href="<?= base_url('admin/kelas'); ?>">Daftar Kelas</a>
                <a class="collapse-item" href="<?= base_url('admin/daftar_absen'); ?>">Presensi</a>
                <a class="collapse-item" href="<?= base_url('admin/pelanggaran'); ?>">Pelanggaran</a>
            </div>
        </div>
        </li> -->

    <?php if ($menu == 'regular') : ?>
        <li class="nav-item active">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link" href="<?= base_url('admin/regular'); ?>">
            <i class="fas fa-fw fa-font"></i>
            <span>Regular Verb </span>
        </a>
        </li>

        <?php if ($menu == 'irregular') : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link" href="<?= base_url('admin/irregular'); ?>">
                <i class="fas fa-fw fa-remove-format"></i>
                <span>Irregular Verb </span>
            </a>
            </li>

            <?php if ($menu == 'user') : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url('admin/user'); ?>">
                    <i class="fas fa-fw fa-user-friends"></i>
                    <span>Users </span>
                </a>
                </li>



                <!-- <?php if ($menu == 'absen') : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities12" aria-expanded="true" aria-controls="collapseUtilities12">
                        <i class="fas fa-fw fa-qrcode"></i>
                        <span>Absensi Pegawai</span>
                    </a>
                    <div id="collapseUtilities12" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pilih Menu:</h6>
                            <a class="collapse-item" href="<?= base_url('admin/data_absensi'); ?>">Data Absensi</a>
                            <a class="collapse-item" href="<?= base_url('admin/absen_pegawai'); ?>">Absensi Pegawai</a>
                        </div>
                    </div>
                    </li> -->

                <!-- Nav Item - Utilities Collapse Menu -->
                <!-- <?php if ($menu == 'gaji') : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
                            <i class="fas fa-fw fa-money-bill"></i>
                            <span>Penggajian</span>
                        </a>
                        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Pilih Menu:</h6>
                                <a class="collapse-item" href="<?= base_url('admin/penggajian'); ?>">Penggajian</a>
                                <hr class="sidebar-divider">
                                <h6 class="collapse-header">Data Potongan :</h6>
                                <a class="collapse-item" href="<?= base_url('admin/data_cicilan'); ?>">Cicilan</a>
                            </div>
                        </div>
                        </li> -->

                <!-- Nav Item - Utilities Collapse Menu -->
                <!-- <?php if ($menu == 'menu-4') : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fas fa-fw fa-cogs"></i>
                                <span>Master Data</span>
                            </a>
                            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Pilih Menu:</h6>
                                    <a class="collapse-item" href="<?= base_url('admin/data_pendidikan'); ?>">Data Pendidikan</a>
                                    <a class="collapse-item" href="<?= base_url('admin/data_lemari'); ?>">Data Lemari</a>
                                    <a class="collapse-item" href="<?= base_url('admin/data_pelanggaran'); ?>">Data Pelanggaran</a>
                                    <a class="collapse-item" href="<?= base_url('admin/data_perizinan'); ?>">Data Perizinan</a>
                                    <a class="collapse-item" href="<?= base_url('admin/data_divisi'); ?>">Data Divisi</a>
                                </div>
                            </div>
                            </li> -->
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Pengaturan
                </div>


                <?php if ($menu == 'menu-5') : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?= base_url('admin/setting'); ?>">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Setting Akun</span>
                    </a>
                    </li>

                    <!-- Nav Item - Tables -->
                    <li class="nav-item">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>Keluar</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

</ul>
<!-- End of Sidebar -->
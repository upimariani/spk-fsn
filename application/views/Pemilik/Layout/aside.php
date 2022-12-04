<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Pemilik <b class="font-black">Mebeul Sinar Indah</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <!-- <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cDashboard') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Pemilik/cDashboard') ?>">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul> -->
        <p class="menu-label">Data</p>
        <ul class="menu-list">
            <li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cUser') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Pemilik/cUser') ?>">
                    <span class="icon"><i class="mdi mdi-archive"></i></span>
                    <span class="menu-item-label">Data User</span>
                </a>
            </li>

        </ul>
        <p class="menu-label">Laporan</p>
        <ul class="menu-list">
            <li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLaporanBMasuk') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Pemilik/cLaporanBMasuk') ?>">
                    <span class="icon"><i class="mdi mdi-book"></i></span>
                    <span class="menu-item-label">Laporan Barang Masuk</span>
                </a>
            </li>
            <li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLaporanBKeluar') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Pemilik/cLaporanBKeluar') ?>">
                    <span class="icon"><i class="mdi mdi-book"></i></span>
                    <span class="menu-item-label">Laporan Barang Keluar</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Analisis</p>
        <ul class="menu-list">

            <li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLaporanAnalisis') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Pemilik/cLaporanAnalisis') ?>">
                    <span class="icon"><i class="mdi mdi-book-open"></i></span>
                    <span class="menu-item-label">Analisis Fast, Slow, Non Moving</span>
                </a>
            </li>
        </ul>
        <ul class="menu-list">

            <li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cGrafikAnalisis') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Pemilik/cGrafikAnalisis') ?>">
                    <span class="icon"><i class="mdi mdi-book-open"></i></span>
                    <span class="menu-item-label">Grafik Fast, Slow, Non Moving</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">LogOut</p>
        <ul class="menu-list">
            <li>
                <a href="<?= base_url('login/logout') ?>">
                    <span class="icon"><i class="mdi mdi-logout"></i></span>
                    <span class="menu-item-label">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
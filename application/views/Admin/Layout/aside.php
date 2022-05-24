<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Admin <b class="font-black">Mebeul Sinar Indah</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Admin/cDashboard') ?>">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Data</p>
        <ul class="menu-list">
            <li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProduk') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Admin/cProduk') ?>">
                    <span class="icon"><i class="mdi mdi-archive"></i></span>
                    <span class="menu-item-label">Data Produk</span>
                </a>
            </li>
            <li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProdukMasuk') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Admin/cProdukMasuk') ?>">
                    <span class="icon"><i class="mdi mdi-format-vertical-align-bottom"></i></span>
                    <span class="menu-item-label">Produk Masuk</span>
                </a>
            </li>
            <li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProdukKeluar') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Admin/cProdukKeluar') ?>">
                    <span class="icon"><i class="mdi mdi-arrow-expand-down"></i></span>
                    <span class="menu-item-label">Produk Keluar</span>
                </a>
            </li>
            <li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cHitungFSN') {
                            echo 'active';
                        }  ?>">
                <a href="<?= base_url('Admin/cHitungFSN') ?>">
                    <span class="icon"><i class="mdi mdi-receipt"></i></span>
                    <span class="menu-item-label">Hitung Status Produk</span>
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
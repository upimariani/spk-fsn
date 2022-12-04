<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Dashboard</li>
        </ul>

    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Selamat datang, Admin!
        </h1>
    </div>
</section>

<section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Produk
                        </h3>
                        <h1>
                            <?= $jml['produk']->jml_produk ?>
                        </h1>
                    </div>
                    <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Produk Masuk
                        </h3>
                        <h1>
                            <?= $jml['produk_masuk']->jml_masuk ?>
                        </h1>
                    </div>
                    <span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Produk Keluar
                        </h3>
                        <h1>
                            <?= $jml['produk_keluar']->jml_keluar ?>
                        </h1>
                    </div>
                    <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Produk Keluar</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Create New Exit Product
        </h1>
        <a href="<?= base_url('Admin/cProdukKeluar') ?>" class="button light">Kembali</a>
    </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-ballot"></i></span>
                Masukkan Data Produk Keluar
            </p>
        </header>
        <div class="card-content">
            <form action="<?= base_url('Admin/cProdukKeluar/create') ?>" method="POST">
                <input type="hidden" class="produk" name="produk">
                <div class="field">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">Produk</label>
                            <div class="control">
                                <div class="select">
                                    <select name="produk_masuk" id="produk-masuk">
                                        <option value="">Choose Product...</option>
                                        <?php
                                        foreach ($produk_masuk as $key => $value) {
                                        ?>
                                            <option data-produk="<?= $value->id_produk ?>" data-stok="<?= $value->qty_masuk ?>" data-tgl="<?= $value->tgl_masuk ?>" value="<?= $value->id_prod_masuk ?>"><?= $value->nama_produk ?> | Tanggal Masuk : <?= $value->tgl_masuk ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <?= form_error('produk_masuk', '<p class="help">', '</p>') ?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input tgl" name="tgl_masuk" type="text" placeholder="Enter Date">
                            </div>
                            <?= form_error('tgl_masuk', '<p class="help">', '</p>') ?>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Quantity</label>
                    <div class="control">
                        <input class="input qty" name="qty_masuk" type="text" placeholder="Enter Quantity">
                    </div>
                    <?= form_error('qty_masuk', '<p class="help">', '</p>') ?>
                </div>
                <hr>
                <div class="field">
                    <label class="label">Tanggal Keluar</label>

                    <div class="control">
                        <input class="input" id="datepicker" name="tgl_keluar" type="text" placeholder="Masukkan Tanggal Keluar">
                    </div>
                    <?= form_error('tgl_keluar', '<p class="help">', '</p>') ?>
                </div>
                <div class="field">
                    <label class="label">Quantity Keluar</label>

                    <div class="control">
                        <input class="input" type="number" name="qty_keluar" placeholder="Masukkan Quantity Keluar">
                    </div>
                    <?= form_error('qty_keluar', '<p class="help">', '</p>') ?>
                </div>
                <hr>
                <div class="field grouped">
                    <div class="control">
                        <button type="submit" class="button green">
                            Save
                        </button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button red">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
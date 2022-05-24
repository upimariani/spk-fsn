<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Produk Masuk</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Create New Enter Product
        </h1>
        <a href="<?= base_url('Admin/cProdukMasuk') ?>" class="button light">Kembali</a>
    </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-ballot"></i></span>
                Masukkan Data Produk Masuk
            </p>
        </header>
        <div class="card-content">
            <form action="<?= base_url('Admin/cProdukMasuk/create') ?>" method="POST">
                <div class="field">
                    <label class="label">Produk</label>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <div class="select">
                                    <select name="produk">
                                        <option value="">---Pilih Produk---</option>
                                        <?php
                                        foreach ($produk as $key => $value) {
                                        ?>
                                            <option value="<?= $value->id_produk ?>"><?= $value->nama_produk ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?= form_error('produk', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
                        <div class="field">
                            <div class="control icons-left icons-right">
                                <input class="input" type="number" name="qty" placeholder="Quantity">
                                <span class="icon left"><i class="mdi mdi-sort-numeric"></i></span>
                            </div>
                            <?= form_error('qty', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
                        <div class="field">
                            <div class="control icons-left icons-right">
                                <input class="input" type="text" name="tgl" id="datepicker">
                                <span class="icon left"><i class="mdi mdi-calendar"></i></span>
                            </div>
                            <?= form_error('tgl', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="field grouped">
                    <div class="control">
                        <button type="submit" class="button green">
                            Submit
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
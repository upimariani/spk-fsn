<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Produk</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Update Data Product
        </h1>
        <button class="button light">Button</button>
    </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-ballot"></i></span>
                Masukkan Data Produk
            </p>
        </header>
        <div class="card-content">
            <?php echo form_open_multipart('Admin/cProduk/update/' . $produk->id_produk);
            ?>
            <div class="field">
                <label class="label">From</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" value="<?= $produk->nama_produk ?>" name="nama" type="text" placeholder="Masukkan Nama Produk">
                            <span class="icon left"><i class="mdi mdi-page-layout-sidebar-right"></i></span>
                        </div>
                        <?= form_error('nama', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" name="deskripsi" value="<?= $produk->deskripsi ?>" type="text" placeholder="Masukkan Deskripsi Produk">
                            <span class="icon left"><i class="mdi mdi-comment-multiple-outline"></i></span>
                        </div>
                        <?= form_error('deskripsi', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" name="harga" value="<?= $produk->harga ?>" type="number" placeholder="Masukkan Harga Produk">
                            <span class="icon left"><i class="mdi mdi-tag-multiple"></i></span>
                        </div>
                        <?= form_error('harga', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <img style="width: 150px;" src="<?= base_url('asset/foto-produk/' . $produk->gambar) ?>">
                            <input class="input" name="gambar" type="file" placeholder="Name">
                            <span class="icon left"><i class="mdi mdi-camera"></i></span>
                        </div>
                    </div>

                </div>
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
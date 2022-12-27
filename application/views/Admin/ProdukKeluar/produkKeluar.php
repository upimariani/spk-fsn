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
            Informasi Produk Keluar
        </h1>
        <a href="<?= base_url('Admin/cProdukKeluar/create') ?>" class="button light">Create</a>
    </div>
</section>

<section class="section main-section">
    <?php
    if ($this->session->userdata('success')) {
    ?>
        <div class="notification blue">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
                <div>
                    <span class="icon"><i class="mdi mdi-buffer"></i></span>
                    <b><?= $this->session->userdata('success') ?></b>
                </div>
                <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                Produk Keluar Mebeul Sinar Indah
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th class="checkbox-cell">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </th>
                        <th class="image-cell"></th>
                        <th>Nama Produk</th>
                        <th>Tanggal Produk Masuk</th>
                        <th>Tanggal Produk Keluar</th>
                        <th>Quantity Produk Keluar</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($produk_keluar as $key => $value) {
                    ?>

                        <tr>
                            <td class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>" class="rounded-full">
                                </div>
                            </td>
                            <td data-label="Name"><?= $value->nama_produk ?></td>
                            <td data-label="Company"><?= $value->tgl_masuk ?></td>
                            <td data-label="Company"><?= $value->tgl_keluar ?></td>
                            <td data-label="City"><?= $value->qty_keluar ?></td>

                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button green --jb-modal" data-target="sample-modal-2<?= $value->id_prod_keluar ?>" type="button">
                                        <span class="icon">Update</span>
                                    </button>
                                    <a href="<?= base_url('Admin/cProdukKeluar/delete/' . $value->id_prod_keluar) ?>" onclick="return confirm('Are you sure?')" class="button red --jb-modal">
                                        <span class="icon">Hapus</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</section>
<div id="sample-modal" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Sample modal</p>
        </header>
        <section class="modal-card-body">
            <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
            <p>This is sample modal</p>
        </section>
        <footer class="modal-card-foot">
            <button class="button --jb-modal-close">Cancel</button>
            <button class="button red --jb-modal-close">Confirm</button>
        </footer>
    </div>
</div>

<?php
foreach ($produk_keluar as $key => $value) {
?>
    <form action="<?= base_url('Admin/cProdukKeluar/update/' . $value->id_prod_keluar) ?>" method="POST">
        <div id="sample-modal-2<?= $value->id_prod_keluar ?>" class="modal">
            <div class="modal-background --jb-modal-close"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Perbaharui data keluar</p>
                </header>
                <section class="modal-card-body">
                    <div class="card-content">
                        <input type="hidden" class="produk" name="produk">
                        <div class="field">
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Produk</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="produk_masuk" id="produk-masuk" disabled>

                                                <option><?= $value->nama_produk ?></option>

                                            </select>
                                        </div>
                                        <?= form_error('produk_masuk', '<p class="help">', '</p>') ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="field">
                            <label class="label">Tanggal Keluar</label>

                            <div class="control">
                                <input class="input" type="date" name="tgl_keluar" value="<?= $value->tgl_keluar ?>" type="text" placeholder="Masukkan Tanggal Keluar" readonly>
                            </div>
                            <?= form_error('tgl_keluar', '<p class="help">', '</p>') ?>
                        </div>
                        <div class="field">
                            <label class="label">Quantity Keluar</label>

                            <div class="control">
                                <input class="input" type="number" name="qty_keluar" value="<?= $value->qty_keluar ?>" placeholder="Masukkan Quantity Keluar">
                            </div>
                            <?= form_error('qty_keluar', '<p class="help">', '</p>') ?>
                        </div>
                        <hr>


                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button class="button --jb-modal-close">Cancel</button>
                    <button class="button blue --jb-modal-close">Confirm</button>
                </footer>
            </div>
        </div>
    </form>
<?php
}
?>
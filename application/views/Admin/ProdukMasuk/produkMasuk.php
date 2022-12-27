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
            Informasi Produk Masuk
        </h1>
        <a href="<?= base_url('Admin/cProdukMasuk/create') ?>" class="button light">Create</a>
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
                Produk Masuk Mebeul Sinar Indah
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
                        <th>Tanggal Masuk</th>
                        <th>Quantity Produk Masuk</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($produk_masuk as $key => $value) {
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
                            <td data-label="City"><?= $value->qty_masuk ?></td>

                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <!-- <button class="button green --jb-modal" data-target="sample-modal-2<?= $value->id_prod_masuk ?>" type="button">
                                        <span class="icon">Update</span>
                                    </button> -->
                                    <button class="button red --jb-modal" data-target="sample-modal<?= $value->id_prod_masuk ?>" type="button">
                                        <span class="icon">Hapus</span>
                                    </button>
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

<?php
foreach ($produk_masuk as $key => $value) {
?>
    <form action="<?= base_url('Admin/cProdukMasuk/delete/' . $value->id_prod_masuk) ?>" method="POST">
        <div id="sample-modal<?= $value->id_prod_masuk ?>" class="modal">
            <div class="modal-background --jb-modal-close"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Hapus Produk</p>
                </header>
                <section class="modal-card-body">
                    <p>Apakah Anda Yakin Menghapus Data <?= $value->nama_produk ?></p>
                </section>
                <footer class="modal-card-foot">
                    <button class="button --jb-modal-close">Cancel</button>
                    <button class="button red --jb-modal-close">Confirm</button>
                </footer>
            </div>
        </div>
    </form>
<?php
}
?>

<?php
foreach ($produk_masuk as $key => $value) {
?>
    <form action="<?= base_url('Admin/cProdukMasuk/update') ?>" method="POST">
        <div id="sample-modal-2<?= $value->id_prod_masuk ?>" class="modal">
            <div class="modal-background --jb-modal-close"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Perbaharui data produk masuk</p>
                </header>
                <section class="modal-card-body">
                    <div class="card-content">

                        <div class="field">
                            <label class="label">Produk</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <div class="select">
                                            <select name="produk">
                                                <option value="">---Pilih Produk---</option>
                                                <?php
                                                foreach ($produk as $key => $item) {
                                                ?>
                                                    <option value="<?= $item->id_produk ?>" <?php if ($value->id_produk == $item->id_produk) {
                                                                                                echo 'selected';
                                                                                            } ?>><?= $item->nama_produk ?></option>
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
                                        <input class="input" type="number" value="<?= $value->qty_masuk ?>" name="qty" placeholder="Quantity">
                                        <span class="icon left"><i class="mdi mdi-sort-numeric"></i></span>
                                    </div>
                                    <?= form_error('qty', '  <p class="text-red-600 help">', '</p>') ?>
                                </div>
                                <div class="field">
                                    <div class="control icons-left icons-right">
                                        <input class="input" type="text" value="<?= $value->tgl_masuk ?>" name="tgl" id="datepicker">
                                        <span class="icon left"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                    <?= form_error('tgl', '  <p class="text-red-600 help">', '</p>') ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button type="button" class="button --jb-modal-close">Cancel</button>
                    <button type="submit" class="button blue --jb-modal-close">Confirm</button>
                </footer>
            </div>
        </div>
    </form>
<?php
}
?>
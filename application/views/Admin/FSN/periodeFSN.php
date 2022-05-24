<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Data Produk <?= $detail['produk']->nama_produk ?></li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Informasi Penerimaan Pengeluaran Per Periode
        </h1>
        <a href="<?= base_url('Admin/cHitungFSN/hitung/' . $detail['produk']->id_produk) ?>" class="button light">Hitung</a>
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
                Informasi Status Produk PerPeriode
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
                        <th>Periode</th>
                        <th>Persamaan Awal</th>
                        <th>Penerimaan</th>
                        <th>Pengeluaraan</th>
                        <th>Persamaan Akhir</th>
                        <th>Status (Fast, Slow, Non Moving)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($detail['variabel'] as $key => $value) {
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
                            <td data-label="Company"><?= $value->periode ?></td>
                            <td data-label="City"><?= $value->pers_awal ?></td>
                            <td data-label="City"><?= $value->penerimaan ?></td>
                            <td data-label="City"><?= $value->pengeluaran ?></td>
                            <td data-label="City"><?= $value->pers_akhir ?></td>
                            <td data-label="City"><?= $value->status ?></td>

                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="table-pagination">
                <div class="flex items-center justify-between">
                    <div class="buttons">
                        <button type="button" class="button active">1</button>
                        <button type="button" class="button">2</button>
                        <button type="button" class="button">3</button>
                    </div>
                    <small>Page 1 of 3</small>
                </div>
            </div>
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

<div id="sample-modal-2" class="modal">
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
            <button class="button blue --jb-modal-close">Confirm</button>
        </footer>
    </div>
</div>
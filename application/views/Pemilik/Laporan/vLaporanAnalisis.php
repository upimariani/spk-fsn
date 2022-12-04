<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Pemilik</li>
            <li>Analisis</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Informasi Hasil Analisis
        </h1>
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
                Informasi Analisis FSN Bulan Kemarin Mebeul Sinar Indah
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
                        <th>Nama Barang</th>
                        <th>Periode</th>
                        <th>Stok Awal</th>
                        <th>Penerimaan/Pemasukkan</th>
                        <th>Pengeluaran</th>
                        <th>Stok Akhir</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($analisis as $key => $value) {
                    ?>
                        <tr>
                            <td class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>

                            <td data-label="Name"><?= $value->nama_produk ?></td>
                            <td data-label="Company"><?= $value->periode ?></td>
                            <td data-label="City"><?= $value->pers_awal ?></td>
                            <td data-label="City"><?= $value->penerimaan ?></td>
                            <td data-label="City"><?= $value->pengeluaran ?></td>
                            <td data-label="City"><?= $value->pers_akhir ?></td>
                            <td data-label="City"><?= $value->status ?></td>


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
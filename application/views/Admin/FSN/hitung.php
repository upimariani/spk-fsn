<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Calculate</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Calculate This Period
        </h1>
    </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-ballot"></i></span>
                Masukkan data periode
            </p>
        </header>
        <div class="card-content">
            <form action="<?= base_url('Admin/cHitungFSN/hitung/' . $id) ?>" method="POST">
                <div class="field">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">Periode</label>
                            <div class="control">
                                <div class="select">

                                    <select id="fsn" name="fsn">
                                        <option value="">---Pilih Periode---</option>
                                        <?php
                                        foreach ($periode as $key => $value) {
                                            $str = $value->periode;
                                            $explode = explode("-", $str);
                                            $tahun = $explode[0]; //untuk tahun
                                            $bulan = $explode[1]; //untuk bulan
                                            $tanggal = $explode[2]; //untuk tanggal
                                        ?>
                                            <option data-periode="<?= $value->periode ?>" data-produk="<?= $value->nama_produk ?>" data-pengeluaran="<?= $value->pengeluaran ?>" data-penerimaan="<?= $value->penerimaan ?>" value="<?= $value->id_variabel ?>">Bulan: <?= $bulan ?> / Tahun : <?= $tahun ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <?= form_error('fsn', ' <p class="help">', '</p>') ?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control icons-left">
                                <input class="input produk" name="produk" type="text" placeholder="Name">
                                <span class="icon left"><i class="mdi mdi-account"></i></span>
                            </div>
                        </div>
                        <?= form_error('produk', ' <p class="help">', '</p>') ?>
                    </div>
                </div>

                <hr>

                <div class="field">
                    <label class="label">Penerimaan</label>

                    <div class="control">
                        <input class="input penerimaan" name="penerimaan" type="text" placeholder="Total Penerimaan">
                    </div>
                    <?= form_error('penerimaan', ' <p class="help">', '</p>') ?>
                    <div class="field">
                        <label class="label">Pengeluaran</label>

                        <div class="control">
                            <input class="input pengeluaran" name="pengeluaraan" type="text" placeholder="Total Pengeluaran">
                        </div>
                        <?= form_error('pengeluaraan', ' <p class="help">', '</p>') ?>
                        <hr>
                        <input type="hidden" name="tgl" class="periode">
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Hitung
                                </button>
                            </div>
                            <div class="control">
                                <button type="reset" class="button red">
                                    Reset
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
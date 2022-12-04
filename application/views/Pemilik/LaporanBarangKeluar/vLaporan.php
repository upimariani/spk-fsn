<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Pemilik</li>
            <li>Laporan Barang Keluar</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Laporan
        </h1>
        <button class="button light">Button</button>
    </div>
</section>

<section class="section main-section">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    Laporan Perhari
                </p>
            </header>
            <div class="card-content">
                <?php echo form_open_multipart('Pemilik/cLaporanBKeluar/hari'); ?>
                <div class="field">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">Tanggal</label>
                            <div class="control icons-left">
                                <div class="select">
                                    <select name="tanggal">
                                        <?php
                                        $mulai = 1;
                                        for ($i = $mulai; $i < $mulai + 31; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?= form_error('nama', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
                        <div class="field">
                            <label class="label">Bulan</label>
                            <div class="control icons-left">
                                <div class="select">
                                    <select name="bulan">
                                        <?php
                                        $mulai = 1;
                                        for ($i = $mulai; $i < $mulai + 12; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?= form_error('nama', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
                        <div class="field">
                            <label class="label">Tahun</label>
                            <div class="control icons-left">
                                <div class="select">
                                    <select name="tahun">
                                        <?php
                                        $mulai = date('Y') - 1;
                                        for ($i = $mulai; $i < $mulai + 10; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?= form_error('nama', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
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
                    </div>
                </div>
                </form>
            </div>

        </div>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    Laporan Perbulan
                </p>
            </header>
            <div class="card-content">
                <?php echo form_open_multipart('Pemilik/cLaporanBKeluar/bulan'); ?>
                <div class="field">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">Bulan</label>
                            <div class="control icons-left">
                                <div class="select">
                                    <select name="bulan">
                                        <?php
                                        $mulai = 1;
                                        for ($i = $mulai; $i < $mulai + 12; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?= form_error('nama', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
                        <div class="field">
                            <label class="label">Tahun</label>
                            <div class="control icons-left">
                                <div class="select">
                                    <select name="tahun">
                                        <?php
                                        $mulai = date('Y') - 1;
                                        for ($i = $mulai; $i < $mulai + 10; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?= form_error('nama', '  <p class="text-red-600 help">', '</p>') ?>
                        </div>
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
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
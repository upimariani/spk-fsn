<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Pemilik</li>
            <li>User</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Informasi User
        </h1>
        <a href="<?= base_url('Pemilik/cUser/createUser') ?>" class="button light">Create</a>
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
                User Akun Mebeul Sinar Indah
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
                        <th>Nama User</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level User</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($user as $key => $value) {
                    ?>
                        <tr>
                            <td class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>

                            <td data-label="Name"><?= $value->nama_user ?></td>
                            <td data-label="Company"><?= $value->alamat ?></td>
                            <td data-label="City"><?= $value->no_hp ?></td>
                            <td data-label="City"><?= $value->username ?></td>
                            <td data-label="City"><?= $value->password ?></td>
                            <td data-label="City"><?php if ($value->level_user == '1') {
                                                        echo 'Admin';
                                                    } else {
                                                        echo 'Pemilik';
                                                    }  ?></td>

                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2<?= $value->id_user ?>" type="button">
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

        </div>
    </div>
</section>
<?php
foreach ($user as $key => $value) {
?>
    <?php echo form_open_multipart('Pemilik/cUser/update/' . $value->id_user); ?>
    <div id="sample-modal-2<?= $value->id_user ?>" class="modal">
        <div class="modal-background --jb-modal-close"></div>

        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Update Data User</p>
            </header>
            <section class="modal-card-body">

                <div class="field">
                    <label class="label">From Update Data User</label>
                    <div class="field-body">
                        <div class="field">
                            <div class="control icons-left">
                                <input class="input" value="<?= $value->nama_user ?>" name="nama" type="text" placeholder="Masukkan Nama User" required>
                                <span class="icon left"><i class="mdi mdi-page-layout-sidebar-right"></i></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control icons-left">
                                <input class="input" name="alamat" value="<?= $value->alamat ?>" type="text" placeholder="Masukkan Alamat User" required>
                                <span class="icon left"><i class="mdi mdi-comment-multiple-outline"></i></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control icons-left">
                                <input class="input" name="no_hp" value="<?= $value->no_hp ?>" type="number" placeholder="Masukkan No Telepon" required>
                                <span class="icon left"><i class="mdi mdi-square-edit-outline"></i></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control icons-left">
                                <input class="input" name="username" value="<?= $value->username ?>" type="text" placeholder="Masukkan Username" required>
                                <span class="icon left"><i class="mdi mdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control icons-left">
                                <input class="input" name="password" value="<?= $value->password ?>" type="text" placeholder="Masukkan Password" required>
                                <span class="icon left"><i class="mdi mdi-lock"></i></span>
                            </div>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control icons-left">
                                <select class="input" name="level">
                                    <option value="">---Pilih Level User---</option>
                                    <option value="1" <?php if ($value->level_user == '1') {
                                                            echo 'selected';
                                                        } ?>>Admin</option>
                                    <option value="2" <?php if ($value->level_user == '2') {
                                                            echo 'selected';
                                                        } ?>>Pemilik</option>
                                </select>
                                <span class="icon left"><i class="mdi mdi-lock"></i></span>
                            </div>
                        </div>



                    </div>
                </div>
            </section>
            <footer class="modal-card-foot">
                <button type="submit" class="button red --jb-modal-close">Confirm</button>
            </footer>
        </div>

    </div>
    </form>
<?php
}
?>

<?php
foreach ($user as $key => $value) {
?>
    <form action="<?= base_url('Pemilik/cUser/delete/' . $value->id_user) ?>" method="POST">
        <div id="sample-modal" class="modal">
            <div class="modal-background --jb-modal-close"></div>

            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Hapus Data <?= $value->nama_user ?></p>
                </header>
                <section class="modal-card-body">
                    <p>Apakah Anda Yakin?</p>
                </section>
                <footer class="modal-card-foot">
                    <button type="submit" class="button blue --jb-modal-close">Confirm</button>
                    <button type="button" class="button red --jb-modal-close">Cancel</button>
                </footer>
            </div>


        </div>
    </form>
<?php
}
?>
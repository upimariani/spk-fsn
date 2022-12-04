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
            Create New User Akun
        </h1>
        <button class="button light">Button</button>
    </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-ballot"></i></span>
                Masukkan Data User
            </p>
        </header>
        <div class="card-content">
            <?php echo form_open_multipart('Pemilik/cUser/createUser'); ?>
            <div class="field">
                <label class="label">From</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" name="nama" type="text" placeholder="Masukkan Nama User">
                            <span class="icon left"><i class="mdi mdi-page-layout-sidebar-right"></i></span>
                        </div>
                        <?= form_error('nama', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" name="alamat" type="text" placeholder="Masukkan Alamat User">
                            <span class="icon left"><i class="mdi mdi-comment-multiple-outline"></i></span>
                        </div>
                        <?= form_error('alamat', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" name="no_hp" type="number" placeholder="Masukkan No Telepon">
                            <span class="icon left"><i class="mdi mdi-square-edit-outline"></i></span>
                        </div>
                        <?= form_error('no_hp', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" name="username" type="text" placeholder="Masukkan Username">
                            <span class="icon left"><i class="mdi mdi-account-circle"></i></span>
                        </div>
                        <?= form_error('username', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" name="password" type="text" placeholder="Masukkan Password">
                            <span class="icon left"><i class="mdi mdi-lock"></i></span>
                        </div>
                        <?= form_error('password', '  <p class="text-red-600 help">', '</p>') ?>
                    </div>
                    <hr>

                    <div class="field">
                        <label class="label">Level User</label>
                        <div class="control icons-left">

                            <select class="input" name="level">
                                <option value="">---Pilih Level User---</option>
                                <option value="1">Admin</option>
                                <option value="2">Pemilik</option>
                            </select>
                            <span class="icon left"><i class="mdi mdi-key"></i></span>
                        </div>
                        <?= form_error('level', '  <p class="text-red-600 help">', '</p>') ?>
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
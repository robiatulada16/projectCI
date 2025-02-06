<section class="page-section">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Pengajuan Surat</h2>
            <h3 class="section-subheading text-muted">Isi Form Pengajuan Surat di Bawah:</h3>
        </div>
        <div class="text-justify pl-5 pr-5">
            <?= form_open_multipart('suratonline/ajukan', 'id="ajukanSurat"') ?>
            <div class="row">
                <!-- Nama Universitas -->
                <div class="col-lg-6">
                    <label for="nama_universitas">Nama Universitas *</label>
                    <?= form_input(['name' => 'nama_universitas', 'id' => 'nama_universitas', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nama universitas Anda']); ?>
                </div>

                <!-- Jurusan -->
                <div class="col-lg-6">
                    <label for="jurusan">Jurusan *</label>
                    <?= form_input(['name' => 'jurusan', 'id' => 'jurusan', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan jurusan Anda']); ?>
                </div>

                <!-- Tanggal -->
                <div class="col-lg-6 mt-2">
                    <label for="tanggal">Tanggal *</label>
                    <?= form_input(['type' => 'date', 'name' => 'tanggal', 'id' => 'tanggal', 'class' => 'form-control', "required" => "required"]); ?>
                </div>

                <!-- Nomor HP -->
                <div class="col-lg-6 mt-2">
                    <label for="no_hp">No HP *</label>
                    <?= form_input(['type' => 'text', 'name' => 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nomor HP Anda']); ?>
                </div>

                <!-- Jenis Surat -->
                <div class="col-lg-6 mt-2">
                    <label for="jenis_surat">Pilih Jenis Surat *</label>
                    <?= form_dropdown('jenis_surat', $options, '', ['id' => 'jenis_surat', 'class' => 'form-control', "required" => "required"]); ?>
                </div>

                <!-- File Lampiran -->
                <div class="col-lg-6 mt-2">
                    <label for="file">File Berkas/Lampiran <sup class="text-danger">*PDF Recommended! | Max 5MB</sup></label>
                    <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control', "required" => "required"]); ?>
                </div>
            </div>

            <hr>
            <small>
                <p class="text-danger">PENTING!! Syarat Harus Terpenuhi, Jika Tidak Pengajuan Tidak Diproses!</p>
                <div id="syarat" class="text-danger"></div>
            </small>
            <hr>

            <!-- Tombol Submit -->
            <div class="row mt-2">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</section>

<section class="page-section mt-4">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Alur Magang</h2>
            <h3 class="section-subheading text-muted">Alur magang yang perlu dilakukan</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="step-down">
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="step-content">
                                <h4>Step 1: Pendaftaran</h4>
                                <p>Mendaftar ke program magang</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="step-content">
                                <h4>Step 2: Seleksi</h4>
                                <p>Seleksi administrasi dan psikotes</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="step-content">
                                <h4>Step 3: Wawancara</h4>
                                <p>Wawancara dengan tim HRD</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="step-content">
                                <h4>Step 4: Pengumuman</h4>
                                <p>Pengumuman hasil seleksi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

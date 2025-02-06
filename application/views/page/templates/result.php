<section class="page-section">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Tracking Surat Online</h2>
			<h3 class="section-subheading text-muted">Surat <b>Ditemukan</b>, Detail Dibawah:</h3>
		</div>
		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="row">
						<div class="col-lg-7">
							<h3>Keterangan:</h3>
							<table class="table">
								<tr>
									<td>Asal Sekolah</td>
									<td>:</td>
									<td><?= isset($row['asal_sekolah']) ? htmlspecialchars($row['asal_sekolah']) : 'N/A'; ?></td>
								</tr>
								<tr>
									<td>Jurusan</td>
									<td>:</td>
									<td><?= isset($row['jurusan']) ? htmlspecialchars($row['jurusan']) : 'N/A'; ?></td>
								</tr>
								<tr>
									<td>Tanggal</td>
									<td>:</td>
									<td><?= isset($row['tanggal']) ? htmlspecialchars($row['tanggal']) : 'N/A'; ?></td>
								</tr>
								<tr>
									<td>No Hp</td>
									<td>:</td>
									<td><?= isset($row['no_hp']) ? htmlspecialchars($row['no_hp']) : 'N/A'; ?></td>
								</tr>
								<tr>
									<td>Pilih Pengajuan</td>
									<td>:</td>
									<td><?= isset($row['pilih_pengajuan']) && isset($options[$row['pilih_pengajuan']]) ? htmlspecialchars($options[$row['pilih_pengajuan']]) : 'N/A'; ?></td>
								</tr>
								<tr>
									<td>File Lampiran</td>
									<td>:</td>
									<td>
										<?php if (isset($row['id']) && isset($row['file']) && $row['file'] !== ''): ?>
											<button class="btn btn-outline-info" data-toggle="modal" data-target="#lihatFile<?= htmlspecialchars($row['id']); ?>"><i class="fa fa-eye"></i></button>
										<?php else: ?>
											N/A
										<?php endif; ?>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div>
						<div class="checkout-wrap">
							<ul class="checkout-bar">
								<?php if (isset($row['status'])): ?>
									<?php if ($row['status'] === '1'): ?>
										<li class="active first">Pengajuan Surat<br>Pending</li>
										<li>Dokumen<br>Diterima</li>
										<li>Verifikasi Berkas / Persyaratan<br>Dilanjutkan</li>
										<li>Sudah Diketik dan<br>Diparaf</li>
										<li>Sudah Ditandatangani<br>Lurah</li>
										<li>Selesai / Dapat Diambil<br>&nbsp;</li>
									<?php elseif ($row['status'] === '2'): ?>
										<li class="active first">Pengajuan Surat<br>Pending</li>
										<li class="active">Dokumen<br>Ditolak</li>
									<?php else: ?>
										<li class="active">Status tidak diketahui</li>
									<?php endif; ?>
								<?php else: ?>
									<li>Data status tidak tersedia.</li>
								<?php endif; ?>
							</ul>
							<?php if (isset($row['status']) && $row['status'] === '2'): ?>
								<h4 class="text-danger mt-3">MAAF, PENGAJUAN ANDA DITOLAK KARENA SYARAT TIDAK TERPENUHI</h4>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<?php if (isset($row['id']) && isset($row['file']) && $row['file'] !== ''): ?>
<div class="modal fade" id="lihatFile<?= htmlspecialchars($row['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="fileLampiran">File ID: <?= htmlspecialchars($row['id']); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') . '/' . htmlspecialchars($row['file']); ?>"></embed>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
